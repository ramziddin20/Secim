<?php

namespace App\Http\Controllers;

use App\Models\InformationWork;
use Illuminate\Http\Request;

class InformationWorkController extends Controller
{
    public function index()
    {
        $informationWork = InformationWork::orderBy('created_at', 'DESC')->get();
        return view('back.informationWork.index', compact('informationWork'));
    }

    public function create()
    {
        return view('back.informationWork.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'time_work' => '',
            'street' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        InformationWork::create($request->all());

        return redirect()->route('informationWork.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $informationWork = InformationWork::findOrFail($id);
        return view('back.informationWork.edit', compact('informationWork'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'street' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email|unique:users',
        ]);
        $informationWork = InformationWork::find($id);
        $informationWork->update($request->all());
        return redirect()->route('informationWork.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $informationWork = InformationWork::findOrFail($id);
        $informationWork->delete();
        return redirect()->route('informationWork.index')->with('message', "This is Success Deleted");
    }
}
