<?php

namespace App\Http\Controllers;

use Validator;
use Auth;
use App\Cart;
use App\StockOut;
use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function createStockOut(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'worker_id' => 'required',
            'installer_id' => 'required'
        ]);


        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $stockOut = new StockOut;

        if($validator->fails()){
            return response()->json([
                'code' => 400,
                'message' => $validator->errors()->first()
            ]);
        }

        $stockOut->user_id = Auth::user()->id;
        $stockOut->worker_id = $request->worker_id;
        $stockOut->installer_id = $request->installer_id;
        $stockOut->save();
        foreach($carts as $cart){
            $stockOut->stockOutDetails()->create([
                'item_id' => $cart->item_id,
                'qty' => $cart->qty,
                'remarks' => $cart->remarks
            ]);
        }
        Cart::where('user_id', Auth::user()->id)->delete();
        return response()->json([
            'code' => 200,
            'message' => 'Success Input StockOut'
        ]);
    }
}
