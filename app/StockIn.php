<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockIn extends Model
{
    protected $fillable = [
        'user_id', 'item_id', 'qty', 'remarks'
    ];
}
