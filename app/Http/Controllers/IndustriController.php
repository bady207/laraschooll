<?php
namespace App\Http\Controllers;

use App\Models\Industri;
use App\Models\Jurusan; 
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function index()
    {
        $industri = Industri::latest()->paginate(10);
        return view('industri.index', compact('industri'));
    }

    public function create()
    {
        $jurusan = Jurusan::all(); 
        return view('industri.create', compact('jurusan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_industri' => 'required|min:2',
            'alamat' => 'required',
            'tahun_kerja_sama' => 'required',
            'id_jurusan' => 'required',
        ]);

        $industri = new Industri();
        $industri->nama_industri = $request->nama_industri;
        $industri->alamat = $request->alamat;
        $industri->tahun_kerja_sama = $request->tahun_kerja_sama;
        $industri->id_jurusan = $request->id_jurusan;
        $industri->save();
        return redirect()->route('industri.index');
    }

    public function show($id)
    {
        $industri = Industri::findOrFail($id);
        return view('industri.show', compact('industri'));
    }

    public function edit($id)
    {
        $industri = Industri::findOrFail($id);
        $jurusan = Jurusan::all(); 
        return view('industri.edit', compact('industri', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_industri' => 'required|min:2',
            'alamat' => 'required',
            'tahun_kerja_sama' => 'required',
            'id_jurusan' => 'required',
        ]);

        $industri = Industri::findOrFail($id);
        $industri->nama_industri = $request->nama_industri;
        $industri->alamat = $request->alamat;
        $industri->tahun_kerja_sama = $request->tahun_kerja_sama;
        $industri->id_jurusan = $request->id_jurusan;
        $industri->save();
        return redirect()->route('industri.index');
    }

    public function destroy($id)
    {
        $industri = Industri::findOrFail($id);
        $industri->delete();
        return redirect()->route('industri.index');
    }
}
