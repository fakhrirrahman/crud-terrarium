<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function home(){
        return view('min.home');
    }
    public function shop(){
        return view('min.shop');
    }
}
