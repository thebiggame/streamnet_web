<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.watch');
});

Route::get('/watch', function () {
    return view('pages.watch');
});

Route::get('/interna', function () {
    return view('pages.interna2instructions');
});
// Route::get('/interna/directory', 'InternaController@listStream');
// Route::get('/interna/watch/{streamname}', 'InternaController@getStream');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
