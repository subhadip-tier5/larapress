<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use Woocommerce;
class MembershipsController extends Controller
{
    //
    public function index(){
        global $woocommerce;
        //dd($woocommerce);
        return view('membership');
    }
    
    public function details(){
        return view('membership-details');
    }
    
    public function cart(){
        return view('cart');
    }
}
