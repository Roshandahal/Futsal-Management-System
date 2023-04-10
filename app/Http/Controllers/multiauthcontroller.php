<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class multiauthcontroller extends Controller
{
    public function redirect()
    {
        $role_as = Auth::user()->role_as;
        if ($role_as == '1')
        {
            return view('admin.home');
        } 
        
        // elseif($usertype == '2')
        // {
        //     return view('admin.superadmin');
        // } 
        // elseif($usertype == '3')
        // {
        //     return view('admin.founder');
        // } 
        else 
        {
            return view('dashboard');
        }
    }
}
