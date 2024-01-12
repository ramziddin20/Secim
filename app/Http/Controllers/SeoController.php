<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $seos = Seo::orderBy('created_at', 'DESC')->get();
        return view('back.seo.index', compact('seos'));
    }

    public function create()
    {
        return view('back.seo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'keywords' => 'required',
            'description' => 'required',
        ]);

        Seo::create($request->all());

        return redirect()->route('seo.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $seos = Seo::findOrFail($id);
        return view('back.seo.edit', compact('seos'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'keywords' => 'required',
            'description' => 'required',
        ]);
        $seos = Seo::find($id);
        $seos->update($request->all());
        return redirect()->route('seo.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $seos = Seo::findOrFail($id);
        $seos->delete();
        return redirect()->route('seo.index')->with('message', "This is Success Deleted");
    }
}
