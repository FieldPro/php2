<?php session_start();

$errorCount = 0;

if(!$_SESSION["loggedIn"]){
	$token = $_POST["token"] != "" ? $_POST["token"]: $errorCount++;
	$_SESSION["token"] = $token;
}
$email = $_POST["email"] != "" ? $_POST["email"]: $errorCount++;
$password = $_POST["password"] != "" ? $_POST["password"]: $errorCount++;


$_SESSION["email"] = $email;

if($errorCount > 0) {
	$session_error = "You have " . $errorCount . " error";
	if(errorCount > 1) {
		$session_error .= "s";
	}
	
		$session_error .= " in your submission";
		$_SESSION["error"] = $session_error;
		header("Location: reset.php");
}
else {
	
	$allUserToken = scandir("db/token/");
	$countAllUserToken = count($allUserToken);
	
	for ($counter = 0; $counter < $countAllUsersToken; $counter++) {
		$currentTokenFile = $allUsersToken[$counter];
		
		if($currentTokenFile == $email . ".json"){
			$tokenContent = file_get_contents("db/token/".$currentTokenFile);
			
			$tokenObject = json_decode($tokenContent);
			$tokenFromDB = $tokenObject->token;
			
			
			if($_SESSION["loggedIn"]){
				$checkToken = true;
			}else{
				$checkToken = $tokenFromDB == $token;
			}
				
			if($checkToken){
				$allUsers = scandir("db/users/");
				$countAllUsers = count($allUsers);
				
				for ($counter = 0; $counter < $countAllUsers; $counter++) {
					$currentUser = $allUsers[$counter];
						
				if($currentUser == $email . ".json"){
					$userString = file_get_contents("db/users/" .$currentUser);
					$userObject = json_decode($userString);
					
					$userObject->password = password_hash($password,PASSWORD_DEFAULT);
					
					unlink("db/users/".$currentUser);
					
					file_put_contents("db/users/" . $email . ".json", json_encode($userObject));
					
						$_SESSION["message"] = "Password successful, you can login now";
						
						$subject = "Password reset was successful";
						$message = "Account has been updated" . $token;
						$headers = "From: no reply" . "\r\n" .
						"CC: sogood@gmail.com";
						
						$try = mail($email,$subject,$message,$headers);
						header("Location: login.php");
						die();			
					}
				}
			}
		}
	}
	$_SESSION["error"] = "Password Reset Failed, invalid token or email ";
	header("Location: login.php");
}
?>