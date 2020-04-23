<?php session_start();
require_once("functions/alert.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Home</title>
</head>
</body>
	<?php message(); ?>
	<P>Welcome to SNG: Hospital for the ignorant</P> <br> <hr/>
	<p>This is a specialist hosipital to cure ignorance!</p>
	<p>Come as you are, it is completely free!</p>
	<p>
		<a href="index.php">Home</a>
		<a href="login.php">Login</a>
		<a href="register.php">Register</a>
		<a href="forgot.php">Forgot Password</a>
	</p>	
</body>
</html>