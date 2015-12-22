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
    return view('welcome');
});

Route::group(['prefix' => 'content', 'namespace' => 'content'], function () {
    Route::resource('users', 'UsersController',
        ['only' => ['index', 'show', 'edit', 'update']]);
    Route::resource('stories', 'StoriesController',
        ['only' => ['index', 'show', 'edit', 'update']]);
    Route::resource('self_stories', 'SelfStoriesController',
        ['only' => ['index', 'show', 'edit', 'update']]);
    Route::resource('posts', 'PostsController',
        ['only' => ['index', 'show', 'edit', 'update']]);
});


Route::group(['prefix' => 'push', 'namespace' => 'push'], function () {
    Route::get('registered_users', 'RegisteredUsersController@index');
    Route::get('jobs', 'JobsController@index');
});

