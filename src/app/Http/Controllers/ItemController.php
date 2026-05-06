<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
