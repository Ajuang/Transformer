<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$router->bind('transformers',function($slug){
    return App\Transformer::whereSlug($slug)->first();
});

//
$router->get('home', ['as'=> 'home', 'uses' =>  'HomeController@home']);

$router->get('/', ['as'=> 'details', 'uses' => 'TransformersController@index']);

$router->get('help', ['as'=> 'details', 'uses' => 'TransformersController@help']);

$router->get('about', ['as'=> 'details', 'uses' =>  'TransformersController@about']);

$router->get('details', ['as'=> 'details', 'uses' => 'TransformersController@details']);

$router->get('details/{slug}',['as'=> 'details', 'uses' =>  'TransformersController@show']);

$router->get('details/{slug}/edit', ['as'=> 'details', 'uses' => 'TransformersController@edit']);

$router->patch('details/{slug}', ['as'=> 'details', 'uses' => 'TransformersController@update']);

//$router->get('/details/{id}/condition', ['as'=> 'details', 'uses' => 'TransformersController@condition']);

$router->get('/details/{id}/condition',['as'=> 'condition', 'uses' => 'tconditionscontroller@condition']);

$router->post('/details/add', 'TransformersController@addnew');

$router->get('/details/{slug}/delete', 'TransformersController@delete');

$router->get('users', ['as'=> 'users', 'uses' => 'UserController@users']);

$router->get('users/{username}',['as'=> 'users', 'uses' =>  'UserController@show']);

$router->get('users/{username}/edit', ['as'=> 'users', 'uses' => 'UserController@edit']);

$router->patch('users/{username}', ['as'=> 'users', 'uses' => 'UserController@update']);

$router->post('/users/add', 'UserController@addnew');

$router->get('/users/{username}/delete', 'UserController@delete');



$router->controllers([
    'auth' => '\App\Http\Controllers\Auth\AuthController',
    'password' => '\App\Http\Controllers\Auth\PasswordController',
]);