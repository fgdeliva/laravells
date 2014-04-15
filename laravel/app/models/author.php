<?php

class Author extends Eloquent{
	protected $table = "authors";
	protected $fillable = array('name', 'bio');


	public static function validate($data){
		return Validator::make($data, 
				array('bio' => 'required|min:10',
					'name' => 'required|min:10|alpha') 		
			);
	}
}