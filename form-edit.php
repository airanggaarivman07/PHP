<?php
// Termasuk file konfigurasi
include("koneksi.php");

// Mengambil ID dari parameter URL
$id = $_GET['id'];

// Mengambil data dari database berdasarkan ID
$query = $db->query("SELECT * FROM tb_games WHERE game_id = '$id'");
$game = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Game | SMK Negeri 4 Tanjungpinang</title>
</head>
<body>
    <h3>Edit Data Game</h3>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="game_id" value="<?php echo $game['game_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama_game</td>
                <td>
                    <input type="text" name="nama_game"
                    value="<?php echo $game['nama_game']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <input type="text" name="genre"
                    value="<?php echo $game['genre']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="text" name="harga"
                    value="<?php echo $game['harga']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>