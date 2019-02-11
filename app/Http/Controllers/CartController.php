<?php

namespace App\Http\Controllers;

use App\Models\BoxGroupProduct;
use App\Models\BoxGroups;
use App\Models\PackingType;
use App\Models\PackingTypeProduct;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        session_start();

        $products = \Cart::getContent();


        if (count($products) > 0) {


            $packing_types = PackingType::all();

            foreach ($packing_types as $packing_type) {
                //$newdata = array();
                ${'type_' . $packing_type->id} = array();

                foreach ($products as $product) {

                    $packing_type_products = PackingTypeProduct::where('product_id', '=', $product->id)->get();

                    //print_r($packing_type_products); die();

                    foreach ($packing_type_products as $packing_type_product) {

                        if ($packing_type->id == $packing_type_product->packing_type_id) {

                            $newdata = array(
                                'packing_type_id' => $packing_type->id,
                                'weight' => $packing_type_product->weight,
                                'quantity' => $product->quantity,
                            );

                            array_push(${'type_' . $packing_type->id}, $newdata);


                        }


                    }


                }

                //print_r(${'type_' . $packing_type->id});

                //Session a atiyoruz

                session(["type_" . $packing_type->id => ${'type_' . $packing_type->id}]);

            }


//            $box_groups = BoxGroups::all();
//            $boxes = array();
//            $newdata = array();
//
//            foreach ($box_groups as $box_group) {
//
//
//                ${"product_" . $box_group->id} = array();
//                ${"weight_" . $box_group->id} = array();
//
//
//                foreach ($products as $product) {
//
//                    //  echo $product->id.'</br>';
//
//                    $box = BoxGroupProduct::where('box_group_id', '=', $box_group->id)->where('product_id', '=', $product->id)->first();
//
//                    if (count($box) == '1') {
//
//                        // Eger urun bu grupta ise bu gruba ait array e ekliyoruz
//
//                        $newdata = array(
//                            'box_group_id' => $box->box_group_id,
//                            'weight' => $box->weight,
//                            'quantity' => $product->quantity
//                        );
//
//
//                        array_push($boxes, $newdata);
//
//
//                    }
//
//
//                }
//
//                // Sepetteki urunler kutu, adet ve agirliklariyla session a atiliyor.
//
//                session(["packing_boxes" => ${"boxes"}]);


        }

        return view('front.cart.index');

    }


    public
    function add()
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

    public
    function remove()
    {
        \Cart::remove(request('id'));
        return redirect()->route('cart')->with('success', 'Product Removed from Cart');


    }

    public
    function update()
    {

        \Cart::update(request('id'), array(
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )

        ));

        return redirect()->route('cart')->with('success', 'Cart Updated');


    }

    public
    function clear()
    {

        \Cart::clear();

        session()->forget('packing_boxes');

        return redirect()->route('cart')->with('success', 'Cart Cleaned');

    }


}
