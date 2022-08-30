<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends OsnovniController
{
    public function index(){
        return view('main.pages.main.about', $this->data);
    }
}
