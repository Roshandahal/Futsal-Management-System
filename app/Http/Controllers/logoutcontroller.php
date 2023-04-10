<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutcontroller extends Controller
{
    public function logout(){
        return view('logout.logout');
    }
}
