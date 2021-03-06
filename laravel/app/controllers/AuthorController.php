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

	public function postCreate(){
		$validation = Author::validate(Input::all());

		if($validation->fails()) {
			return Redirect::to('new_author')
			->withErrors($validation)
			->withInput();
		} else{
			Author::create(array(
				'name'=>Input::get('name'),
				'bio'=>Input::get('bio')
			));
			return Redirect::to('authors')
			->with('message', 'The Author was created successfully!');
		}
	}
}