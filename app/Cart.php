<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id','item_id', 'qty', 'remarks'
    ];

    protected $hidden = [
        'items'
    ];

    protected $appends = array('item_name');

    public function getItemNameAttribute($value){
        $itemName = null;
        if ($this->item_id){
            $itemName = $this->items->item_description;
        }
        return $itemName;
    }

    public function items(){
        return $this->belongsTo('App\Item', 'id');
    }
}
