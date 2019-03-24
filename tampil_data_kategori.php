<html>

<head>

        <title>Data Kategori Makanan</title>

</head>

<body>

        <h1>Kategori Makanan</h1>

        <a href="tambah_kategori.php">Tambah Data Kategori Makanan</a><br><br>

        <table border="1" width="50%">

                <tr>

                        <th>Kode Kategori</th>

                        <th>Nama Kategori</th>

                        <th colspan="2">Aksi</th>

                </tr>

                <?php

                // Load file koneksi.php

                 include 'koneksidb.php';

                $query = "SELECT * FROM kategori"; // Query untuk menampilkan semua data siswa

                $sql = mysqli_query($conn,$query); // Eksekusi/Jalankan query dari variabel $query

                while($data = mysqli_fetch_array($sql, MYSQLI_ASSOC)){ // Ambil semua data dari hasil eksekusi $sql

                echo "<tr>";

                echo "<td>".$data['kd_kategori']."</td>";     

                echo "<td>".$data['nm_kategori']."</td>";

                echo "<td><a href='form_data_kategori.php?kd_kategori=".$data['kd_kategori']."'>Koreksi</a></td>";

                echo "<td><a href='proses_hapus_kategori.php?kd_kategori=".$data['kd_kategori']."'>Hapus</a></td>";

                echo "</tr>";

                }

        ?>

</table>

</body>

</html>