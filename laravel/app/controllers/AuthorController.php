<?php

class AuthorController extends BaseController{
	
	public $restful = true;

	public function getIndex(){
		return View::make('authors.index')
		->with('title', 'Authors and Books')
		->with('authors', Author::orderBy('name')->get());
	}

	public function getView($id){
		return View::make('authors.view')
		->with('title', 'Author View Page')
		->with('author', Author::find($id));
	}

	public function getNew(){
		return View::make('authors.new')
		->with('title', 'Add New Author');
	}
}