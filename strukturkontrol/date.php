<?php

//date
echo date("l") . "<br>";
echo date("l jS \of F Y h:i:s A") . "<br>";

//time
$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t)). "<br>";

//mktime
echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,9,12,2004)) . "<br>";
echo "Oct 3, 1975 was on a ".date("Y-m-d", mktime(0,0,0,10,12,1975)) . "<br>";

//srttotime
echo(strtotime("now") . "<br>");
echo(strtotime("12 September 2004") . "<br>");
?>