<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index(){
        
        return view('landing.home');
    }
    public function pertandingan(){
        
        return view('landing.pertandingan');
    }
    public function support(){
        
        return view('landing.support');
    }
    public function blog(){
        
        return view('landing.blog');
    }
    public function tentang_kami(){
        
        return view('landing.tentang-kami');
    }
}
