<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemType;
use App\AdjustStock;
use Illuminate\Http\Request;
use Validator;
use Auth;

class ItemController extends Controller
{
    public function getItems($warehouseId)
    {

        $items = Item::where('warehouse_id', $warehouseId)->get();
        return response()->json([
            'code' => 200,
            'items' => $items
        ]);
    }
    
    public function showItem($id)
    {
        $item = Item::where('id', $id)->first();
        return response()->json($item);
    }

    public function updateItemStock(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'qty' => 'required|numeric|min:1'
        ]);
        
        $item = Item::where('id', $id)->first();

        if($validator->fails()){
            return response()->json([
                'code' => 400,
                'message' => $validator->errors()->first()
            ]);
        }
        $adjust = new AdjustStock;
        $adjust->user_id = Auth::user()->id;
        $adjust->old_stock = $item->stock;
        $adjust->new_stock = $request->qty;
        $adjust->save();

        $item->stock = $request->qty;

        $item->save();
        return response()->json([
            'code' => 200,
            'message' => 'Success Update Item Stock'
        ]);
    }

    public function getItemType()
    {
        $item_types = ItemType::all();
        return response()->json([
            'code' => 200,
            'item_types' => $item_types
        ]);
    }

    public function getItem($id, $warehouseId)
    {
        $item = Item::where('item_type_id', $id)->where('warehouse_id', $id)->get();
        return response()->json([
            'code' => 200,
            'items' => $item
        ]);
    }

}
