<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->all();
        $image = Storage::put('/images', $data['image']);

        University::create([
            'title' => $data['title'],
            'link' => $data['link'],
            'image' => $image,
        ]);


        return redirect()->route('university.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $universities = University::findOrFail($id);
        return view('back.university.edit', compact('universities'));
    }

    public function update(Request $request, $id)
    {

        $sliders = University::findOrFail($id);
        $data = $request->validate([
            'title' => '',
            'link' => '',
            'image' => 'image:png,jpg,jpeg,webp',
        ]);
        if (array_key_exists('image', $data)) {
            $data['image'] = Storage::put('/images', $data['image']);
        }


        $sliders->update($data);
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
