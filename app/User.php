<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullName',
        'phone',
        'comany_name',
        'city_id',
        'address',
        'active',
        'paid',
        'code',
        'email_verified_at',
        'email',
        'password'

    ];

    public function getActive(){
 
        if($this->active == 1){
         return '<span class="user-active">Active</span>';
        }elseif($this->active == 0){
          return '<span class="user-notActive">inActive</span>';
        }

    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders(){
        return $this->hasMany(Models\Order::class);
    }
    
    public function brand(){
        return $this->HasOne(Models\Brand::class);
    }

    public function items(){
        return $this->hasMany(Models\Item::class);
    }

    public function city(){
        return $this->belongsTo(Models\City::class);
    }



}
