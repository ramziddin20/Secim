<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp,svg|max:5120',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        Slider::create($input);


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
        $sliders->title = $request->input('title');
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            if (File::exists($destinationPath)) {
                File::delete($destinationPath);
            }
            $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        $sliders->update($input);
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
