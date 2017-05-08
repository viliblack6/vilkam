app.controller("ProductsController", function($scope, $http, $routeParams, $location, $timeout, cfpLoadingBar) {

	$scope.sliderIsEnabled = true;
    $scope.categorySelected = null;
    $scope.categoryNameSelected = null;
    $scope.productSelected = null;
    $scope.productNameSelected = null;
    $scope.categoriesList = [];
    $scope.productsList = [];

    $scope.start = function() {
      cfpLoadingBar.start();
    }

    $scope.complete = function () {
      cfpLoadingBar.complete();
    }

    $scope.init = function () {
        $scope.loadCategories();
    }

    $scope.loadCategories = function () {
    	$http.get("/categories").then(function(response) {
            $scope.categoriesList = response.data;
            console.log("$scope.categoriesList", $scope.categoriesList);
    	});
    };

    $scope.loadProducts = function (categorySelected) {
        console.log("$scope.categorySelected", $scope.categorySelected);
        $http.get("/showProductByNameCategory/"+categorySelected).then(function(response) {
            $scope.productsList = response.data;
            console.log("$scope.productsList", $scope.productsList);
            if($scope.productsList.length == 0)
                $location.path("products/" + $scope.categoriesList[0].category_alias);
            else {
                $scope.categoriesList.forEach(function(data){
                    if(data.category_alias == $scope.categorySelected)
                        $scope.categoryNameSelected = data.name;
                });
            }
        });
    }

    $scope.loadProductDetail = function (categorySelected, productSelected) {
        $http.get("/showProductDetail/" + categorySelected + "/" + productSelected).then(function(response) {
            $scope.productDetail = response.data;
            console.log("$scope.productDetail",$scope.productDetail);
            if($scope.productDetail.length == 0)
                $location.path("products/" + $scope.categoriesList[0].category_alias);
            else {
                $scope.categoriesList.forEach(function(data){
                    if(data.category_alias == $scope.categorySelected) {
                        $scope.categoryNameSelected = data.name;
                    }
                });
                $scope.productDetail.forEach(function(data){
                    if(data.product_alias == productSelected) {
                        $scope.productNameSelected = data.name;
                    }
                });
            }
        });
        $scope.productSelected = productSelected;
    }
    
    $scope.categorySelected = $routeParams.category_name;
    $scope.productSelected = $routeParams.product_name;
    if($scope.categorySelected != null && $scope.productSelected == undefined) {
        $scope.loadProducts($scope.categorySelected);
    }
    else if($scope.categorySelected != null && $scope.productSelected != null) {
        $scope.loadProductDetail($scope.categorySelected, $scope.productSelected);
    }

    /*
    $scope.start();
    $scope.fakeIntro = true;
    $timeout(function() {
      $scope.complete();
      $scope.fakeIntro = false;
    }, 750);
    */

});