<?php

namespace App\Http\Controllers;

use App\Models\tiesheet;
use App\Models\tournmentdetails;
use App\Models\tournmententry;
use Illuminate\Http\Request;

class tournmentcontroller extends Controller
{
    public function tournment(){
        $tournmentfees=tournmentdetails::all();
        $tournmententry=tournmententry::all();
        $tiesheet=tiesheet::all();
        return view('tournment.tournment',compact('tournmentfees','tournmententry','tiesheet'));
    }
    public function updatetournment(){
        $tournmentfees=tournmentdetails::all();
        $tournmententry=tournmententry::all();
        $tiesheet=tiesheet::all();
        return view('tournment.admin',compact('tournmentfees','tournmententry','tiesheet'));
    }

    public function storetournmententries(Request $request){
        $tournmententries=new tournmententry();
        $tournmententries->name = $request->input('name');
        $tournmententries->contact = $request->input('contact');
        $tournmententries->location = $request->input('location');
        $tournmententries->save();
        return redirect()->back()->with('status', 'conguralation you have entered in the tournment list.');
    }
    public function storetournmentdetails(Request $request){
        $tournmentdetails=new tournmentdetails();
        $tournmentdetails->entryfee = $request->input('entryfee');
        $tournmentdetails->winnerprice = $request->input('winnerprice');
        $tournmentdetails->runnerup = $request->input('runnerup');
        $tournmentdetails->save();
        return redirect()->back()->with('status', 'price field has been posted.');
    }
    public function storetiesheet(Request $request){
        $tiesheet=new tiesheet();
        if ($request->hasFile('tiesheet'))
        {
            $file = $request->file('tiesheet');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/teamlogoone/', $filename);
            $tiesheet->tiesheet = $filename;
        }
        $tiesheet->save();
        return redirect()->back()->with('tiesheet', 'tiesheet has been');
    }

}
