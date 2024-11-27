<?php
include 'koneksi.php'; // Hubungkan ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kode_prodi = $_POST['kode_prodi'];

    // Query untuk menambah data
    $query = "INSERT INTO data_mahasiswa (nim, nama, kode_prodi) VALUES ('$nim', '$nama', '$kode_prodi')";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='admin.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>