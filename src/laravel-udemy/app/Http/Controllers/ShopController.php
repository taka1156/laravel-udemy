<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
    //
    public function index() {
        // 主 -> 従
        $tokyo = Area::find(3)->shops;

        // 主 <- 従
        $shop = Shop::find(3)->area->name;

        // 多 <- 多
        $shop_route = Shop::find(1)->routes()->get();
        dd($tokyo, $shop, $shop_route);
    }
}
