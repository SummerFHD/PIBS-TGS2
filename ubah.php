<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM data_mahasiswa WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Data</title>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>
    <form action="simpanUbah.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?= $data['nim']; ?>" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?= $data['nama']; ?>" required><br><br>

        <label for="kode_prodi">Kode Prodi:</label><br>
        <input type="text" id="kode_prodi" name="kode_prodi" value="<?= $data['kode_prodi']; ?>" required><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>