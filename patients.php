<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Patients' Page</title>
</head>
</body>
<br>
<br>
<h2><b>Patients' Page</b></h2>
<br>
<a href="logout.php">Logout</a>|
<a href="reset.php">Reset Password</a>|
<a href="pay.php">Pay Bill</a>|
<br>
<h2>Please book appointment below. Complete all fields!</h2>

	<form method="POST" action="patients.php">
		<p>
			<label>Date of appointment</label><br>
			<input type="date" name="dateA" placeholder="Date of appointment" />
		</p>
		<p>
			<label>Nature of appointment</label><br>
			<input type="text" name="nature" placeholder="Nature of appointment" />
		</p>
		<p>
			<label>Time of appointment</label><br>
			<input type="time" name="timeA" placeholder="Time of appointment" />
		</p>
		<p>
			<label>Initial complaint</label><br>
			<input type="text" name="InitC" placeholder="Initial complaint" />
		</p>
		<p>
			<label>Department</label><br>
			<input type="text" name="department" placeholder="Department" />
		</p>
		<P>
			<button type="submit" class="btn btn-primary"name ="register">Submit</button>
		</P>
	</form>
</body>
</html>