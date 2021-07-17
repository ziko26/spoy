<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'pages'; 
    protected $fillable = [
        'page_name', 'slug', 'page_content'
    ];

    public function getRouteKeyName(){
        return "slug";
    }

}
