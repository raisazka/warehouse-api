<?php

namespace App\Http\Controllers;

use App\Cart;
use Validator;
use Auth;
use App\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return response()->json([
            'code' => 200,
            'carts' => $carts
        ]);
    }

    public function addToCart(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'item_id' => 'required',
            'qty' => 'required|numeric|min:1',
        ]);

        if($validator->fails()){
            return response()->json([
                'code' => 400,
                'message' => $validator->errors()->first()
            ]);
        }

        $item = Item::where('id', $request->item_id)->first();

        if($item->stock == 0 || $item->stock < $request->qty){
            return response()->json([
                'code' => 400,
                'message' => 'Stock Out is Prohibited. Unsufficient Stock'
            ]);
        }

        Cart::create([
            'user_id' => Auth::user()->id,
            'item_id' => $request->item_id,
            'qty' => $request->qty,
            'remarks' => $request->remarks
        ]);

        return response()->json([
            'code' => 200,
            'message' => 'Success Add Item to Cart'
        ]);
    }

    public function deleteCart($id)
    {
        Cart::destroy($id);
        return response()->json([
            'code' => 200,
            'message' => 'Success Delete Cart Item'
        ]);
    }

}
