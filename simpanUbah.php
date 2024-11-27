<?php
include 'koneksi.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];            // Menangkap ID
    $nim = $_POST['nim'];          // Menangkap input NIM
    $nama = $_POST['nama'];        // Menangkap input Nama
    $kode_prodi = $_POST['kode_prodi']; // Menangkap input Kode Prodi

    // Query update data
    $query = "UPDATE data_mahasiswa SET nim = '$nim', nama = '$nama', kode_prodi = '$kode_prodi' WHERE id = $id";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diubah!'); window.location='admin.php';</script>";
    } else {
        echo "Gagal mengubah data: " . mysqli_error($koneksi);
    }
}
?>