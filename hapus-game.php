<?php
session_start(); // Mulai sesi
include("koneksi.php");

// Mengecek apakah tombol 'simpan' telah ditekan
if (isset($_GET['id'])) {
    //Ambil ID dari URL
    $id = $_GET['id'];

    // Menyusun query SQL untuk menambahkan data ke tabel
    $sql ="DELETE FROM tb_games WHERE game_id=$id";
    $query = mysqli_query($db, $sql);

    // Simpan pesan
    if ($query) {
        $_SESSION['notifikasi'] = "Data game berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data game gagal dihapus!";
    }

    // Alihkan ke halaman index.php
    header("Location: index.php");
} else {
     // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>