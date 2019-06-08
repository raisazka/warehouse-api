<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use App\Item;
use App\CartStockIn;

class CartStockInController extends Controller
{
    public function getCart()
    {
        $carts = DB::table('cart_stock_ins as cs')
                ->join('items as i', 'cs.item_id', 'i.id')
                ->join('users as u', 'cs.user_id', 'u.id')
                ->select('i.id','i.item_description as item_name', 'cs.qty', 'cs.remarks')
                ->where('u.id', Auth::user()->id)
                ->get();
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

        CartStockIn::create([
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
        CartStockIn::destroy($id);
        return response()->json([
            'code' => 200,
            'message' => 'Success Delete Cart Item'
        ]);
    }
}
