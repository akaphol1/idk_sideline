<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetSidelineController extends Controller
{
    public function howtocontact(){
        return view('layouts.how_to_contact');
    }
    public function detail_sideline(){
        return view('layouts.detail_sideline');
    }
    public function signin_sideline(){
        return view('layouts.signin_sideline');
    }
}
