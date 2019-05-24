<?php

namespace App\Http\Controllers;

use App\StockIn;
use Auth;
use Validator;
use Illuminate\Http\Request;

class StockInController extends Controller
{
    public function createStockIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'item_id' => 'required',
            'qty' => 'required|numeric|min:1'
        ]);

        if($validator->fails()){
            return response()->json([
                'code' => 400,
                'message' => $validator->errors()->first()
            ]);
        }

        $item = Item::where('item_id', $request->item_id)->first();

        StockIn::create([
            'user_id' => Auth::user()->id,
            'item_id' => $request->item_id,
            'qty' => $request->qty,
            'remarks' => $request->remarks
        ]);

        $item->stock += $request->qty;
        $item->save();

        return response()->json([
            'code' => 200,
            'message' => 'Success Insert Data'
        ]);
    }
}
