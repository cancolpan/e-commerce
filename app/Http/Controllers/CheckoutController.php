<?php

namespace App\Http\Controllers;

use App\Models\BoxGroups;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index(){

        $box_groups = BoxGroups::all();



        $boxes=session("packing_boxes");

        print_r($boxes);




       // return view('front.checkout.index');

    }
}
