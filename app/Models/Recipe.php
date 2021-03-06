<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
	protected $fillable = [
		'id',
		'title',
		'title_uk',
		'thumbnail',
		'description',
		'description_uk',
		'shot_description',
		'shot_description_uk',
		'components',
		'components_uk'	
  ];


  public function image()
  {
	  return $this->morphMany(\App\Models\Image::class, 'imageable');
  }
}