<?php

namespace App\Http\Controllers;

use App\Models\OurSuperiority;
use Illuminate\Http\Request;

class OurSuperiorityController extends Controller
{
    public function index()
    {
        $ourSuperiorities = OurSuperiority::orderBy('created_at', 'DESC')->get();
        return view('back.whychoosingus.index', compact('ourSuperiorities'));
    }

    public function create()
    {
        return view('back.whychoosingus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        OurSuperiority::create($request->all());

        return redirect()->route('advantages.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $ourSuperiorities = OurSuperiority::findOrFail($id);
        return view('back.whychoosingus.edit', compact('ourSuperiorities'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $ourSuperiorities = OurSuperiority::find($id);
        $ourSuperiorities->update($request->all());
        return redirect()->route('advantages.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $ourSuperiorities = OurSuperiority::findOrFail($id);
        $ourSuperiorities->delete();
        return redirect()->route('advantages.index')->with('message', "This is Success Deleted");
    }
}
