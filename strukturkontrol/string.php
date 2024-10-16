<?php
/* strlen
    Fungsi strlen adalah mengembalikan panjang string dalam byte, 0 jika kosong*/
echo strlen("I Kadek Dwiky Restu Setiawan"). "<br>". "<br>";

/* strcmp
    Fungsi strcmp adalah membandingkan 2 string, 0 jika string sama, <0 jika string 1 lebih kecil
    dan >0 jika string 1 lebih besar*/
echo strcmp("Politeknik Negeri Bali" , "Politeknik negeri bali");
echo "<br>";
echo strcmp("Politeknik Negeri Bali" , "Politeknik Negeri Bali"). "<br>". "<br>";

/* explode
    Fungsi explode adalah untuk memecah string menjadi array*/
$str = "Politeknik Negeri Bali, alamat bukit Jimbaran.";
print_r (explode(" ",$str));
echo "<br>". "<br>";

/* htmlspecialchars
    Mengkonversi karakter menjadi entitas HTML*/
$str2 = "Ini adalah huruf <b> Besar </b> teks";
echo htmlspecialchars($str2)."<br>";

$str1 = "Dwiky & 'Restu'";
echo htmlspecialchars($str1, ENT_COMPAT)."<br>";
echo htmlspecialchars($str1, ENT_QUOTES)."<br>";
echo htmlspecialchars($str1, ENT_NOQUOTES)."<br>";
?>