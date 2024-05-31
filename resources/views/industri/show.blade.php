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
                    <hr>
                    <h4>{{ $industri->nama_industri }}</h4>
                    <hr>
                    <p> {{ $industri->alamat }} </p>
                    <p> {{ $industri->tahun_kerja_sama }} </p>
                    <p> {{ $industri->jurusan->nama_jurusan}} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection