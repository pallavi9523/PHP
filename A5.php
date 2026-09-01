<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$str = "aaa";

$count = 0;
$length = strlen($str);

for ($i = 0; $i < $length - 1; $i++) {
    if ($str[$i] == 'a' && $str[$i + 1] == 'a') {
        $count++;
    }
}
echo $count;
?>

</body>
</html>
