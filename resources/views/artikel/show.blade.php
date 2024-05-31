@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0">{{ __('Laraschool') }}</h4>
                        <a href="{{ route('artikel.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/artikels/' . $artikel->image) }}" class="img-fluid" style="max-width: 500px;" alt="Artikel Image">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h5 class="fw-bold">Judul:</h5>
                        <p>{{ $artikel->judul }}</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="fw-bold">Deskripsi:</h5>
                        <p>{{ $artikel->deskripsi }}</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="fw-bold">Tanggal:</h5>
                        <p>{{ $artikel->tanggal }}</p>
                    </div>
                    <div class="card-text">
                        <small class="text-muted">
                            Terakhir diperbarui: {{ $artikel->updated_at->diffForHumans() }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
