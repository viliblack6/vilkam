/**
* Configure the Routes
*/
app.config(function($routeProvider) {
	$routeProvider
		.when('/home', {
			templateUrl: '../view/Home/home.html',
			controller: 'HomeController'
		})
		.when('/us', {
			templateUrl: '../view/Us/us.html'
		})
		.when('/contact-us', {
			templateUrl: '../view/Contact-us/contact-us.html'
		})
		.when('/products/:category_name', {
			templateUrl: '../view/Products/products.html',
			controller: 'ProductsController'
		})
		.when('/products/:category_name/:product_name', {
			templateUrl: '../view/Products/products.html',
			controller: 'ProductsController'
		})
		.otherwise({
			redirectTo: '/home'
		});
});