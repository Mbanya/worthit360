<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view();
    }
    public function home(){
        return view('index_webdesign');
    }

    public function contact (){
        return view();
    }

    public function project(){
        return view('portfoilio');
    }
    public function details(){
        return view('portfolio-details');
    }
}
