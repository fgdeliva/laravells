<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('authors', array('as'=>'authors', 'uses'=>'AuthorController@getIndex'));
Route::get('author/{id}', array('as'=>'author', 'uses'=>'AuthorController@getView'));
Route::get('authors/new', array('as'=>'new_author', 'uses'=>'AuthorController@getNew'));
Route::post('authors/create', array('uses'=>'AuthorController@postCreate'));