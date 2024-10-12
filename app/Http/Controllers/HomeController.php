<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Produk;

class HomeController extends Controller
{
    public function welcome(){
        $produk = Produk::get();
        return view('home.welcome',compact('produk'));
    }
    public function galeri(){
        $produk = Produk::get();
        return view('dashboard.galeri',compact('produk'));
    }
    public function beli(){
        return view('dashboard.beli');
    }




    public function About(){
        return view('home.about');
    }
    public function item(){
        return view('home.item');
    }
    public function foto(){
        $produk = Produk::get();
        return view('home.foto',compact('produk'));
    }
    public function panduan(){
        return view('home.panduan');
    }
    public function kontak(){
        return view('home.kontak');
    }
    public function detail_med(){
        return view('home.detail_med');
    }
    public function detail_prem(){
        return view('home.detail_prem');
    }
   
    public function detail_stand(){
        return view('home.detail_stand');
    }
   

}
