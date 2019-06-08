<?php

namespace App\Http\Controllers;

use App\StockIn;
use App\Item;
use App\CartStockIn;
use Auth;
use Validator;
use Illuminate\Http\Request;

class StockInController extends Controller
{
    public function createStockIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'staff_id' => 'required'
        ]);

        $carts = CartStockIn::where('user_id', Auth::user()->id)->get();
        $stockIn = new StockIn;

        if($validator->fails()){
            return response()->json([
                'code' => 400,
                'message' => $validator->errors()->first()
            ]);
        }

        $stockIn->user_id = Auth::user()->id;
        $stockIn->staff_id = $request->staff_id;
        $stockIn->save();
        foreach($carts as $cart){
            $stockIn->stockInDetails()->create([
                'item_id' => $cart->item_id,
                'qty' => $cart->qty,
                'remarks' => $cart->remarks
            ]);
            $item = Item::where('id', $cart->item_id)->first();
            $item->stock += $cart->qty;
            $item->save();
        }
        CartStockIn::where('user_id', Auth::user()->id)->delete();
        return response()->json([
            'code' => 200,
            'message' => 'Success Input Stock In'
        ]);
    }
}
