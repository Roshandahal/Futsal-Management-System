<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\updateprice;
use Illuminate\Http\Request;

class bookingcontroller extends Controller
{
    public function booking()
    {
        $price=updateprice::all();
        return view('booking.book',compact('price'));
    }

    public function store(Request $request)
    {
        $booking = new booking();
            $booking->name = $request->input('name');
            $booking->contact = $request->input('contact');
            $booking->timeanddate = $request->input('timeanddate');
            $booking->courtsize = $request->input('courtsize');
            $booking->save();
            return redirect()->back()->with('status', 'your court has been booked successfully,please arrived 10 minutes before your time.');
    }

    // for booking details of the booking 
    public function bookingdetails(){
        $booked=booking::all();
        $price=updateprice::all();
        return view('booking.bookingdetails',compact('booked','price'));
    }
    // function to strore the data of price of the futsal
    public function storeprice(Request $request){
        $price=new updateprice();
        $price->fivemenprice = $request->input('fivemenprice');
        $price->sevenmenprice = $request->input('sevenmenprice');
        $price->timeduration = $request->input('timeduration');
        $price->save();
        return redirect()->back()->with('status', 'price of the futsal has been posted successfully');
    }

    public function editprice($id){
        $price=updateprice::find($id);
        return view('booking.editprice',compact('price'));
    }

    public function updateprice(Request $request, $id){
        $price=updateprice::find($id);
        $price->fivemenprice = $request->input('fivemenprice');
        $price->sevenmenprice = $request->input('sevenmenprice');
        $price->timeduration = $request->input('timeduration');
        $price->update();
        return redirect()->back()->with('status', 'price of the futsal has been updated successfully');

    }
    public function destroyprice($id){
        $price=updateprice::find($id);
        $price->delete();
        return redirect()->back()->with('status', 'The player for this month has been delete successfully !.');

    }
    // for edit contact 
    public function editbooking($id){
        $booking=booking::find($id);
        return view('booking.editbooking',compact('booking'));

    }

    public function updatebooking(Request $request, $id){
        $booking=booking::find($id);
        $booking->name = $request->input('name');
        $booking->contact = $request->input('contact');
        $booking->timeanddate = $request->input('timeanddate');
        $booking->courtsize = $request->input('courtsize');
        $booking->save();
        return redirect()->back()->with('status', 'your court has been booked updated successfully.');
    }

    public function destroybooking($id){
        $booking=booking::find($id);
        $booking->delete();
        return redirect()->back()->with('status', 'contact has been delete successfully !.');
    }
}
