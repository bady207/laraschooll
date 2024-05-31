<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;
use Storage;

class EskulController extends Controller
{

    public function index()
    {
        $eskul = Eskul::latest()->paginate(5);
        return view('eskul.index', compact('eskul'));
    }

    public function create()
    {
        return view('eskul.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_eskul' => 'required|min:2',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $eskul = new Eskul();
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->deskripsi = $request->deskripsi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/eskuls', $image->hashName());
        $eskul->image = $image->hashName();
        $eskul->save();
        return redirect()->route('eskul.index');
    }

    public function show($id)
    {
        $eskul = eskul::findOrFail($id);
        return view('eskul.show', compact('eskul'));
    }

    public function edit($id)
    {
        $eskul = eskul::findOrFail($id);
        return view('eskul.edit', compact('eskul'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_eskul' => 'required|min:5',
            'deskripsi' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $eskul = Eskul::findOrFail($id);
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->deskripsi = $request->deskripsi;
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/eskuls', $image->hashName());

            // Delete old image
            Storage::delete('public/eskuls/' . $eskul->image);

            // Update image path
            $eskul->image = $image->hashName();
        }

        $eskul->save();

        return redirect()->route('eskul.index');
    }

    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);
        Storage::delete('public/eskuls/' . $eskul->image);
        $eskul->delete();
        return redirect()->route('eskul.index');

    }
}