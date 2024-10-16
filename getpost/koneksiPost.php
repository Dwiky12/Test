<?php
    if (isset ($_POST['nama']) && isset($_POST['nim'])){
        $nama=$_POST['nama'];
        $nim=$_POST['nim'];
        $prodi=$_POST['prodi'];
        $jurusan=$_POST['jurusan'];
        $alamat=$_POST['alamat'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        echo "<h1>Method POST</h2>";
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