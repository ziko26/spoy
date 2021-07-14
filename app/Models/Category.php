<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug' ,  'active', 'image'
    ];


    public function getActive(){
        return   $this -> active == 1 ? '<span class="visible">Visible</span>'  : '<span class="inVisible">Hidden</span>';

    }

    public function getRouteKeyName(){
        return "slug";
    }

    public function brands(){
        return $this->hasMany(Models\Brand::class);
    }

}
