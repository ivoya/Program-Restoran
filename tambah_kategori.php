<?php

include 'koneksidb.php';

//prosese

if(isset($_POST['simpan']))

{

  $kodekategori=$_POST['txtkodekategori'];

  $namakategori=$_POST['txtnamakategori'];

        # Validasi Kode Kategori, jika sudah ada akan ditolak

  $cekSql="SELECT * FROM kategori WHERE kd_kategori='$kodekategori'";

  $cekQry=mysqli_query($conn,$cekSql);

  if(mysqli_num_rows($cekQry)>=1){

    echo "DATA SUDAH ADA";
    echo "<a href='tambah_kategori.php'>kembali</a>";

  }

  else {

                                                # SIMPAN DATA KE DATABASE.

                                                // Jika tidak menemukan error, simpan data ke database

    $mySql = "INSERT INTO kategori VALUES ('$kodekategori','$namakategori')";

    $myQry                = mysqli_query($conn,$mySql);

    echo "DATA SUDAH DISIMPAN";
    echo "<a href='tambah_kategori.php'>kembali</a>";

  }

  exit;

  } // Penutup POST

  ?>

  <!DOCTYPE html>

  <html>

  <head>

  <title>Cara Membuat Validasi Menghindari Duplicate Entry Menggunakan PHP</title>

  </head>

  <body>

  <form action="tambah_kategori.php" method="post">

  <table>

  <tr>

  <td>kode kategori</td>

  <td><input type="text" name="txtkodekategori" placeholder="kode kategori"></td>

  </tr>

  <tr>

  <td>Nama Kategori</td>

  <td><input type="text" name="txtnamakategori" placeholder="nama kategori"></td>

  </tr>

  <tr>

  <td><input type="submit" name="simpan" value="simpan"></td>

  <td><a href="tampil_data_kategori.php"><input type="button" value="Batal"></a></td>

  </tr>

  </table>

  </form>

  </body>

  </html>