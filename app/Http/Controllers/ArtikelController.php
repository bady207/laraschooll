<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Storage;

class ArtikelController extends Controller
{

    public function index()
    {
        $artikel = Artikel::latest()->paginate(5);
        return view('artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'judul' => 'required|min:2',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->tanggal = $request->tanggal;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/artikels', $image->hashName());
        $artikel->image = $image->hashName();
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|min:2',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->tanggal = $request->tanggal;
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/artikels', $image->hashName());

            // Delete old image
            Storage::delete('public/artikels/' . $artikel->image);

            // Update image path
            $artikel->image = $image->hashName();
        }

        $artikel->save();

        return redirect()->route('artikel.index');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        Storage::delete('public/artikels/' . $artikel->image);
        $artikel->delete();
        return redirect()->route('artikel.index');

    }
}