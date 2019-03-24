<?php

                // Load file koneksi.php

                include 'koneksidb.php';

                # UNTUK PAGING (PEMBAGIAN HALAMAN)

$row = 20;

$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM menu";

$pageQry = mysqli_query($conn,$pageSql) or die ("error paging: ".mysqli_error());

$jml        = mysqli_num_rows($pageQry);

$max     = ceil($jml/$row);

?>

<html>

<head>

                <title>Data Menu Makanan</title>

</head>

<body>

                <h1>Kategori Menu Makanan</h1>

                <a href="tambah_menu.php">Tambah Data Menu Makanan</a><br><br>

                <table border="1" width="50%">

                <tr>

                                <th>No</th>

                                <th>Kode Manu</th>

                                <th>Nama Menu</th>

                                <th>Harga</th>

                                <th>Kategori</th>

                                <th colspan="2">Aksi</th>

                </tr>

                 <?php

                $mySql = "SELECT menu.*, kategori.nm_kategori FROM menu, kategori

                                                                WHERE menu.kd_kategori=kategori.kd_kategori

                                                                ORDER BY menu.kd_kategori, menu.nm_menu ASC LIMIT $hal, $row";

                $myQry                 = mysqli_query($conn,$mySql)  or die ("Query  salah : ".mysqli_error());

                $nomor  = $hal;

                while ($kolomData = mysqli_fetch_array($myQry)) {

                                $nomor++;

                                $Kode = $kolomData["kd_menu"];

                ?>

                                <tr>

                                <td><?php echo $nomor; ?></td>

                                <td><?php echo $kolomData['kd_menu']; ?></td>

                                <td><?php echo $kolomData['nm_menu']; ?></td>

                                <td align="right">Rp. <b><?php echo $kolomData['harga']; ?></b></td>

                                <td><?php echo $kolomData['nm_kategori']; ?></td>

                                <td><a href="form_koreksi_menu.php?kd_menu='.$kolomData['kd_menu'].'">Koreksi</a></td>

                                <td align="center"><a href="proses_hapus_menu.php&kd_menu=<?php echo $kd_menu; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI … ?')">Hapus</a></td>

                  <?php } ?>

    </table>    </td>

  </tr>

  <tr class="selKecil">

    <td><b>Jumlah Data :</b> <?php echo $jml; ?> </td>

    <td align="right"><b>Halaman ke :</b>

                <?php

                for ($h = 1; $h <= $max; $h++) {

                                //$list[$h] = (($row * $h) – $row);

                                echo " <a href='?page=Menu-Data&hal=$list[$h]'>$h</a> ";

                }

                ?></td>

  </tr>

  </table>

</body> 
</html>