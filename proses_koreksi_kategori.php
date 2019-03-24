<?php

// Load file koneksi.php

include "koneksidb.php";

// Ambil data nim yang dikirim oleh form_ubah.php melalui URL

$kodekategori = $_GET['kd_kategori'];

// Ambil Data yang Dikirim dari Form

$namakategori = $_POST['txtnamakategori'];

                // Proses ubah data ke Database

                $query = "UPDATE kategori SET nm_kategori='".$namakategori."'WHERE kd_kategori='".$kodekategori."'";

                $sql = mysqli_query($conn,$query); // Eksekusi/ Jalankan query dari variabel $query

                if($sql){ // Cek jika proses simpan ke database sukses atau tidak

                // Jika Sukses, Lakukan :

                    header("location: tampil_data_kategori.php"); // Redirect ke halaman index.php

                }else{

                                // Jika Gagal, Lakukan :

                                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

                                echo "<br><a href=’form_koreksi_data_kategori.php’>Kembali Ke Form</a>";

                }

?>