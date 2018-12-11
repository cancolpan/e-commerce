<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        return view('front.cart.index');

    }


    public function add()
    {

        $product = Product::findOrFail(request('id'));

        \Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => request('quantity'),
            'attributes' => array('slug' => $product->slug, 'image' => $product->image_1)

        ));


        return redirect()->route('cart')->with('success', 'Product Added to Cart');

    }

    public function remove()
    {
        \Cart::remove(request('id'));
        return redirect()->route('cart')->with('success', 'Product Removed from Cart');


    }

    public function update()
    {

        \Cart::update(request('id'), array(
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )

        ));

        return redirect()->route('cart')->with('success', 'Cart Updated');


    }

    public function clear(){

        \Cart::clear();

        return redirect()->route('cart')->with('success', 'Cart Cleaned');

    }


}
