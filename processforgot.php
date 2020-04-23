<?php session_start();

$errorCount = 0;

$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;

if($errorCount > 0){ 
		$session_error = "You have " . $errorCount . " error";
		
		if($errorCount > 1){
			$session_error .= "s";
		}
		
		$session_error .= " in your form submission";
		$_SESSION["error"] = $session_error ;
		
		header("Location: forgot.php");

}else {
	$allUsers = scandir("db/users/");
	$countAllUsers = count($allUsers);
	
	for ($counter = 0; $counter < $countAllUsers; $counter++) {
		$currentUser = $allUsers[$counter];
		
		if($currentUser == $email . ".json"){
			$_SESSION["message"] = "Password request reset link sent to your email";
			header("Location: login.php"); 
			$token = "";
			
			$alphabets = ["a","b","c","d","e","f","g","h","A","B","C","D","E","F","G","H"];
			for($i = 0; $i < 29; $i++) {
				
				$index = mt_rand(0, count($alphabets)-1);
				$token .= $alphabets[$index];
			}
			
			$subject = "Password reset link";
			$message = "Password request reset link sent. Please visit localhost/htdocs/reset.php" . $token;
			$headers = "From: no reply" . "\r\n" .
			"CC: sogood@gmail.com";
			
			file_put_contents("db/token/" .$email . ".json", json_encode(["token"=>$token]));
			$try = mail($email,$subject,$message,$headers);
			
			
			if($try){
				$_SESSION["message"] = "Password reset has been sent to " . $email;
				header("Location: login.php");
			}else{
				$_SESSION["error"] = "Something went wrong. Try again! " . $email;
				header("Location: forgot.php");
			}
			die();
		}
	}
	$_SESSION["error"] = "Wrong email " . $email;
	header("Location: forgot.php");
}
?>