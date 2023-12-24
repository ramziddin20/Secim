<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::orderBy('created_at', 'DESC')->get();
        return view('back.service.index', compact('service'));
    }

    public function create()
    {
        return view('back.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Service::create($request->all());

        return redirect()->route('service.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('back.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $service = Service::find($id);
        $service->update($request->all());
        return redirect()->route('service.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('message', "This is Success Deleted");
    }
}
