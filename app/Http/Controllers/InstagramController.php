<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function index()
    {
        $instagram= Instagram::orderBy('created_at', 'DESC')->get();
        return view('back.socialLink.instagram.index', compact('instagram'));
    }

    public function create()
    {
        return view('back.socialLink.instagram.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
        ]);

        Instagram::create($request->all());

        return redirect()->route('instagram.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $instagram = Instagram::findOrFail($id);
        return view('back.socialLink.instagram.edit', compact('instagram'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'link' => 'required'
        ]);
        $instagram = Instagram::find($id);
        $instagram->update($request->all());
        return redirect()->route('instagram.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $instagram = Instagram::findOrFail($id);
        $instagram->delete();
        return redirect()->route('instagram.index')->with('message', "This is Success Deleted");
    }
}
