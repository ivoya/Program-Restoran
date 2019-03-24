<html>

<head>

        <title>Koreksi Data</title>

</head>

<body>

        <h1>Ubah Data Kategori</h1>

        <?php

        $kodekategori =$_GET['kd_kategori'];

        // Load file koneksi.php

        include "koneksidb.php";

        // Ambil data NIM yang dikirim oleh index.php melalui URL

        // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim

        $query = "SELECT * FROM kategori WHERE kd_kategori='$kodekategori'";

        $sql = mysqli_query($conn,$query);  // Eksekusi/Jalankan query dari variabel $query

        $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

        ?>

        <form method="post" action="proses_koreksi_kategori.php?kd_kategori=<?php echo $kodekategori;?>" enctype="multipart/form-data">

                <table cellpadding="8">

                        <tr>

                                <td>Kode Kategori</td>

                                <td><input type="text" name="txtkodekategori" value="<?php echo $data['kd_kategori']; ?>"></td>

                        </tr>

                        <tr>

                                <td>Nama Kategori</td>

                                <td><input type="text" name="txtnamakategori" value="<?php echo $data['nm_kategori']; ?>"></td>

                        </tr>

                </table>

                <hr>

                <input type="submit" value="Ubah">

                <a href="tampil_data_kategori.php"><input type="button" value="Batal"></a>

        </form>

</body>

</html>