<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$emailInput = " user.name+test@example.com ";

$cleanEmail = trim($emailInput);
$cleanEmail = filter_var($cleanEmail, FILTER_SANITIZE_EMAIL);
if (filter_var($cleanEmail, FILTER_VALIDATE_EMAIL)) {
    echo "The email '$cleanEmail' is valid.";
} else {
    echo "The email '$cleanEmail' is invalid.";
}
?>

    
</body>
</html>?php

