<?php
session_start(); // Mulai sesi
// Menghubungkan file ini dengan file konfigurasi database
include("koneksi.php");

// Mengecek apakah tombol 'simpan' telah ditekan
if (isset($_POST['simpan'])) {
    /* Mengambil nilai dari form input
       dan menyimpannya ke dalam variabel */
    $nama_game = $_POST['nama_game'];
    $genre = $_POST['genre'];
    $harga = $_POST['harga'];

    // Menyusun query SQL untuk menambahkan data ke tabel
    $sql = "INSERT INTO tb_games
            (nama_game, genre, harga)
            VALUES ('$nama_game', '$genre', '$harga')";

    // Menjalankan query dan menyimpan hasilnya dalam variabel $query
    $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if ($query) {
        $_SESSION['notifikasi'] = "Data game berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data game gagal ditambahkan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>