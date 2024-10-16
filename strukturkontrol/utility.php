<?php
/* var_dump
    Fungsi var_dum untuk memuat informasi tentang 1 atau lebih variabel,
    informasi tersebut menyimpan jenis dan nilai variabel*/
$a = 24;
echo var_dump($a). "<br>";
$b = "Politeknik Negeri Bali";
echo var_dump($b). "<br>";
$c = 32.5;
echo var_dump($c). "<br>";
//dump 2 variabel
echo var_dump($a,$b). "<br>". "<br>";

/* isset
    Fungsi isset untuk memeriksa variabel apakah dideklarasikan atau NULL*/
$d = 2;
// True karena variabel 'd' sudah dideklarasikan
    if(isset($d)){
        echo "Variabel 'd' dideklarasikan"."<br>"."<br>";
    }
$e = null;
// False karena variabel 'e' adalah NULL
    if(isset($e)){
        echo "Variabel 'e' dideklarasikan"."<br>"."<br>";
    }

/* empty
    Fungsi empty untuk memeriksa suatu variabel kosong atau tidak.
    mengembalikan nilai salah jika variabel ada dan tidak kosong,
    jika tidak akan mengembalikan nilai benar.*/
$f = 0;
//True karena $f adalah kosong
if (empty($f)){
    echo "Variabel 'f' kosong"."<br>";
}
//True karena $f dideklarasikan
if (isset($f)){
    echo "Variabel 'f' dideklarasikan"."<br>"."<br>";
}

/* sleep
    Fungsi sleep untuk menunda eksekusi script saat ini selama waktu tertentu*/
    echo date('h:i:s')."<br>";
    //sleep untuk 5 detik
    sleep(5);
    //mulai lagi
    echo date('h:i:s');

/* die
    Fungsi die untuk mencetak pesan dan menghentikan script saat ini*/
$site = "https://www.google.com/";
fopen($site,"r")
or die("Unable to connect to $site")."<br>"."<br>";
?>