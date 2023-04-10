<?php

namespace App\Http\Controllers;

use App\Models\playerofthemonth;
use App\Models\scores;
use Illuminate\Http\Request;

class scorecontroller extends Controller
{
    public function score()
    {
        $scores = scores::all();
        $playerofthemonth = playerofthemonth::all();
        return view('scores.updatescores', compact('scores','playerofthemonth'));
    }

    public function scoreui()
    {
        $scores = scores::all();
        $playerofthemonth = playerofthemonth::all();
        return view('scores.scores', compact('scores','playerofthemonth'));
    }


    public function store(Request $request)
    {
        $scores = new scores();
        $scores->nameone = $request->input('nameone');
        $scores->nametwo = $request->input('nametwo');
        $scores->scoreone = $request->input('scoreone');
        $scores->scoretwo = $request->input('scoretwo');

        if ($request->hasFile('imageone')) {
            $file = $request->file('imageone');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/teamlogoone/', $filename);
            $scores->imageone = $filename;
        }


        if ($request->hasFile('imagetwo')) {
            $file = $request->file('imagetwo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/teamlogotwo/', $filename);
            $scores->imagetwo = $filename;
        }
        $scores->status = $request->input('status');

        $scores->save();
        // return view('scoreadmin')->with('scoreadmin', $score);
        return redirect()->back()->with('status', 'image has been submitted successfully');
    }

    public function storeplayerofthemonth(Request $request)
    {
        $playerofthemonth = new playerofthemonth();
        if ($request->hasFile('playerofthemonth')) {
            $file = $request->file('playerofthemonth');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/playerofthemonth/', $filename);
            $playerofthemonth->playerofthemonth = $filename;
        }
        $playerofthemonth->save();
        return redirect()->back()->with('status', 'player of the month posted successfully.');
    }
    // for making edit url for score 
    public function edit($id)
    {
        $scores = scores::find($id);
        return view('scores.editscores', compact('scores'));
    }
// for updating the score 
    public function update(Request $request,$id){
        $scores = scores::find($id);
        $scores->nameone = $request->input('nameone');
        $scores->nametwo = $request->input('nametwo');
        $scores->scoreone = $request->input('scoreone');
        $scores->scoretwo = $request->input('scoretwo');

        if ($request->hasFile('imageone')) {
            $file = $request->file('imageone');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/teamlogoone/', $filename);
            $scores->imageone = $filename;
        }


        if ($request->hasFile('imagetwo')) {
            $file = $request->file('imagetwo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/teamlogotwo/', $filename);
            $scores->imagetwo = $filename;
        }
        $scores->status = $request->input('status');
        $scores->update();
        return redirect()->back()->with('status', 'The score has been updated successfully !.');

    }
// for deleting the score 
    public function destroy($id){
        $scores = scores::find($id);
        $scores->delete();
        return redirect()->back()->with('status', 'The score has been delete successfully !.');
    }
    // for editing the player of the month 
    public function editplayer($id){
        $player=playerofthemonth::find($id);
        return view('scores.editplayerofthemonth',compact('player'));
    }
    // for updating the player of the month 
    public function updateplayer(Request $request,$id){
        $player=playerofthemonth::find($id);
        if ($request->hasFile('playerofthemonth')) {
            $file = $request->file('playerofthemonth');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/playerofthemonth/', $filename);
            $player->playerofthemonth = $filename;
        }
        $player->update();
        return redirect()->back()->with('status', 'player of the month update successfully.');
        
    }
    public function destroyplayer($id){
        $player=playerofthemonth::find($id);
        $player->delete();
        return redirect()->back()->with('status', 'The player for this month has been delete successfully !.');

    }

}
