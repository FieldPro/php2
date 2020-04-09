<?php session_start();
	if(isset($_SESSION["loggedIn"]) && !empty($_SESSION["loggedIn"])){
	header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
</body>
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
			<?php
				if(isset($_SESSION["error"]) && !empty($_SESSION["error"])){
					echo "<span style='color:red'>" . $_SESSION["error"] . "</span>";
					session_destroy();
				}
			?>
		</p>
		<p>
			<label>Email</label><br>
			<input 
			<?php
				if(isset($_session["email"])){
					echo "value=" . $_SESSION["email"];
			}
			?> type="email" name="email" placeholder="Email" />
		</p>
		
		<p>
			<label>Password</label><br>
			<input type="text" name="password" placeholder="Password" />
		</p>
		<P>
			<button type="submit" name ="register">Log in</button>
		</P>
	</form>
	
</body>
</html>