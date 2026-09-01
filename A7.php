//7.	Write a PHP program to check whether a given string starts with "F" or ends with "B". If the string starts with "F" return "Fizz" and return "Buzz" if it ends with "B" If the string starts with "F" and ends with "B" return "FizzBuzz". In other cases return the original string.
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$str = "Football";

if (str_starts_with($str, "F") && str_ends_with($str, "B")) {
    echo "FizzBuzz";
} elseif (str_starts_with($str, "F")) {
    echo "Fizz";
} elseif (str_ends_with($str, "B")) {
    echo "Buzz";
} else {
    echo $str;
}

?>

</body>
</html>