<?php

namespace App\Http\Controllers;

use App\Models\Facebook;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function index()
    {
        $facebook= Facebook::orderBy('created_at', 'DESC')->get();
        return view('back.socialLink.facebook.index', compact('facebook'));
    }

    public function create()
    {
        return view('back.socialLink.facebook.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
        ]);

        Facebook::create($request->all());

        return redirect()->route('facebook.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $facebook = Facebook::findOrFail($id);
        return view('back.socialLink.facebook.edit', compact('facebook'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'link' => 'required'
        ]);
        $facebook = Facebook::find($id);
        $facebook->update($request->all());
        return redirect()->route('facebook.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $facebook = Facebook::findOrFail($id);
        $facebook->delete();
        return redirect()->route('facebook.index')->with('message', "This is Success Deleted");
    }
}
