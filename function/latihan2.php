<?php
    if (isset ($_GET['submit'])){
        $methodpost=$_GET['methodpost'];
        $password=$_GET['password'];
        echo $methodpost;
        echo "<br>";
        echo $password;
    }
?>