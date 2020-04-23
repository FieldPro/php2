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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>

<p>
	<a href="login.php">Login</a>
	<!--<a href="forgot.php">Forgot Password</a>-->
</p>
<p><strong>Welcome, Please Register</strong></p>
	<p>All fields are required </p>

	<form method="POST" action="processregister.php">
		<p>
			<?php error(); ?>
		</p>
		<p>
			<label>First Name</label><br>
			<input 
			<?php
				if(isset($_session["first_name"])){
					echo "value=" . $_SESSION["first_name"];
			}
			?>
			type="text" name="first_name" placeholder="First Name" />
		</p>
		<p>
			<label>Last Name</label><br>
			<input 
			<?php
				if(isset($_session["last_name"])){
					echo "value=" . $_SESSION["last_name"];
			}
			?>
			type="text" name="last_name" placeholder="Last Name" />
		</p>
		<p>
			<label>Email</label><br>
			<input 
			<?php
				if(isset($_session["email"])){
					echo "value=" . $_SESSION["email"];
			}
			?> type="text" name="email" placeholder="Email" />
		</p>
		<p>
			<label>Password</label><br>
			<input type="text" name="password" placeholder="Password" />
		</p>
		<p>
				<label>Gender</label><br/>
				 <select name="gender" >
					  <option value="">Select</option>
					  <option
						<?php
							if(isset($_session["gender"]) && $_SESSION["gender"] == "Female"){
								echo "selected";
						}
						?>
					  >Female</option>
					  <option
					  <?php
							if(isset($_session["gender"]) && $_SESSION["gender"] == "Male"){
								echo "selected";
						}
						?>
					  >Male</option>
				</select>
			</p>
		<p>
				<label>Designation</label><br/>
				 <select name="designation" >
					  <option value="">Select</option>
					  <option
						<?php
							if(isset($_session["designation"]) && $_SESSION["designation"] == "Medical Team (MT)"){
								echo "selected";
						}
						?>
					  >Medical Team (MT)</option>
					  <option
						<?php
							if(isset($_session["designation"]) && $_SESSION["designation"] == "Patient"){
								echo "selected";
						}
						?>
					  >Patient</option>
				</select>
			</p>
		<p>
				<label>Department</label><br/>
				<input 
				<?php
					if(isset($_session["department"])){
						echo "value=" . $_SESSION["department"];
					}
				?>
				type="text" name="department" placeholder="Department" />
			</p>
		<P>
			<button type="submit" class="btn btn-primary" name="register">Register</button>
		</P>
	</form>


</body>
</html>