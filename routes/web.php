<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function (\Illuminate\Routing\Router $router) {
    $router->get('/', ['as' => 'home', 'uses' => 'Controller@home']);
});

Route::group(['namespace' => 'Auth'], function (\Illuminate\Routing\Router $router) {
    $router->get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
    $router->post('/login', ['as' => 'login', 'uses' => 'LoginController@login']);
    $router->get('/register', ['as' => 'register', 'uses' => 'RegisterController@index']);
    $router->post('/register', ['as' => 'register', 'uses' => 'RegisterController@register']);
    $router->get('/logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);
});

Route::group(['namespace' => 'Survey', 'middleware' => 'start.survey'], function (\Illuminate\Routing\Router $router) {
    $router->get('/summary', ['as' => 'summary', 'uses' => 'SurveyController@summary']);
    $router->post('/save-answers/{question_id}', ['as' => 'save-answers', 'uses' => 'SurveyController@saveAnswers']);
    $router->get('/survey', ['as' => 'survey', 'uses' => 'SurveyController@index']);
});