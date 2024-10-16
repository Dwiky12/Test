<?php
session_start();
if (!isset($_SESSION['login'])){
    header ('location: login.php');
    exit;
}
require "function.php";
if (isset($_POST['submit'])){
    if(tambah($_POST) > 0){
        echo "data berhasil ditambahkan";
        header('location:mahasiswa.php');
    }else{
        echo "Data gagal ditambahkan";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambah.php" method="POST">
    <table>
        <tr>
            <td><label for="nama">Nama</for></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td><label for="nim">NIM</for></td>
            <td>:</td>
            <td><input type="text" name="nim" id="nim"></td>
        </tr>
        <tr>
            <td><label for="email">Email</for></td>
            <td>:</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td><label for="foto">Foto</for></td>
            <td>:</td>
            <td><input type="file" name="foto" id="foto"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>