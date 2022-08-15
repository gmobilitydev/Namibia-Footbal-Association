<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop\Product;
class ShopController extends Controller
{
    //
    public function index(){
        $productList = Product::paginate(8);
        return view('shop.index',['productList'=>$productList]);
    }
}
