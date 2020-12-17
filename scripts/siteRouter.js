angular.module('sols', ['ngRoute'])
.config(function ($routeProvider) {
    $routeProvider
        .when('/archives', { templateUrl: './templates/php/archives.tpl.php' })
        .when('/create', { templateUrl: './templates/html/create.tpl.html' })
        .when('/help', { templateUrl: './templates/html/help.tpl.html' })
        .otherwise({ redirectTo: '/archives' })
})
