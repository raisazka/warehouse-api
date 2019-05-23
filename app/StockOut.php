<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockOut extends Model
{
    protected $fillable = [
        'installer_id', 'worker_id', 'user_id'
    ];

    public function stockOutDetails()
    {
        return $this->hasMany('App\StockOutDetail');
    }
}
