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

    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function workers(){
        return $this->belongsTo('App\Worker', 'worker_id');
    }

    public function installers(){
        return $this->belongsTo('App\Installer', 'installer_id');
    }
}
