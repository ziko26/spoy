<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name', 'customer_phone', 'customer_address', 'statut', 'item_id','item_price', 'user_id'
    ];

    public function getStatut(){
 
        if($this->statut == 0){
         return '<span class="pending">Pending</span>';
        }elseif($this->statut == 1){
          return '<span class="delevraid">Delevraid</span>';
        }elseif($this->statut == 2){
            return '<span class="canceled">Canceled</span>';
        }

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
