<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function handleLogin(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');

    // Validasi sederhana
    if ($username && $password) {
        return redirect('/dashboard?username=' . urlencode($username));
    } else {
        return redirect('/')->with('error', 'Username dan Password wajib diisi!');
    }
}

    public function logout()
    {
        session()->forget('username');
        return redirect('/login');
    }

    public function dashboard(Request $request)
{
    $username = $request->query('username', 'Pengguna');

    return view('dashboard', compact('username'));
}

    public function profile()
    {
        $username = session('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
{
    $destinasi = [
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
            "harga" => 6000000,
            "transportasi" => "Pesawat",
            "rating" => 4.9,
            "deskripsi" => "Kota futuristik dengan kombinasi tradisi dan teknologi.",
            "gambar" => "tokyo.jpg"
        ],
        [
            "nama" => "Paris",
            "lokasi" => "Prancis",
            "harga" => 7000000,
            "transportasi" => "Pesawat",
            "rating" => 4.7,
            "deskripsi" => "Kota romantis dengan Menara Eiffel dan museum terkenal.",
            "gambar" => "paris.jpg"
        ],
        [
            "nama" => "New York",
            "lokasi" => "Amerika Serikat",
            "harga" => 8000000,
            "transportasi" => "Pesawat",
            "rating" => 4.6,
            "deskripsi" => "Kota metropolitan dengan gedung pencakar langit dan budaya global.",
            "gambar" => "newyork.jpg"
        ],
        [
            "nama" => "London",
            "lokasi" => "Inggris",
            "harga" => 6500000,
            "transportasi" => "Pesawat",
            "rating" => 4.5,
            "deskripsi" => "Kota bersejarah dengan arsitektur klasik dan modern.",
            "gambar" => "london.jpg"
        ],
        [
            "nama" => "Bangkok",
            "lokasi" => "Thailand",
            "harga" => 2000000,
            "transportasi" => "Pesawat",
            "rating" => 4.3,
            "deskripsi" => "Kota ramai dengan budaya kuliner dan kuil-kuil indah.",
            "gambar" => "bangkok.jpg"
        ],
        [
            "nama" => "Dubai",
            "lokasi" => "Uni Emirat Arab",
            "harga" => 6000000,
            "transportasi" => "Pesawat",
            "rating" => 4.6,
            "deskripsi" => "Kota modern dengan gedung pencakar langit dan belanja mewah.",
            "gambar" => "dubai.jpg"
        ],
        [
            "nama" => "Roma",
            "lokasi" => "Italia",
            "harga" => 6500000,
            "transportasi" => "Pesawat",
            "rating" => 4.5,
            "deskripsi" => "Kota bersejarah dengan Colosseum dan warisan Romawi.",
            "gambar" => "roma.jpg"
        ],
        [
            "nama" => "Istanbul",
            "lokasi" => "Turki",
            "harga" => 5500000,
            "transportasi" => "Pesawat",
            "rating" => 4.4,
            "deskripsi" => "Kota dua benua dengan budaya Timur dan Barat.",
            "gambar" => "istanbul.jpg"
        ],
        [
            "nama" => "Seoul",
            "lokasi" => "Korea Selatan",
            "harga" => 5000000,
            "transportasi" => "Pesawat",
            "rating" => 4.5,
            "deskripsi" => "Kota modern dengan budaya K-pop dan makanan khas.",
            "gambar" => "seoul.jpg"
        ],
        [
            "nama" => "Sydney",
            "lokasi" => "Australia",
            "harga" => 7500000,
            "transportasi" => "Pesawat",
            "rating" => 4.6,
            "deskripsi" => "Kota pantai dengan Opera House dan pelabuhan indah.",
            "gambar" => "sydney.jpg"
        ],
        [
            "nama" => "Singapura",
            "lokasi" => "Singapura",
            "harga" => 2500000,
            "transportasi" => "Pesawat",
            "rating" => 4.7,
            "deskripsi" => "Kota kecil yang maju dengan wisata kota dan taman modern.",
            "gambar" => "singapura.jpg"
        ]
    ];

    return view('pengelolaan', compact('destinasi'));
}



}
