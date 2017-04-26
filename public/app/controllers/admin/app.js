var app = angular.module('myApp', ['ngTouch', 'ui.grid', 'ui.grid.pagination']);

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});