app.controller("HomeController", function($scope, $http, $timeout, cfpLoadingBar) {

	$scope.categoriesList = [];

	$scope.init = function () {
        $scope.loadCategories();
    }

	$scope.loadCategories = function () {
    	$http.get("/categories").then(function(response) {
            $scope.categoriesList = response.data;
            console.log("$scope.categoriesList", $scope.categoriesList);
    	});
    };

});