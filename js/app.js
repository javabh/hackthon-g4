var app = angular.module('chocolates', ['ngRoute']);


app.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'front.html',
            controller: 'mainController'
        })

});