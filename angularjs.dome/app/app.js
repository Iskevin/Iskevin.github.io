// var app = angular.module('app', ["ngRoute"]);
// //config 配置  $routeProvider 路由提供
// 	app.config(['$routeProvider',function($routeProvider) {
// 		$routeProvider.when("/", {
// 			// template : "首页"
// 			templateUrl:"views/1.html"
// 		}).when("/1",{
// 			// template : "产品列表"
// 			templateUrl:"views/2.html"
// 		}).otherwise({
// 			// template : "未知"
// 			templateUrl:"views/3.html"
// 		});
// 	}]);
// 	// app.controller('maincontroll',function($scope){

// 	// });

	 angular.module('app',['ngRoute'])
		.config(['$routeProvider', function($routeProvider){
		$routeProvider
		.when('/',{templateUrl:"views/1.html"})
		.when('/1',{templateUrl:"views/2.html"})
		.when('/2',{templateUrl:"views/3.html"})
		.otherwise({redirectTo:'/'});
		}]).controller('controller',function($scope){
			// $scope.del = "1";
	});