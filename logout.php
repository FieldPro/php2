<?php session_start();

session_unset();
session_destroy();
header("Location: login.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
</body>

<a href="index.php">Home</a><br>
<a href="login.php">Login</a>


</body>
</html>