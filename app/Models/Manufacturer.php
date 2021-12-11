<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
	use Translatable;
	
	protected $fillable = [
		 'id',
		 'title',
		 'title_uk',
	

	];

	public function products()
	{
		 return $this->hasMany(\App\Models\Product::class);
	}
}