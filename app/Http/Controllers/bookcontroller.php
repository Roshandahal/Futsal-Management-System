<?php

namespace App\Http\Controllers;

use App\Models\booknow;
use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    public function book(){
        $booknow = booknow::all(); 
        return view('book.book',compact('booknow'));
    }

    public function store(Request $request)
    {
       $booknow=new booknow();
       $booknow->fullname=$request->input('fullname');
       $booknow->contact=$request->input('contact');
       $booknow->bookingdate=$request->input('bookingdate');
       $booknow->bookingtime=$request->input('bookingtime');
       $booknow->courtsize=$request->input('courtsize');
       $booknow->save();
       return redirect()->back()->with('status','your court has been booked');

    }

}
