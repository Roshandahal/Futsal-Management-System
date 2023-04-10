<?php

namespace App\Http\Controllers;

use App\Models\bookcoach;
use App\Models\coachdetails;
use Illuminate\Http\Request;

class coachcontroller extends Controller
{
    public function coach(){
        $coachdetails=coachdetails::all();
        return view('coach.coach',compact('coachdetails'));
    }
    public function coachadmin(){
        $coachdetails=coachdetails::all();
        $bookcoach=bookcoach::all();
        return view('coach.admin',compact('coachdetails','bookcoach'));
    }

    public function store(Request $request){
        $coach=new coachdetails();
        $coach->name = $request->input('name');
        $coach->namecoachtime = $request->input('coachtime');
        $coach->club = $request->input('club');
        $coach->save();
        return redirect()->back()->with('status', 'Coach details has been posted successfully.');
    }

    public function storebookcoach(Request $request){
        $bookcoach=new bookcoach();
        $bookcoach->coachname = $request->input('coachname');
        $bookcoach->playername = $request->input('playername');
        $bookcoach->contact = $request->input('contact');
        $bookcoach->save();
        return redirect()->back()->with('status', 'Coach has been booked successfully.');
    }


}
