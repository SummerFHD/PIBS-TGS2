<?php
include 'koneksi.php'; // Koneksi ke database

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Menangkap parameter ID

    // Query delete data
    $query = "DELETE FROM data_mahasiswa WHERE id = $id";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='admin.php';</script>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>