<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($slug){

        $product = Product::whereSlug($slug)->firstOrFail();

        return view('front.products.index',compact('product'));

    }


}


