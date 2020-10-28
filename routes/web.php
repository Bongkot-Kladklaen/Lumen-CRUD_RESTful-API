<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'Api working';
});

$router->group(['prefix'=>'api/v1'],function() use ($router){
    $router->get('products','ProductController@productAll');
    $router->get('productID/{id}','ProductController@productID');
    $router->post('productInsert','ProductController@productInsert');
    $router->put('productUpdate/{id}','ProductController@productUpdate');
    $router->delete('productDelete/{id}','ProductController@productDelete');
});
