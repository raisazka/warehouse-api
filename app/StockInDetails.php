<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockInDetails extends Model
{
    protected $fillable = [
        'stock_in_id', 'item_id', 'qty', 'remarks'
    ];

    public function items(){
        return $this->belongsTo('App\Item', 'item_id');
    }
}
