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
    <title>Forgot Password</title>
</head>
</body>

<a href="login.php">Login</a>
<a href="register.php">Register</a>

<h3></h3>
<p>Please provide your details below</p>

	<form method="POST" action="processforgot.php">
			
			<p>
				<?php error(); message(); ?>
			</p>
		
			<p>
				<label>Email</label><br>
				<input 
				<?php
					if(isset($_SESSION["email"])){
						echo "value=" . $_SESSION["email"];
				}
				?> type="email" name="email" placeholder="Email" />
			</p>

			<P>
				<button type="submit" class="btn btn-primary"name ="register">Submit</button>
			</P>
	</form>

</body>
</html>