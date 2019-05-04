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
Route::post('evaluate', 'StrategyController@evaluateStrategies');
Route::post('prototype/strategies/description/evaluate', 'StrategyController@evaluateStrategies');
Route::get('strategies/current/{subject}/{step}', 'StrategyController@currentStrategies');
Route::get('strategies/saved/{subject}', 'StrategyController@getBookmarkedStrategies');
Route::get('strategies/weekly/{subject}/{step}', 'StrategyController@getWeeklyStrategies');
Route::post('strategies/save', 'StrategyController@storeBookmarkedStrategy');
Route::get('strategies/historical/{subject}', 'StrategyController@getUserHistoricalStrategies');
Route::get('strategies/{subject}/{step}', 'StrategyController@regularStrategies');
Route::get('description/{id}', 'StrategyController@strategyDescription');

Route::post('strategies/{subject}/{step}', 'StrategyController@saveStrategies');


