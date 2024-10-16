<?php
session_start();
require "function.php";
 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id=$_COOKIE['id'];
    $key=$_COOKIE['key'];

    //ambil username berdasarkan id
    $result=mysqli_query($conn, "SELECT username FROM users WHERE id='$id'");
    $row=mysqli_fetch_assoc($result);
    if($key === hash('sha256',$row['username'])){
        $_SESSION['login']=true;
    }
}
if (isset($_SESSION['login'])){
    header ('location: mahasiswa.php');
    exit;
}

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    //cek user
    $result = mysqli_query ($conn, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result)===1){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])){
            $_SESSION['login'] = true;
          
            //cek remember me
            if (isset($_POST['remember'])){
                setcookie('id',$row['id'], time()+20);
                setcookie('key',hash('sha256',$row['username']), time()+20);
            }
            header ('location: mahasiswa.php');
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
<h1>Login</h1>
    <?php if (isset($error)): ?>
        <p style="color:red">username / password salah</p>
        <?php endif; ?>
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
                <td><label for="remember">Remember me</for></td>
                <td></td>
                <td><input type="checkbox" name="remember" id="remember"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>