@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-striped text-black">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Laraschool</h5>
                        <a href="{{ route('eskul.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Ekstrakurikuler</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($eskul as $data)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $data->nama_eskul }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/eskuls/' . $data->image) }}" class="rounded"
                                            style="width: 100px;">
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('eskul.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('eskul.show', $data->id) }}"
                                                class="btn btn-sm btn-info">Show</a>
                                            <a href="{{ route('eskul.edit', $data->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <button type="submit" onclick="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data belum tersedia.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $eskul->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
