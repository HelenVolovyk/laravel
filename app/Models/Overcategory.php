<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Overcategory extends Model
{
	use Translatable;
	
	protected $fillable = [
		 'id',
		 'title',
		 'title_uk',
		 'webname',
		

	];

	public function categories()
	{
		 return $this->hasMany(\App\Models\Category::class);
	}
}