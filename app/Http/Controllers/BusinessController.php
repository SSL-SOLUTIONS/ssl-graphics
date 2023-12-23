<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function businesscards(){
return view('businessmaterial.businescards');
    }
    public function letterheads(){
        return view('businessmaterial.letterheads');
        
    }
    public function filefolders(){
        return view('businessmaterial.filefolders');
    }
    public function flyers(){
        return view('businessmaterial.flyers');
    }
    public function brouchers(){
        return view('businessmaterial.brochures'); 
    }
    public function invoices(){
        return view('businessmaterial.invoices');
    }
    public function envelopes(){
        return view('businessmaterial.envelopes');
    }
    public function notepads(){
        return view('businessmaterial.notepads');
    }
}
