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

Route::get('strategies/all', 'StrategyController@allStrategies');
Route::get('strategies/current/{subject}', 'StrategyController@currentStrategies');
Route::get('strategies/saved/{subject}', 'StrategyController@getBookmarkedStrategies');
Route::get('strategies/{subject}/{step}', 'StrategyController@regularStrategies');
Route::get('description/{id}', 'StrategyController@strategyDescription');

Route::post('strategies/{subject}/{step}', 'StrategyController@saveStrategies');
Route::post('strategies/evaluate', 'StrategyController@evaluateStrategies');


