<?php

$string_1 = "Yes na!";
$string_2 = "No na!";

$concat_string = $string_1 . $string_2;

?>

<?php 
	include("lib/header.php");
	require("lib/header.php");
	include_once("lib/header.php");
?>

<?php 
	include("lib/footer.php");
?>

arrays
$array_example = [];
$array_example1 = ["red", 3, "apple".true];
print $array_example1[1];
print $array_example1[count($array_example1) -1];

$input = array();
$input[0] = "";
$input[1] = "";
$input[2] = "";
print $input;



<?php

print_r($_POST);

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$designation = $_POST["designation"];
$department = $_POST["department"];

$errorArray = [];

if($first_name == "") {
	$errorArray = "First Name cannot be blank"; 
}

if($last_name == "") {
	$errorArray = "Last Name cannot be blank"; 
}

if($email == "") {
	$errorArray = "email cannot be blank"; 
}

if($password == "") {
	$errorArray = "password cannot be blank"; 
}

if($gender == "") {
	$errorArray = "gender cannot be blank"; 
}

if($designation == "") {
	$errorArray = "choose your designation"; 
}

if($department == "") {
	$errorArray = "choose your department"; 
}

print_r($errorArray);

?>