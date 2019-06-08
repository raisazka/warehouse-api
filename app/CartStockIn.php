<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartStockIn extends Model
{
    protected $fillable = [
        'user_id','item_id', 'qty', 'remarks'
    ];


    public function items(){
        return $this->belongsTo('App\Item', 'id');
    }
}
