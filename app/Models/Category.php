<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use Translatable;
	
    protected $fillable = [
        'id',
        'title',
		  'title_uk',
		  'webname',
		  'parent_id',
        'description',
        'description_uk'

	 ];
	 
	 private $descendants = [];

    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

	 public function categories(){

		return $this->hasMany(\App\Models\Category::class, 'parent_id');
  	}
	
    public function image()
    {
        return $this->morphOne(\App\Models\Image::class, 'imageable');
    }

    public function getShotDescriptionAttribute()
    {
        $more = strlen($this->description) > 100 ? '...' : '';

        return substr($this->description, 0, 100) . $more;
	 }
	 
	public function getRouteKeyName()
	{
		return 'webname'; 
	}

	

	public function children()
		{
			 return $this->categories()->with('children');
		}

	public function hasChildren(){
			 if($this->children->count()){
				  return true;
			 }

			 return false;
		}

	public function findDescendants(Category $category){
			 $this->descendants[] = $category->id;

			 if($category->hasChildren()){
				  foreach($category->children as $child){
						$this->findDescendants($child);
				  }
			 }
		}

	 public function getDescendants(Category $category){
			 $this->findDescendants($category);
			 return $this->descendants;
		}

}