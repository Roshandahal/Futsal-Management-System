<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class newscontroller extends Controller
{
    public function news(){
        return view('admin.updatenews');
    }
    public function store(Request $request)
    {
        $postnews = new news();
        $postnews->headline = $request->input('headline');
        $postnews->about = $request->input('about');
        if ($request->hasFile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/news/', $filename);
            $postnews->profile_image = $filename;
        }

        $postnews->save();
        return redirect()->back()->with('status', 'Your post has been placed successfully.');
        
    }

    public function newsui(){
        $news=news::all();
        return view('news.news',compact('news'));
    }
}
