<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockIn extends Model
{
    protected $fillable = [
        'user_id', 'item_id', 'qty', 'remarks'
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function items()
    {
        return $this->belongsTo('App\Item', 'item_id');
    }
}
