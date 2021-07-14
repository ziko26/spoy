<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'brands'; 
    protected $fillable = [
        'name', 'slug', 'image', 'location_link', 'description', 'user_id', 'category_id'
    ];

    public function getRouteKeyName(){
        return "slug";
    }

    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


}
