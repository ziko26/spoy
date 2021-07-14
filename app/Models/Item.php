<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'items'; 
    protected $fillable = [
        'name', 'image', 'active', 'price', 'price_descount', 'description', 'user_id',
    ];


    public function getRouteKeyName(){
        return "slug";
    }

    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
    


}
