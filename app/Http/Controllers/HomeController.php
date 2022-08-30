<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends OsnovniController
{
    public function index(){

        $this->data['products'] = Product::all();
        $this->data['sliderImages'] = SliderImage::all();
        return view('main.pages.main.home', $this->data);
    }

    public function autor(){
    return view('main.pages.main.autor',$this->data);
    }
}
