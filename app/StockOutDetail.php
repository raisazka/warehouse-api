<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockOutDetail extends Model
{
    protected $fillable = [
        'stock_out_id', 'item_id', 'qty', 'remarks'
    ];
}
