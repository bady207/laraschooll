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
                        <a href="{{ route('fasilitas.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/fasilitass/' . $fasilitas->image) }}" class="w-50">
                    </div>
                    <hr>
                    <p class="tmt-3">
                        Judul : {{ $fasilitas->nama_fasilitas }}
                    </p>
                    <hr>
                    <p class="card-text">
                        <small class="text-muted">
                            {{ $fasilitas->updated_at }}
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection