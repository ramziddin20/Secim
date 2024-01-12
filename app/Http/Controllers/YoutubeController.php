<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function index()
    {
        $youtube= Youtube::orderBy('created_at', 'DESC')->get();
        return view('back.socialLink.youtube.index', compact('youtube'));
    }

    public function create()
    {
        return view('back.socialLink.youtube.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
        ]);

        Youtube::create($request->all());

        return redirect()->route('youtube.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $youtube = Youtube::findOrFail($id);
        return view('back.socialLink.youtube.edit', compact('youtube'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'link' => 'required'
        ]);
        $youtube = Youtube::find($id);
        $youtube->update($request->all());
        return redirect()->route('youtube.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $youtube = Youtube::findOrFail($id);
        $youtube->delete();
        return redirect()->route('youtube.index')->with('message', "This is Success Deleted");
    }
}
