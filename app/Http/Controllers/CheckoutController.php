<?php

namespace App\Http\Controllers;

use App\Models\BoxGroups;
use App\Models\PackingRule;
use App\Models\PackingType;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index()
    {

//        $boxes = array();
//
//        // Getting packing_types quantites from SESSION (coming from cart page)
//
//        $packing_types = PackingType::all();
//
//        foreach ($packing_types as $packing_type) {
//
//            $quantity = 0;
//            $weight = 0;
//
//
//            $my_array = session("type_" . $packing_type->id);
//
//            //print_r($my_array);
//
//
//            // 1- GET PACKING TYPE QUANTITY AND WEIGHT
//
//            foreach ($my_array as $my) {
//
//                $quantity = $quantity + $my['quantity'];
//                $weight = $weight + $my['weight'];
//
//            }
//
//            // 2- PACKING RULE LARA GORE KUTU EKLICEZ
//
//            if ($quantity > 0) {
//
//                // a - Bu packing type a ait rule lari getir
//
//                $rules = PackingRule::where('packing_type_id', '=', $packing_type->id)->get();
//
//                $sayac = $quantity;
//
//                foreach ($rules as $rule) {
//
//
//                    while ($sayac > 0) {
//
//
//                        if ($sayac >= $rule->min_quantity && $sayac <= $rule->max_quantity) {
//                            //echo 's:'.$sayac;
//
//                            if ($rule->box_id <> 0) {
//
//                                $box = array(
//                                    'packing_type_id' => $rule->packing_type_id,
//                                    'box_id' => $rule->box_id,
//                                    'quantity' => '1'
//                                );
//                                array_push($boxes, $box);
//                                $sayac = $quantity - $sayac;
//
//
//                            } else {
//                                $sayac--;
//                            }
//
//
//                        } else {
//
//                            $sayac--;
//                        }
//
//                    }
//
//
//                }
//
//
//            }
//
//
//        }
//
//        print_r($boxes);


        return view('front.checkout.index');

    }
}
