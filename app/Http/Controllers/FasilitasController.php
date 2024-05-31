<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Storage;

class FasilitasController extends Controller
{

    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(5);
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_fasilitas' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $fasilitas = new Fasilitas();
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/fasilitass', $image->hashName());
        $fasilitas->image = $image->hashName();
        $fasilitas->save();
        return redirect()->route('fasilitas.index');
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.show', compact('fasilitas'));
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_fasilitas' => 'required|min:5',
            'image' => 'sometimes|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/fasilitass', $image->hashName());

            // Delete old image
            Storage::delete('public/fasilitass/' . $fasilitas->image);

            // Update image path
            $fasilitas->image = $image->hashName();
        }

        $fasilitas->save();

        return redirect()->route('fasilitas.index');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        Storage::delete('public/fasilitass/' . $fasilitas->image);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');

    }
}