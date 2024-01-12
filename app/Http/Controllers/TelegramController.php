<?php

namespace App\Http\Controllers;

use App\Models\Telegram;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function index()
    {
        $telegram= Telegram::orderBy('created_at', 'DESC')->get();
        return view('back.socialLink.telegram.index', compact('telegram'));
    }

    public function create()
    {
        return view('back.socialLink.telegram.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
        ]);

        Telegram::create($request->all());

        return redirect()->route('telegram.index')->with('message', "This is Success Created");

    }

    public function edit($id)
    {
        $telegram = Telegram::findOrFail($id);
        return view('back.socialLink.telegram.edit', compact('telegram'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'link' => 'required'
        ]);
        $telegram = Telegram::find($id);
        $telegram->update($request->all());
        return redirect()->route('telegram.index')->with('message', "This is Success Edited");
    }

    public function destroy($id)
    {
        $instagram = Telegram::findOrFail($id);
        $instagram->delete();
        return redirect()->route('telegram.index')->with('message', "This is Success Deleted");
    }
}
