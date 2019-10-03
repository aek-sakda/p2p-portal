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

Route::group(['namespace' => 'Register', 'prefix' => '/register'], function ($router) {
    $router->get('/', 'RegisterController@index');
    $router->get('/corporation', 'RegisterController@corporation');
    $router->get('/personal', 'RegisterController@personal');
    $router->get('/congratulations', 'RegisterController@congratulations');
    $router->get('/risk-assessment', 'RegisterController@riskAssessment');
    $router->get('/risk-assessment-result', 'RegisterController@riskAssessmentResult');
    $router->get('/term-and-conditions', 'RegisterController@termAndCondition');
    $router->get('/success', 'RegisterController@success');
    //$router->get('/{id}', 'EmployeeController@show');
    //$router->post('/', 'EmployeeController@create');
    //$router->put('/{id}', 'EmployeeController@update');
    //$router->delete('/{id}', 'EmployeeController@delete');
});

Route::group(['namespace' => 'BackOffice', 'prefix' => '/backoffice'], function ($router) {
    $router->get('/dashboard', 'DashboardController@dashboard');
});
