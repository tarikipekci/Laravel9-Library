<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {

       $sliderdata= Product::limit(4)->get();
       $slide = Product::first();

        return view('home.index', ['sliderdata' => $sliderdata,'slide'=>$slide]);
    }


}
