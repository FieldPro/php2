<?php session_start();
	if(!isset($_SESSION["loggedIn"])){
	header("Location: login.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Dashboard</title>
		</head>
		<body>
		<h3>Dashboard</h3>
			
			Welcome, <?php echo $_SESSION["fullname"] ?>, You are logged in as <?php echo $_SESSION["role"] ?>, and your ID no. is <?php echo $_SESSION["loggedIn"]?>.
		<p>
			<a href="index.php">Home</a>| <a href="logout.php">Logout</a>
		</p>
	</body>
</html>