//6.Write a PHP program to check a specified number is present in a given array of integers.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$array = [10, 20, 30, 40, 50];
$number = 30;

if (in_array($number, $array)) {
    echo "$number is present in the array.";
} else {
    echo "$number is not present in the array.";
}

?>

</body>
</html>