<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	use Translatable;
	
	protected $fillable = [
		'id',
		'text',
		'text_uk',
		
	];
}