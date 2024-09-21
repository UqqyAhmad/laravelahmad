@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div style="text-align: center; padding: 20px; position: relative; color: white;">
    <!-- Background Video -->
    <video autoplay muted loop style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; object-fit: cover;">
        <source src="videos/hitam.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Konten di atas video -->
    <div style="position: relative; z-index: 1;">
        <h1>Ahlan wa Sahlan Saudara - saudara!</h1>
        <img src="images/fa.png" alt="Foto Profil" style="width: 150px; height: 150px; border-radius: 0%; margin-top: 10px;">
    </div>
</div>


<div style="text-align: center; padding: 50px; background-color: #333; color: white;">
    <h2>Siswa SMK Bakti Nusantara 666</h2>
    <p style="font-size: 18px;">Menciptakan Solusi Cerdas dengan Teknologi dan Tempe Goreng</p>
    <button style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: none; cursor: pointer;"
        onclick="location.href='#tentang-saya'">Pelajari Lebih Lanjut</button>
</div>

<div id="tentang-saya" style="padding: 50px; background-color: #fff; text-align: center;">
    <h3 style="color: #333;">Sekilas Tentang Saya</h3>
    <p style="color: #333;">Nama Saya Ahmad Nabil Muharrom, saya mempunyai ilmu di bidang Rekayasa Perangkat Lunak. Menguasai framework Laravel dengan cukup baik.</p>
    <a href="{{ route('contact') }}" style="color: #4CAF50; text-decoration: none;">Lihat Lebih Lanjut di Halaman Tentang Saya</a>
</div>

<div style="background-color: #f9f9f9; padding: 50px; text-align: center;">
    <h3 style="margin-bottom: 40px; color: #333;">Proyek Unggulan</h3>

    <div style="display: inline-block; margin: 0 20px; text-align: left; width: 250px;">
        <h4>Membuat Fitur Login/Logout</h4>
        <img src="images/e1.jpg" alt="Thumbnail Proyek 1" style="width: 100%; height: auto; border-radius: 10px;">
        <p style="color: #666; margin-top: 10px;">Proyek Membuat fitur login dan logout di Flutter menggunakan Dart untuk autentikasi pengguna.</p>
        <a href="{{ route('article') }}" style="color: #4CAF50; text-decoration: none;">Lihat Detail Proyek</a>
    </div>

    <div style="display: inline-block; margin: 0 20px; text-align: left; width: 250px;">
        <h4>Web Peminjaman Barang</h4>
        <img src="images/e2.jpg" alt="Thumbnail Proyek 2" style="width: 100%; height: auto; border-radius: 10px;">
        <p style="color: #666; margin-top: 10px;">Web peminjaman barang sekolah menggunakan PHP dan database untuk manajemen peminjaman</p>
        <a href="{{ route('article') }}" style="color: #4CAF50; text-decoration: none;">Lihat Detail Proyek</a>
    </div>
    
    <div style="display: inline-block; margin: 0 20px; text-align: left; width: 250px;">
        <h4>Web Kehadiran Siswa</h4>
        <img src="images/e3.jpg" alt="Thumbnail Proyek 2" style="width: 100%; height: auto; border-radius: 10px;">
        <p style="color: #666; margin-top: 10px;">Web kehadiran siswa memudahkan guru mencatat kehadiran dan siswa melihat riwayatnya.</p>
        <a href="{{ route('article') }}" style="color: #4CAF50; text-decoration: none;">Lihat Detail Proyek</a>
    </div>
</div>

<div style="background-color: #333; color: white; padding: 20px; text-align: center;">
    <h3>Ikuti Saya di Media Sosial</h3>
    <p><a href="http://www.youtube.com/@UqqyAhmad" style="color: #4CAF50; text-decoration: none;">Youtube</a> | <a href="https://www.instagram.com/uqqyahmad" style="color: #4CAF50; text-decoration: none;">Instagram</a></p>
    <p>&copy; 2024 Ahmad Nabil Muharrom. Semua Hak Cipta Dilindungi.</p>
</div>

@endsection