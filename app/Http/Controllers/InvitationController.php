<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function birthdayinvites(){
        return view('invitations.birthdayinvites');
    }
    public function weddinginvites(){
        return view('invitations.weddinginvites');
    }
    public function bridalshower(){
        return view('invitations.bridalshower');
    }
    public function babyshowerinvites(){
        return view('invitations.babyshowerinvites');
    }
    
}
