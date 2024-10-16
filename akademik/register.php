<?php
require "function.php";
if (isset($_POST['submit'])){

    if(register($_POST) > 0){
        header('location:login.php');
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
    <title>Halaman Register</title>
</head>
<body>
<h1>Register</h1>
    <form action="" method="POST">
    <table>
        <tr>
            <td><label for="username">Username</for></td>
            <td>:</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td><label for="password">Password</for></td>
            <td>:</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td><label for="repassword">Re-enter Password</for></td>
            <td>:</td>
            <td><input type="password" name="repassword" id="repassword"></td>
        </tr>
        <tr>
            <td><label for="email">Email</for></td>
            <td>:</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
            <td colspan="3"><input type="submit" name="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>