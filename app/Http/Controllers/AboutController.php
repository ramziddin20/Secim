<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::orderBy('created_at', 'DESC')->get();
        return view('back.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('back.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        About::create($request->all());

        return redirect()->route('about.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $abouts = About::findOrFail($id);
        return view('back.about.edit', compact('abouts'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $abouts = About::find($id);
        $abouts->update($request->all());
        return redirect()->route('about.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $abouts = About::findOrFail($id);
        $abouts->delete();
        return redirect()->route('about.index')->with('message', "This is Success Deleted");
    }
}
