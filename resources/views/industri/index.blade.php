@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-striped text-dark">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Laraschool</h5>
                        <a href="{{ route('industri.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Industri</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Tahun Kerja Sama</th>
                                    <th class="text-center">Jurusan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($industri as $data)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $data->nama_industri }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->tahun_kerja_sama }}</td>
                                    <td>{{ $data->jurusan->nama_jurusan }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('industri.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('industri.show', $data->id) }}"
                                                class="btn btn-sm btn-info">Show</a>
                                            <a href="{{ route('industri.edit', $data->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <button type="submit" onclick="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-danger">Delete</button>
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
                        {!! $industri->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
