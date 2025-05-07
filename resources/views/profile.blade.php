@extends('layouts.app')

@section('content')

<div class="container mt-5"> <div class="text-center mb-4"> <h2 class="fw-bold">Profil Pengguna</h2> <p class="lead">Halo, {{ $username }}! Selamat datang di halaman profilmu.</p> </div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <img src="{{ asset('images/user.png') }}" class="rounded-circle mb-3" alt="User Avatar" width="120" height="120">
                <h4 class="mb-1">{{ $username }}</h4>
                <p class="text-muted">Traveler Enthusiast</p>

                <hr>

                <h5 class="text-start">Informasi Akun</h5>
                <ul class="list-group list-group-flush text-start">
                    <li class="list-group-item"><strong>Email:</strong> {{ strtolower($username) }}@explorex.com</li>
                    <li class="list-group-item"><strong>Jenis Akun:</strong> Pengguna</li>
                    <li class="list-group-item"><strong>Status:</strong> Aktif</li>
                </ul>

                <hr>

                <a href="{{ url('/dashboard?username=' . $username) }}" class="btn btn-outline-primary mt-3">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
