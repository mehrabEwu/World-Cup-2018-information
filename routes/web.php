<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/home','HomeController@home');

Route::get('/admin','adminLoginController@index');
Route::post('/admin/checklogin','adminLoginController@checklogin');
Route::get('admin/adminDashboard','adminLoginController@adminDashboard');
Route::get('admin/logout','adminLoginController@logout');
Route::get('adminDashboard/addCountry','countryController@index');
Route::get('adminDashboard/addPlayer','addPlayerController@index');
Route::post('adminDashboard/addCountry','countryController@store');
Route::post('adminDashboard/addPlayer','addPlayerController@store');
Route::get('adminDashboard/addResult','addResultController@index');
Route::get('adminDashboard/updatePlayer','plUpdateController@index');

Route::get('adminDashboard/updatePlayer/{cname?}','plUpdateController@show');

Route::get('adminDashboard/updatePlayer/{slug?}/edit','plUpdateController@edit');
Route::post('adminDashboard/updatePlayer/{slug?}/edit','plUpdateController@update');

Route::get('/squad','squadController@index');

Route::get('squad/showSquad/{cname?}', 'squadController@show');

Route::get('squad/showSquad/playerInfo/{slug?}', 'playerInfoController@show');

Route::post('adminDashboard/addResult','addResultController@store');


Route::get('/countryList','countryListController@index');
Route::get('/fixture','fixtureController@index');
Route::get('/showScores','showScoresController@show');

Route::get('/stadium','stadiumController@index');


