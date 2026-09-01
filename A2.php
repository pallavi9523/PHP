<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$a = 85;
$b = 95;

if ($a == $b) {
    echo "0";
} elseif (abs(100 - $a) < abs(100 - $b)) {
    echo $a;
} else {
    echo $b;
}

?>

</body>
</html>
