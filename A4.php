<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$str = "hello";

$length = strlen($str);

if ($length < 3) {
    echo strtoupper($str);
} else {
    echo substr($str, 0, $length - 3) .
         strtoupper(substr($str, -3));
}

?>

</body>
</html>
