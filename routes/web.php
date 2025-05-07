<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);
Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'handleLogin']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);

Route::get('/destinasi/{nama}', function ($nama) {
    $destinasiList = [
        [
            "nama" => "Bali",
            "lokasi" => "Indonesia",
            "harga" => 1500000,
            "transportasi" => "Pesawat",
            "rating" => 4.8,
            "deskripsi" => "Pulau tropis dengan pantai indah dan budaya unik.",
            "gambar" => "bali.jpg"
        ],
        [
            "nama" => "Tokyo",
            "lokasi" => "Jepang",
            "harga" => 5500000,
            "transportasi" => "Pesawat",
            "rating" => 4.9,
            "deskripsi" => "Kota metropolitan modern dengan budaya tradisional.",
            "gambar" => "tokyo.jpg"
        ],
        [
            "nama" => "Paris",
            "lokasi" => "Perancis",
            "harga" => 7200000,
            "transportasi" => "Pesawat",
            "rating" => 4.7,
            "deskripsi" => "Kota cinta dan mode dengan Menara Eiffel yang ikonik.",
            "gambar" => "paris.jpg"
        ],
        [
            "nama" => "New York",
            "lokasi" => "Amerika Serikat",
            "harga" => 8000000,
            "transportasi" => "Pesawat",
            "rating" => 4.6,
            "deskripsi" => "Kota yang tidak pernah tidur, penuh energi dan peluang.",
            "gambar" => "newyork.jpg"
        ],
        [
            "nama" => "London",
            "lokasi" => "Inggris",
            "harga" => 6500000,
            "transportasi" => "Pesawat",
            "rating" => 4.5,
            "deskripsi" => "Kota sejarah dan budaya dengan landmark terkenal.",
            "gambar" => "london.jpg"
        ],
        [
            "nama" => "Bangkok",
            "lokasi" => "Thailand",
            "harga" => 2500000,
            "transportasi" => "Pesawat",
            "rating" => 4.3,
            "deskripsi" => "Kota eksotis dengan kuil dan makanan jalanan terkenal.",
            "gambar" => "bangkok.jpg"
        ],
        [
            "nama" => "Sydney",
            "lokasi" => "Australia",
            "harga" => 7800000,
            "transportasi" => "Pesawat",
            "rating" => 4.6,
            "deskripsi" => "Kota pelabuhan yang indah dengan Opera House ikonik.",
            "gambar" => "sydney.jpg"
        ],
        [
            "nama" => "Dubai",
            "lokasi" => "Uni Emirat Arab",
            "harga" => 7000000,
            "transportasi" => "Pesawat",
            "rating" => 4.4,
            "deskripsi" => "Kota modern di tengah gurun dengan gedung pencakar langit.",
            "gambar" => "dubai.jpg"
        ],
        [
            "nama" => "Seoul",
            "lokasi" => "Korea Selatan",
            "harga" => 5400000,
            "transportasi" => "Pesawat",
            "rating" => 4.5,
            "deskripsi" => "Kota futuristik dengan budaya pop dan sejarah kuno.",
            "gambar" => "seoul.jpg"
        ],
        [
            "nama" => "Roma",
            "lokasi" => "Italia",
            "harga" => 6300000,
            "transportasi" => "Pesawat",
            "rating" => 4.6,
            "deskripsi" => "Pusat sejarah Romawi dengan Colosseum dan arsitektur klasik.",
            "gambar" => "roma.jpg"
        ],
        [
            "nama" => "Istanbul",
            "lokasi" => "Turki",
            "harga" => 5200000,
            "transportasi" => "Pesawat",
            "rating" => 4.3,
            "deskripsi" => "Kota dua benua dengan sejarah dan budaya yang kaya.",
            "gambar" => "istanbul.jpg"
        ],
        [
            "nama" => "Cape Town",
            "lokasi" => "Afrika Selatan",
            "harga" => 6100000,
            "transportasi" => "Pesawat",
            "rating" => 4.4,
            "deskripsi" => "Kota pesisir indah dengan pemandangan Table Mountain.",
            "gambar" => "capetown.jpg"
        ]
    ];

    $destinasi = collect($destinasiList)->firstWhere('nama', ucfirst($nama));

    if (!$destinasi) {
        abort(404, 'Destinasi tidak ditemukan');
    }

    return view('detail', compact('destinasi'));
});
