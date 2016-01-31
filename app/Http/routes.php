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
    return view('pages.one');
});

Route::get('home', 'PageController@index');

Route::get('english', 'PageController@home');

Route::get('about', function () {
    return view('booty_view');
});

Route::get('data', function () {
	$people = ['David', 'Gonzalo', 'Neil'];
    return view('data', ['people' => $people ]);
});

Route::get('my', 'MyController@yeah');

Route::get('agency', function () {
    return view('pages.one');
});

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
