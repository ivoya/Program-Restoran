<?php

include 'koneksidb.php';

if (isset($_POST['txtusername']) and isset($_POST['txtpassword'])){
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    $hasil = mysqli_query($conn,"SELECT * FROM login where username ='$username' and password ='$password'") or die(mysqli_error($conn));
    if(mysqli_num_rows($hasil)){
        header("location:tampil_data_kategori.php");
    } else {
        echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
    }

exit;

}

?>

<!DOCTYPE html>

<html>

<head>

    <title>login </title>

</head>

<body>

    <h2>login </h2>

    <br/>

    <!– cek pesan notifikasi –>

    <br/>

    <br/>

    <form method="post" action="login.php">

        <table>

         <tr>

             <td>Username</td>

             <td>:</td>

             <td><input type="text" name="txtusername" placeholder="Masukkan username"></td>

         </tr>

         <tr>

            <td>Password</td>

            <td>:</td>

            <td><input type="password" name="txtpassword" placeholder="Masukkan password"></td>

        </tr>

        <tr>

            <td><input type="submit" name="login" value="Login"></td>

        </tr>

    </table>                                

</form>

</body>

</html>