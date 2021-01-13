<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::online()->latest()->get();

        return view('shops.index', [
            'shops' => $shops
        ]);
    }

    public function show(Shop $id)
    {
        return view('shops.show', [
            'shop' =>$id
        ]);
    }
}
