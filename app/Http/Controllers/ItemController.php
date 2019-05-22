<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemType;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getAllItems(Request $request)
    {

        $items = Item::all();
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
        $item = Item::where('id', $id)->first();
        $item->stock = $request->stock;
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

    public function getItem($id)
    {
        $item = Item::where('item_type_id', $id)->get();
        return response()->json([
            'code' => 200,
            'items' => $item
        ]);
    }

}
