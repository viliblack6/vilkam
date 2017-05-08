/**
 * Creating aplication AngularJS
 */
var app = angular.module('sistema_administrativo_vilkam', [
	'ngRoute',
    'chieffancypants.loadingBar',
    'ngAnimate',
    'jcs-autoValidate'
]);

angular.module('jcs-autoValidate')
    .run([
    'defaultErrorMessageResolver',
    function (defaultErrorMessageResolver) {
        // passing a culture into getErrorMessages('fr-fr') will get the culture specific messages
        // otherwise the current default culture is returned.
        defaultErrorMessageResolver.getErrorMessages().then(function (errorMessages) {
            errorMessages['myCustomError'] = 'My custom error message';
            errorMessages['anotherErrorMessage'] = 'An error message with the attribute value {0}';
            errorMessages['requiredError'] = 'Campo requerido';
            errorMessages['emailError'] = 'Ingresa el correo electrónico';
            errorMessages['onlyTextError'] = 'Ingresa solo letras';
        });
    }
]);

angular.autoValidate.errorMessages['default'] = {
    defaultMsg: 'Agrege el mensaje de error para {0}',
    email: 'Ingrese un correo válido',
    minlength: 'Inserte almenos {0} caracteres',
    maxlength: 'Has ingresado más del número {0} de caracteres permitidos {0}',
    min: 'Ingrese un valor menor a {0}',
    max: 'Ingrese un valor mayor a {0}',
    required: 'Este campo es requerido',
    date: 'Ingrese una fecha válida',
    pattern: 'Asegurese que la información ingresada coincide con el patrón {0}',
    number: 'Ingrese sólo números',
    url: 'Ingrese una URL válida en el formato http(s)://www.google.com'
};

app.config(function(cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeSpinner = true;
});

app.filter('spaceless',function() {
    return function(input) {
        if (input) {
            return input.replace(/\s+/g, '-');    
        }
    }
});

app.filter('slugify', function(){
    return function(input){
        var tittles = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç";
        var original = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc";
        for (var i = 0; i < tittles.length; i++) {
            input = input.replace(tittles.charAt(i), original.charAt(i)).toLowerCase();
        };
        return input;
   };
});

app.filter('capitalizeFirstLetter', function() {
    return function(input) {
      return (!!input) ? input.charAt(0).toUpperCase() + input.substr(1).toLowerCase() : '';
    }
});
