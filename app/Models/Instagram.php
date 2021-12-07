<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
	protected $fillable = [
		'id',
		'otherimages_id',
		'inst_src'

	];

	public function otherimages()
	{
		return $this->belongsTo(\App\Models\Otherimage::class);
	}
}