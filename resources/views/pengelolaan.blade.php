@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Daftar Destinasi</h2>
        <div class="row">
            @foreach($destinasi as $d)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('images/' . $d['gambar']) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $d['nama'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $d['nama'] }}</h5>
                            <p class="card-text mb-1"><strong>Lokasi:</strong> {{ $d['lokasi'] }}</p>
                            <p class="card-text mb-1"><strong>Harga:</strong> Rp{{ number_format($d['harga'], 0, ',', '.') }}</p>
                            <p class="card-text mb-1"><strong>Transportasi:</strong> {{ $d['transportasi'] }}</p>
                            <p class="card-text mb-1"><strong>Rating:</strong> {{ $d['rating'] }}⭐</p>
                            <p class="card-text"><strong>Deskripsi:</strong> {{ $d['deskripsi'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
