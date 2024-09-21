@extends('layouts.app')

@section('title', 'Article')

@section('content')
<!-- Header -->
<div style="padding: 30px; background-color: #0d1f0e; color: white; text-align: center;">
    <h1 style="font-size: 40px; margin: 0;">Proyek</h1>
</div>

<!-- Galeri Proyek -->
<div style="padding: 50px; background-color: #f9f9f9; text-align: center;">
    
    
    <!-- Proyek 1 -->
    <div style="background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
        <h4>Membuat Fitur Login/Logout</h4>
        <br>
        <div style="overflow-x: auto; white-space: nowrap; border-radius: 10px; margin-bottom: 15px;">
            <img src="images/Screenshot (101).png" alt="Proyek 1" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px; margin-right: 10px;">
            <img src="images/Screenshot (102).png" alt="Proyek 1" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px; margin-right: 10px;">
            <img src="images/Screenshot (103).png" alt="Proyek 1" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px;">
        </div>
        <p style="font-size: 16px; color: #666;">Proyek ini bertujuan untuk mengimplementasikan fitur login dan logout dalam aplikasi mobile menggunakan Flutter dan Dart. Dalam tahap awal, kita akan membuat antarmuka pengguna (UI) yang intuitif, termasuk form untuk memasukkan nama pengguna dan kata sandi. Dengan memanfaatkan paket seperti provider atau bloc, kita dapat mengelola status autentikasi pengguna secara efisien. Proses login akan melibatkan verifikasi kredensial melalui API, serta penanganan respons untuk memastikan pengguna mendapatkan umpan balik yang jelas, baik saat berhasil maupun gagal masuk.</p>
        <p style="font-size: 16px; color: #666;">Setelah fitur login berhasil diimplementasikan, langkah selanjutnya adalah menambahkan fungsi logout. Fitur ini penting untuk meningkatkan keamanan aplikasi dan memberikan pengalaman pengguna yang baik. Saat pengguna memilih untuk keluar, kita akan menghapus token autentikasi yang tersimpan dan mengarahkan mereka kembali ke halaman login. Selain itu, kita juga perlu memastikan bahwa status pengguna diperbarui di seluruh aplikasi untuk menghindari akses ke halaman yang dilindungi tanpa autentikasi yang tepat. Proyek ini tidak hanya meningkatkan kemampuan teknis dalam Flutter dan Dart, tetapi juga memperkuat pemahaman tentang praktik terbaik dalam pengelolaan autentikasi pengguna.</p>
    </div>

    <!-- Proyek 2 -->
    <div style="background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
        <h4>Web Peminjaman Barang</h4>
        <br>
        <div style="overflow-x: auto; white-space: nowrap; border-radius: 10px; margin-bottom: 15px;">
            <img src="images/e4.png" alt="Proyek 2" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px; margin-right: 10px;">
            <img src="images/e5.png" alt="Proyek 2" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px; margin-right: 10px;">
            <img src="images/e6.png" alt="Proyek 2" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px;">
        </div>
        <p style="font-size: 16px; color: #666;">Proyek ini bertujuan untuk mengembangkan web peminjaman barang sekolah menggunakan PHP dan database MySQL. Dalam sistem ini, pengguna, seperti siswa dan guru, dapat dengan mudah meminjam barang sekolah seperti buku, alat tulis, atau peralatan olahraga. Antarmuka yang sederhana dan intuitif akan memudahkan pengguna untuk mencari dan memilih barang yang ingin dipinjam, serta melihat ketersediaan barang secara real-time. Proses peminjaman akan melibatkan pengisian formulir yang menyertakan informasi peminjam, barang yang dipinjam, dan durasi peminjaman.</p>
        <p style="font-size: 16px; color: #666;">Setelah peminjaman dilakukan, sistem akan menyimpan data ke dalam database untuk memastikan catatan yang akurat. Pengelola sekolah dapat dengan mudah mengelola data peminjaman, termasuk mengupdate status barang yang dipinjam dan mengingatkan pengguna tentang batas waktu pengembalian. Dengan adanya sistem ini, diharapkan pengelolaan barang sekolah menjadi lebih efisien dan transparan, sehingga memudahkan seluruh anggota sekolah dalam memanfaatkan sumber daya yang tersedia.</p>
    </div>

    <!-- Proyek 3 -->
    <div style="background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
        <h4>Web Kehadiran Siswa</h4>
        <br>
        <div style="overflow-x: auto; white-space: nowrap; border-radius: 10px; margin-bottom: 15px;">
            <img src="images/e10.png" alt="Proyek 3" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px; margin-right: 10px;">
            <img src="images/e8.png" alt="Proyek 3" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px; margin-right: 10px;">
            <img src="images/e9.png" alt="Proyek 3" style="display: inline-block; width: 100%; max-width: 600px; height: auto; border-radius: 10px;">
        </div>
        <p style="font-size: 16px; color: #666;">Proyek ini bertujuan untuk mengembangkan web kehadiran siswa yang memudahkan guru dalam mencatat dan mengelola data kehadiran. Melalui antarmuka yang user-friendly, guru dapat dengan cepat menandai kehadiran siswa, mencatat keterlambatan, dan alasan ketidakhadiran. Sistem ini juga memungkinkan siswa untuk melihat riwayat kehadiran mereka secara langsung, sehingga meningkatkan transparansi dan tanggung jawab siswa terhadap kehadiran mereka.</p>
        <p style="font-size: 16px; color: #666;">Selain pencatatan kehadiran, web ini dilengkapi dengan fitur analisis data yang memberikan laporan kehadiran per kelas dan per siswa. Pengelola sekolah dapat mengakses data tersebut untuk evaluasi dan perencanaan akademik. Dengan memanfaatkan teknologi web, diharapkan proses pengelolaan kehadiran menjadi lebih efisien, mengurangi penggunaan kertas, dan memudahkan komunikasi antara guru dan siswa terkait masalah kehadiran.</p>
    </div>
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