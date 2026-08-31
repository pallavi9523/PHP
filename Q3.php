<html>
<head>
    <title>Client IP Address</title><br>
</head>
<body>
    <?php
    echo "Your IP address is: " . gethostbyname($_SERVER['REMOTE_HOST']);
    ?>
</body>
</html>
