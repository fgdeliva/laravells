<?php

class AuthorController extends BaseController{
	
	public $restful = true;

	public function getIndex(){
		return View::make('authors.index')
		->with('title', 'Authors and Books')
		->with('authors', Author::all());
	}
}