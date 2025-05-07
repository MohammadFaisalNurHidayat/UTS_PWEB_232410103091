@extends('layouts.app')

@section('content')
@php
    $username = request()->query('username');
@endphp

<div class="text-center mb-5">
    <h2 class="fw-bold text-primary">Selamat datang, {{ $username ?? 'Traveler' }}!</h2>
    <p class="lead fw-semibold">Senang bertemu kembali! Siap menjelajahi dunia dengan ExploreX?</p>
</div>

<div class="row text-center mb-5">
    <div class="col-md-4 mb-3">
        <div class="card border-primary shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold text-primary">Jumlah Destinasi</h5>
                <p class="display-6 fw-bold">12</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card border-success shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold text-success">Tujuan Favorit</h5>
                <p class="display-6 fw-bold">Bali</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card border-warning shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold text-warning">Total Perjalanan</h5>
                <p class="display-6 fw-bold">5</p>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <img src="{{ asset('images/travel-dashboard.jpg') }}" alt="Dashboard Travel" class="img-fluid rounded shadow" style="max-height: 300px; object-fit: cover;">
    <p class="mt-4 lead fw-semibold">
        Jelajahi dunia dengan TravelNow! Temukan destinasi impianmu dan pesan tiket dengan mudah.
    </p>
    <a href="{{ url('/pengelolaan') }}?username={{ $username }}" class="btn btn-success mt-3 px-4 py-2 fw-bold shadow">Lihat Destinasi</a>
</div>
@endsection
