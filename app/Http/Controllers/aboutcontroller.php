<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
    public function about(){
        return view('about.about');
    }
}
