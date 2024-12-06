<?php
session_start(); // Mulai sesi
include("koneksi.php");

// Periksa apakah tombol "simpan" pada form edit ditekan
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $id = $_POST['game_id'];
    $nama_game = $_POST['nama_game'];
    $genre = $_POST['genre'];
    $harga = $_POST['harga'];

    // Buat query untuk memperbarui data
    $sql = "UPDATE tb_games SET
            nama_game='$nama_game',
            genre='$genre',
            harga='$harga'
            WHERE game_id=$id";

    $query = mysqli_query($db, $sql);
    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data game berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data game gagal diperbarui!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>