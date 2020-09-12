<?php
/**
 * This file contains all the routes for the project
 */

use App\Router;

Router::csrfVerifier(new \App\middlewares\CsrfVerifier());

Router::group(['namespace' => '\Demo\Controllers', 'exceptionHandler' => \App\handlers\CustomExceptionHandler::class], function () {

    Router::get('/', 'DefaultController@home')->setName('home');

    Router::get('/contact', 'DefaultController@contact')->setName('contact');

    Router::basic('/companies/{id?}', 'DefaultController@companies')->setName('companies');

    // API

    Router::group(['prefix' => '/api', 'middleware' => \App\middlewares\ApiVerification::class], function () {
        Router::resource('/demo', 'ApiController');
    });

    // CALLBACK EXAMPLES

    Router::get('/foo', function() {
        return 'foo';
    });

    Router::get('/foo-bar', function() {
        return 'foo-bar';
    });

});