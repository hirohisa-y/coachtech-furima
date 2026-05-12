<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemStoreRequest;
use App\Models\Item;
// use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        return view('item.index');
    }//

    public function show($id)
    {
        return view('item.show');
    }

    public function sell()
    {
        return view('item.sell');
    }

    public function purchase($id)
    {
        return view('item.purchase');
    }

    public function address($id)
    {
        return view('item.address');
    }

    public function store(ItemStoreRequest $request)
    {
        $imagePath = null;
        // リクエストに 'image' ファイルが含まれているか確認
        if ($request->hasFile('image')) {
        // ファイルを保存してパスを取得
            $imagePath = $request->file('image')->store('items', 'public');
        }
        var_dump($request->all());
        exit;
        // 商品の保存
        $item = Item::create([
            'name'        => $request->name,
            'brand_name'  => $request->brand_name,
            'explanation' => $request->explanation,
            'price'       => $request->price,
            'status'   => $request->status,
            'image'  => $imagePath,
            'user_id' => auth()->id(),
        ]);
        return response()->json([
            'message' => '商品を登録しました',
        ], 201);
    }
}
