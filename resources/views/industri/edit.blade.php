@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Laraschool') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('industri.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('industri.update', $industri->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Industri</label>
                            <input type="text" class="form-control @error('nama_industri') is-invalid @enderror"
                                name="nama_industri" value="{{ old('nama_industri') }}" placeholder="industri Name"
                                required>
                            @error('nama_industri')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" value="{{ old('alamat') }}" placeholder="alamat"
                                required>
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Kerja Sama</label>
                            <input type="text" class="form-control @error('tahun_kerja_sama') is-invalid @enderror"
                                name="tahun_kerja_sama" value="{{ old('tahun_kerja_sama') }}" placeholder="tahun"
                                required>
                            @error('tahun_kerja_sama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="id_jurusan">Jurusan</label>
                            <select name="id_jurusan" class="form-control" required>
                                @foreach ($jurusan as $j)
                                <option value="{{ $j -> id }}">{{$j -> nama_jurusan}}</option>
                                @endforeach </select>
                            @error('id_jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection