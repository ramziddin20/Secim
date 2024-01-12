<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        return view('back.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('back.slider.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $image = Storage::put('/images', $data['image']);

        Slider::create([
            'title' => $data['title'],
            'image' => $image,
        ]);

        return redirect()->route('slider.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $sliders = Slider::findOrFail($id);
        return view('back.slider.edit', compact('sliders'));
    }

    public function update(Request $request, $id)
    {

        $sliders = Slider::findOrFail($id);
        $data = $request->all();
        $image = Storage::put('/images', $data['image']);

        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp,svg|max:5120',
        ]);

        $sliders->update([
            'title' => $data['title'],
            'image' => $image,
        ]);
        return redirect()->route('slider.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $sliders = Slider::findOrFail($id);
        $image_path = public_path() . '/images/';
        $image = $image_path . $sliders->image;
        if (file_exists($image)) {
            @unlink($image);
        }
        $sliders->delete();
        return redirect()->route('slider.index')->with('message', "This is Success Deleted");
    }
}
