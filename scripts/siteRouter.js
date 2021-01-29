angular.module('sols', ['ngRoute'])
    .config(function ($routeProvider) {
        $routeProvider
            .when('/', {templateUrl: './templates/archives.tpl.php'})
            .when('/create', {templateUrl: './templates/create.tpl.html'})
            .when('/help', {templateUrl: './templates/help.tpl.html'})
            .otherwise({redirectTo: '/'})
    })
