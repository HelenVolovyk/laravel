<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otherimage extends Model
{
    
	protected $fillable = [
		'id',
		'img_alt',
		'img_src'
		

	];

	public function Instagrams()
	{
		return $this->hasOne(\App\Models\Instagram::class);
	}
}