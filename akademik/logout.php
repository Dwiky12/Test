<?php
session_start();
$_SESSION=[];
session_unset();
session_destroy();

setcookie('id','',time()-20);
setcookie('key','',time()-20);
header("location: login.php");
exit;
?>