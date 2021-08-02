<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'cities'; 
    protected $fillable = [
        'name', 'slug',
    ];

    public function getRouteKeyName(){
        return "slug";
    }

    public function users(){
        return $this->hasMany(\App\User::class);
    }
}
