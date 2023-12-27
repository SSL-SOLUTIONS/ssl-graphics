<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionalController extends Controller
{
    public function bottles(){
          return view('promotionalitems.bottles');
    }
    public function giftsets(){
            return view('promotionalitems.giftsets');
    }
    public function mugs(){
        return view('promotionalitems.mugs');
    }
    public function shirts(){
        return view('promotionalitems.shirts');
    }
    public function tech(){
        return view('promotionalitems.tech');
    }
    public function wallets(){
        return view('promotionalitems.wallets');
    }

    public function stickers(){
        return view('promotionalitems.stickers');
    }

    public function bags(){
        return view('promotionalitems.bags');
    }
    public function walldecor(){
        return view('promotionalitems.walldecor');
    }
    public function clocks(){
        return view('promotionalitems.clocks');
    }
    public function pens(){
        return view('promotionalitems.pens');
    }
    public function rings(){
        return view('promotionalitems.rings');
    }
    public function boxes(){
        return view('promotionalitems.boxes');
    }
    public function booklets(){
        return view('promotionalitems.booklets');
    }
}
