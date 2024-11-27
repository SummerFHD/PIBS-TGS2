<?php
include 'koneksi.php'; // Menghubungkan ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Mahasiswa</title>
</head>
<body>
    <h2>Administrasi Data Mahasiswa</h2>

    <!-- Form Tambah Data -->
    <h3>Tambah Data Mahasiswa</h3>
    <form action="tambah.php" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="kode_prodi">Kode Prodi:</label><br>
        <input type="text" id="kode_prodi" name="kode_prodi" required><br><br>

        <button type="submit">Tambah Data</button>
    </form>

    <hr>

    <!-- Tabel Data -->
    <h3>Data Mahasiswa</h3>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kode Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Mengambil data dari tabel
            $query = "SELECT * FROM data_mahasiswa";
            $result = mysqli_query($koneksi, $query);
            $no = 1;

            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $no++; ?></td> <!-- Nomor -->
                    <td><?= htmlspecialchars($row['nim']); ?></td> <!-- NIM -->
                    <td><?= htmlspecialchars($row['nama']); ?></td> <!-- Nama -->
                    <td><?= htmlspecialchars($row['kode_prodi']); ?></td> <!-- Kode Prodi -->
                    <td>
                        <!-- Tombol Ubah & Hapus -->
                        <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> | 
                        <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>