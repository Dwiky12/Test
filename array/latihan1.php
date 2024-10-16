<?php
$a = [100,100,"sita",true];

echo $a[2]."<br>";
echo $a[0]."<br>";
echo $a[1]."<br>";

print_r ($a[1]);
echo "<br>";
print_r ($a);
echo "<br>";
var_dump($a);
echo "<br>";
$a[]="Kevin";
var_dump($a);
echo "<br>";
unset ($a[1]);
print_r ($a);
echo "<br>";
echo "<br>";

$electronics=["Monitor","CPU","Keyboard"];
foreach ($electronics as $electronic){
echo $electronic."<br>";
}


// for ($i = 1;$i<=2;$i++){
//     echo $i($a)=
//     echo " ";
// }
?>