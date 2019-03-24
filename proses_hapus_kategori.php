<?php

// Load file koneksi.php

include "koneksidb.php";

// Ambil data NIM yang dikirim oleh daftar_data_kategori.php melalui URL

$kodekategori = $_GET['kd_kategori'];

$query2 = "DELETE FROM kategori WHERE kd_kategori='".$kodekategori."'";

$sql2 = mysqli_query($conn,$query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak

                // Jika Sukses, Lakukan :

                header("location: tampil_data_kategori.php"); // Redirect ke halaman index.php

}else{

                // Jika Gagal, Lakukan :

                echo "Data gagal dihapus. <a href='daftar_data_kategori.php'>Kembali</a>";

}

?>