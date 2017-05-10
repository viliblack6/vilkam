app.controller("HomeController", function($scope, $http, $timeout, cfpLoadingBar) {

	$scope.categoriesList = [];

	$scope.init = function () {
        $scope.loadCategories();
    }

	$scope.loadCategories = function () {
        var req = {
            method: 'GET',
            url: '/categories',
            headers: {
                'Content-Type': 'application/json; charset=UTF-8'
            }
            //,data: { test: 'test' }
        }
        

        $http(req).then(function(response){
            console.log("reponse", response);
        }, function(){

        });
        /*
    	$http.get("/categories").then(function(response) {
            $scope.categoriesList = response.data;
            console.log("$scope.categoriesList", $scope.categoriesList);
    	});
        */
    };

});