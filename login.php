<?php session_start();
	require_once("functions/alert.php");
	
if(isset($_SESSION["loggedIn"]) && !empty($_SESSION["loggedIn"])){
	header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Login</title>
</head>
</body>
	<div class="row">
		<div class="col-md-3">
			<?php
				if(isset($_SESSION["message"]) && !empty($_SESSION["message"])){
					echo "<span style='color:green'>" . $_SESSION["message"] . "</span>";
						session_destroy();
				}
			?>
			
			<p>
				<a href="index.php">Home</a><br>
				<a href="register.php">Register</a><br>
				<a href="forgot.php">Forgot Password</a>
			</p>
		
			<form method="POST" action="processlogin.php">
			
				<p>
					<?php error(); ?>
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
				
				<p>
					<label>Password</label><br>
					<input type="text" name="password" placeholder="Password" />
				</p>
				<P>
					<button type="submit" class="btn btn-primary"name ="register">Log in</button>
				</P>
			</form>
</body>
</html>