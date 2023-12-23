<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagingController extends Controller
{
    public function customboxes(){
        return view('packaging.customboxes');
            }
            public function ecommercepackaging(){
                return view('packaging.ecommercepackaging');
                    }
            public function corrugatedboxes(){
                return view('packaging.corrugatedboxes');
            }
            public function whitelabelpackaging(){
                return view('packaging.whitelabelpackaging');
            }
            public function foodpackaging(){
                return view('packaging.foodspackaging'); 
            }
      
}
