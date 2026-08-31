<?php
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$path = parse_url($url);

echo "Scheme: " . $path['scheme'] . "<br>";
echo "Host: " . $path['host'] . "<br>";
echo "Path: " . $path['path'];
?>
