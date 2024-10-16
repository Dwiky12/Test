<?php
    $host="localhost";
    $user="root";
    $pass="";

    $koneksi=mysqli_connect($host, $user, $pass);
    if (!$koneksi){
        echo "tidak berhasil";
    }
    else {echo "berhasil";}
?>