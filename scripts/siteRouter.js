// Angular.js配置
let app = angular.module('sols', [
    'ngRoute',
    'ngAnimate'
])

// route配置
app.config(function ($routeProvider) {
    $routeProvider
    .when('/', {templateUrl: './templates/archives.tpl.php'})
    .when('/create', {templateUrl: './templates/create.tpl.html'})
    .when('/manage', {template: '<b>管理表白功能构建中...</b>'})
    .when('/help', {templateUrl: './templates/help.tpl.html'})
    .otherwise({redirectTo: '/'})
})