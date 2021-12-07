<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
	protected $fillable = [
		'id',
		'otherComponents_id',
		'product_id',
		'guantity',
		'units_id',
	
		'created_at'
		
  ];

  public function units()
  {
	  return $this->belongsTo(\App\Models\Unit::class);
  }
  public function componentable()
  {
		return $this->morphTo();
  }
  public function recipes()
  {
		return $this->morphToMany(\App\Models\Recipe::class, 'componentable');
  }
}