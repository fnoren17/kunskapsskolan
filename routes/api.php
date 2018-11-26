<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('strategies/current/{subject}', 'StrategyController@currentStrategies');
Route::get('strategies/saved/{subject}', 'StrategyController@bookmarkedStrategies');
Route::get('strategies/{subject}/{step}', 'StrategyController@regularStrategies');
Route::post('strategies/{subject}/{step}', 'StrategyController@saveStrategies');
Route::get('description/{id}', 'StrategyController@strategyDescription');


