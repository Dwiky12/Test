<?php
session_start();
if (!isset($_SESSION['login'])){
    header ('location: login.php');
    exit;
}
require "function.php";
//memeriksa apakah parameter ada di url
if (!isset($_GET['id'])){
        echo "ID tidak ditemukan";
        exit;
    }
$id = $_GET["id"];
if(delete($id)>0){
    header('location: mahasiswa.php');
    exit;
}else{
    echo "Data gagal dihapus";
}
?>