<!DOCTYPE html>
<html>
<head>
    <title>game platfrom</title>
</head>
<body>
    <h3>Tambah Data Game</h3>
    <form action="proses-tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama game</td>
                <td><input type="text" name="nama_game" required></td>
            </tr>
            <tr>
                <td>genre</td>
                <td><input type="text" name="genre"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>