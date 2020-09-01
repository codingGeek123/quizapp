<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');
Route::post('options/insert', 'DynamicFieldController@optionsInsert')->name('options.insert');

Route::get('dynamic-field/getData','DynamicFieldController@getData')->name('dynamic-field.getData');

Route::get('options/view','DynamicFieldController@getOptions')->name('options.view');
Route::get('options/view/{id}','DynamicFieldController@viewOptions')->name('options.view');

