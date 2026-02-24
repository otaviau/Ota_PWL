<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function IndexFood(){
        return view('products/food_beverage');
    }
    public function IndexBaby(){
        return view('products/baby_kid');
    }
    public function IndexBeauty(){
        return view('products/beauty_health');
    }
    public function IndexHomeCare(){
        return view('products/home_care');
    }
}
