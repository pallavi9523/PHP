<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$a = 45;
$b = 48;

if (($a >= 40 && $a <= 50 && $b >= 40 && $b <= 50) ||
    ($a >= 50 && $a <= 60 && $b >= 50 && $b <= 60)) {
    echo "true";
} else {
    echo "false";
}

?>

</body>
</html>
