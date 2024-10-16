<?php
//koneksi ke mysql
$conn = mysqli_connect("localhost", "root", "", "akademik");

//function query dengan parameter
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows=[];
    while ($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

//fungsi searching
function cari($keyword){
    $query="SELECT * FROM students WHERE 
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%'
            ";
    return query($query);
}

//function tambah
function tambah($data){
    global $conn;
    $nama=$data['nama'];
    $nama=$data['nama'];
    $nim=$data['nim'];
    $email=$data['email'];
    $foto = foto();
    // Kondisi jika foto kosong
    if (!$foto){
        return false;
    }
    $query = "INSERT INTO students (nama, nim, email, foto) VALUES ('$nama','$nim','$email','$foto')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id=$data['id'];
    $nama=$data['nama'];
    $nim=$data['nim'];
    $email=$data['email'];
    $fotoLama=$data['fotolama'];

    if (!$_FILES['foto']['error']===4){
        $foto = $fotoLama;
    } else{
        $foto = foto();
    }
    $query = "UPDATE students SET
                    nama='$nama', nim='$nim', email='$email', foto='$foto'
                WHERE id=$id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM students WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function foto(){
    $nameFile=$_FILES['foto']['name'];
    $typeFile=$_FILES['foto']['type'];
    $sizeFile=$_FILES['foto']['size'];
    $errorFile=$_FILES['foto']['error'];
    $pathFile=$_FILES['foto']['tmp_name'];

    // fungsi untuk mengecek apakah ada gambar diupload
    if ($errorFile === 4){
        echo "Tidak ada gambar yang diupload &" ;
        return false;
    }

    // fungsi untuk mengecek format file gambar
    $formatValid=['jpg','jpeg','png','webp'];
    $format=explode('.',$nameFile);
    $format=strtolower(end($format));
    if (!in_array($format, $formatValid)){
        echo "Format file diupload bukan gambar & ";
        return false;
    }

    // fungsi untuk mengecek size file
    if ($sizeFile > 1048576){
        echo "Ukuran file melebihi batas";
    }

    //lolos pengecekan
    $nameFileBaru=uniqid().'.'.$format;
    move_uploaded_file($pathFile, 'images/'.$nameFileBaru);
    return 'images/'.$nameFileBaru;
}

function register($data){
    global $conn;
    $username=strtolower(stripslashes($data['username']));
    $password=mysqli_real_escape_string($conn, $data['password']);
    $repassword=mysqli_real_escape_string($conn, $data['repassword']);
    $email=htmlspecialchars($data['email']);

    // cek username sudah ada
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "Username telah digunakan";
    }

    //pengecekan password
    if ($password !== $repassword){
        echo "Password tidak sama";
        return false;
    }
    //enkripsi password
    $passwordEnkripsi=password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password, email) VALUES ('$username','$passwordEnkripsi','$email')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

?>