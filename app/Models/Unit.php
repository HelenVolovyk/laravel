<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
	protected $fillable = [
		'id',
		'name',
  ];

  public function products()
  {
		return $this->hasMany(\App\Models\Product::class);
  }
  public function components()
  {
		return $this->hasMany(\App\Models\Component::class);
  }
}