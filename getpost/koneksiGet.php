<?php
    if (isset ($_GET['nama']) && isset($_GET['nim'])){
        $nama=$_GET['nama'];
        $nim=$_GET['nim'];
        $prodi=$_GET['prodi'];
        $jurusan=$_GET['jurusan'];
        $alamat=$_GET['alamat'];
        $username=$_GET['username'];
        $password=$_GET['password'];

        echo "<h1>Method GET</h2>";
        echo "Nama : $nama"."<br>";
        echo "NIM : $nim"."<br>";
        echo "Prodi : $prodi"."<br>";
        echo "Jurusan : $jurusan"."<br>";
        echo "Alamat : $alamat"."<br>";
        echo "Username : $username"."<br>";
        echo "Password : $password"."<br>";
    } else {
        echo "Form tidak terkirim";
    }
?>