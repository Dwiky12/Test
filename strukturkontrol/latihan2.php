<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
        <style>
            .warna{
            background-color: gray;
            }
        </style>
</head>
<body>
<table border = 1 >
<?php
for ($i = 1;$i<=10;$i++):
    if ($i % 2 == 1){
        echo "<tr class=warna>";
    }else {
        echo "<tr>";
    } 
for ($j = 1;$j<=3;$j++):
        echo "<td>".$i.",".$j." "."</td>";
        
    endfor;
    echo "</tr>";

endfor;
?>
</table>
</body>
</html>