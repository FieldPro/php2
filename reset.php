<?php session_start(); 

if(!$_SESSION["loggedIn"] && !isset($_GET["token"]) && !isset($_SESSION["token"])){
	$_SESSION["error"] = "You are not authorized to view that page";
	header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Reset Password</title>
</head>
</body>
<h3></h3>
			<p>
				<a href="patients.php">Back</a><br>
			</p>
<p>Reset password associated with your account : [email]</p>

	<form method="POST" action="processreset.php">
			<p>
			<?php
				if(isset($_SESSION["error"]) && !empty($_SESSION["error"])){
					echo "<span style='color:red'>" . $_SESSION["error"] . "</span>";
					session_destroy();
				}
			?>
			</p>
			<?php if(!$_SESSION["loggedIn"]) { ?>
			<input	
				<?php 
					if(isset($_SESSION["token"])){
						echo "value ='" . $_SESSION["token"] . "'";
					}else {
						echo "value ='" . $_GET["token"] . "'";
					}	 
				?>
				
				type="hidden" name="token" />
			<?php } ?>
			
			<p>
				<label>Email</label><br>
				<input 
					
					<?php 
						if(isset($_SESSION["email"])){
							echo "value =" . $_SESSION["email"];
						}
					?>					
					type="email" name="email" />
			</p>
	
			<p>
				<label>Enter New Password</label><br>
				<input type="password" name="password" placeholder="Password" />
			</p>
			<P>
				<button type="submit" class="btn btn-primary"name ="register">Reset Password</button>
			</P>
	</form>
					
</body>
</html>