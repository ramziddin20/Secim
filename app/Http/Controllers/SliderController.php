<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    function index()
    {
        $sliders = Slider::latest()->paginate(5);
        return view('back.slider.index', compact('sliders'));
    }

    function create()
    {
        return view('back.slider.create');
    }

    function store(Request $request)
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

        return redirect()->route('slider.index');

    }
}
