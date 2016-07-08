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

Route::get('/', function () {
    return view('example.home');
});

if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

Route::get('/live', 'ExampleController@getLive');

Route::get('/data', 'ExampleController@getData');

Route::get('/form', 'ExampleController@getForm');
Route::post('/form', 'ExampleController@postForm');