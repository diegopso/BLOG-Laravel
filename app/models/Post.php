<?php

class Post extends Eloquent
{
	// o que pode ser preenchido pelo contrutor?
	protected $fillable = array('title', 'content'); 

	public function comments() 
	{
		return $this->hasMany('Comment');
	}
}