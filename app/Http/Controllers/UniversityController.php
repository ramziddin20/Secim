<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::orderBy('created_at', 'DESC')->get();
        return view('back.university.index', compact('universities'));
    }

    public function create()
    {
        return view('back.university.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp,svg|max:5120',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        University::create($input);


        return redirect()->route('university.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $universities = University::findOrFail($id);
        return view('back.university.edit', compact('universities'));
    }

    public function update(Request $request, $id)
    {

        $universities = University::findOrFail($id);
        $universities->title = $request->input('title');
        $universities->title = $request->input('link');
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            if (File::exists($destinationPath)) {
                File::delete($destinationPath);
            }
            $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        $universities->update($input);
        return redirect()->route('university.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $universities = University::findOrFail($id);
        $image_path = public_path() . '/images/';
        $image = $image_path . $universities->image;
        if (file_exists($image)) {
            @unlink($image);
        }
        $universities->delete();
        return redirect()->route('university.index')->with('message', "This is Success Deleted");
    }
}
