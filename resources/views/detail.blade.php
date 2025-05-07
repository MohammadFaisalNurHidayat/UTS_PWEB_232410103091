@extends('layouts.app')

@section('content')
<div class="container mt-4">
<h2 class="mb-4 text-center">Detail Destinasi: {{ $destinasi['nama'] }}</h2>
<div class="card shadow-sm">
<div class="row g-0">
<div class="col-md-6">
<img src="{{ asset('images/destinasi/' . $destinasi['gambar']) }}" class="img-fluid rounded-start" alt="{{ $destinasi['nama'] }}">
</div>
<div class="col-md-6">
<div class="card-body">
<h3 class="card-title">{{ $destinasi['nama'] }}</h3>
<p class="card-text"><strong>Lokasi:</strong> {{ $destinasi['lokasi'] }}</p>
<p class="card-text"><strong>Harga:</strong> Rp{{ number_format($destinasi['harga'], 0, ',', '.') }}</p>
<p class="card-text"><strong>Transportasi:</strong> {{ $destinasi['transportasi'] }}</p>
<p class="card-text"><strong>Rating:</strong> {{ $destinasi['rating'] }}⭐</p>
<p class="card-text"><strong>Deskripsi:</strong> {{ $destinasi['deskripsi'] }}</p>
<a href="{{ url('/pengelolaan') }}" class="btn btn-primary mt-3">Kembali ke Pengelolaan</a>
</div>
</div>
</div>
</div>
</div>
@endsection
