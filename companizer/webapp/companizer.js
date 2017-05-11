'use strict';

// Define the `phonecatApp` module
angular.module('companizer', [
  'ngRoute',
  'profile',
  'home',
  'navigationcompanizer'
])
.config( function config($locationProvider, $routeProvider) {

       $routeProvider.
         when('/profile', {
           template: '<profile></profile>'
         }).
         when('/home', {
           template: '<home></home>'
         }).
         otherwise('/profile');
     }
   );
