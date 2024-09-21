@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Header -->
<div style="padding: 30px; background-color: #0d1f0e; color: white; text-align: center;">
    <h1 style="font-size: 40px; margin: 0;">Tentang Saya</h1>
</div>

<!-- Biografi Singkat -->
<div style="padding: 50px; background-color: #2d2d2d; color: #fff; display: flex; align-items: center; justify-content: center;">
    <div style="max-width: 900px; text-align: left;">
        <h2 style="font-size: 32px;">Ahmad Nabil Muharrom</h2>
        <p style="font-size: 18px; line-height: 1.6;">Saya adalah siswa SMK jurusan Rekayasa Perangkat Lunak yang sangat antusias dengan pengembangan perangkat lunak dan teknologi. Berpengalaman dalam berbagai proyek dan selalu terbuka untuk belajar hal baru serta berkontribusi di berbagai bidang IT.</p>
        <img src="{{ asset('images/me.jpg') }}" alt="Foto Profil" style="float: right; width: 180px; height: 180px; border-radius: 50%; border: 5px solid #fff; margin-left: 20px; margin-bottom: 20px;">
    </div>
</div>

<!-- Keterampilan dan Keahlian -->
<div style="padding: 50px; background-color: #fff; color: #333;">
    <h3 style="font-size: 28px; margin-bottom: 30px;">Keterampilan dan Keahlian</h3>
<p>- Menyusun Web dengan struktur Html</p>
<p>- Membuat Gaya web dengan Css</p>
<p>- Membuat Aplikasi dengan Flutter menggunakan Dart</p>
</div>

<div style="padding: 50px; background-color: #f1f1f1; text-align: center;">
    <h3 style="font-size: 28px; color: #333; margin-bottom: 30px;">Kontak</h3>
    <div style="display: flex; justify-content: space-around; max-width: 1000px; margin: 0 auto;">
        <div style="width: 30%; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h4>YouTube</h4>
            <a href="https://www.youtube.com/@UqqyAhmad" target="_blank">
                <img src="images/youtube_logo.png" alt="Thumbnail YouTube" style="width: 30%; height: auto; border-radius: 10px;">
            </a>
            <p style="font-size: 16px; color: #666; margin-top: 10px;">Kunjungi saluran YouTube saya untuk konten terbaru.</p>
        </div>
        <div style="width: 30%; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h4>Instagram</h4>
            <a href="https://www.instagram.com/uqqyahmad" target="_blank">
                <img src="images/instagram_icon.png" alt="Thumbnail Instagram" style="width: 30%; height: auto; border-radius: 10px;">
            </a>
            <p style="font-size: 16px; color: #666; margin-top: 10px;">Ikuti saya di Instagram untuk update terbaru.</p>
        </div>
        <div style="width: 30%; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h4>Email</h4>
            <p style="font-size: 16px; color: #666; margin-top: 10px;">Anda dapat menghubungi saya di: <a href="mailto:memeliodassama@gmail.com">memeliodassama@gmail.com</a></p>
        </div>
    </div>
</div>


<!-- Tujuan dan Aspirasi -->
<div style="padding: 50px; background-color: #2d2d2d; color: #fff; text-align: center;">
    <h3 style="font-size: 28px;">Tujuan dan Aspirasi</h3>
    <p style="font-size: 18px; max-width: 800px; margin: 0 auto; line-height: 1.6;">Saya memiliki aspirasi untuk menjadi seorang pengembang perangkat lunak profesional dan bermimpi untuk mendirikan startup teknologi yang bisa memberikan dampak yang berarti. Di masa depan, saya berencana untuk mengarahkan upaya dan kreativitas saya pada inovasi teknologi di bidang yang sangat saya cintai dan yakini.</p>
</div>

<!-- Footer -->
<div style="background-color: #333; color: white; padding: 20px; text-align: center;">
    <p>&copy; 2024 Ahmad Nabil Muharrom. Semua Hak Cipta Dilindungi.</p>
    <div>
        <a href="http://www.youtube.com/@UqqyAhmad" style="color: #4CAF50; text-decoration: none; margin-right: 15px;">Youtube</a>
        <a href="https://www.instagram.com/uqqyahmad" style="color: #4CAF50; text-decoration: none;">Instagram</a>
    </div>
</div>

@endsection
