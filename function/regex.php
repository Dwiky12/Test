<?php
$str = "Politeknik Negeri Malang";
$pattern = "/malang/i";
echo preg_replace($pattern, "Bali", $str);
?>