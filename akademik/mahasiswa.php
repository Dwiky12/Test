<?php
session_start();
if (!isset($_SESSION['login'])){
    header ('location: login.php');
    exit;
}
require "function.php";

//pagination
//konfigurasi
$jumlahDataPerHalaman=2;
$jumlahData=count(query("SELECT * FROM students"));
$jumlahHalaman=ceil($jumlahData/$jumlahDataPerHalaman);
$halamanAktif=(isset($_GET['halaman']))? $_GET['halaman']:1;
$awalData=($jumlahDataPerHalaman*$halamanAktif)-$jumlahDataPerHalaman;

$students=query("SELECT * FROM students LIMIT $awalData, $jumlahDataPerHalaman");
//Ambil data tabel mahasiswa
// $students = query("SELECT * FROM students ORDER BY ID DESC");

//Tombol cari ditekan
if (isset($_POST["cari"])){
    $students = cari($_POST["keyword"]);
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
    <a href="logout.php">Logout</a>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php"><img src="images/tambahdata.png" width=30></a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size=40 autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>
<?php if($halamanAktif > 1):?>
    <a href="?halaman=<?= $halamanAktif-1;?>">&laquo;</a>
    <?php endif;?>

    <?php for($i=1; $i<=$jumlahHalaman;$i++):?>
        <?php if ($i == $halamanAktif):?>
            <a href="?halaman=<?= $i; ?>" <style="font-weight: bold; color: red;">
                <?= $i; ?></style>
        </a>
        <?php else:?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif;?>
            <?php endfor;?>
            <?php if($halamanAktif < $jumlahHalaman):?>
                <a href="?halaman<?= $halamanAktif+1;?>">&raquo;</a>
                <?php endif;?>
                <br>
    <form action="" method="get">
    <table border=1>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($students as $row): ?>
            <tr>   
                <td><?= $i ?></td>
                <td><img src="<?= $row['foto']; ?>" width=50></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
                    <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </form>
</body>
</html>