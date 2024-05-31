@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h4>{{ __('Laraschool') }}</h4>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($artikel as $data)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td class="text-center">{{ $data->tanggal }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/artikels/' . $data->image) }}" alt="{{ $data->nama_artikel }}" style="max-width: 100px;">
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('artikel.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('artikel.show', $data->id) }}" class="btn btn-sm btn-info">Show</a>
                                            <a href="{{ route('artikel.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a>
                                            <button type="submit" onclick="return confirm('Are You Sure ?');" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data belum tersedia.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $artikel->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
