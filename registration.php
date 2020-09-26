<?php

$urlResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcKVlcUAAAAAEsxLFe2ucgwJWlupl_4JTDL0pp_&response=".$_POST["g-recaptcha-response"]."&remoteip=".$_SERVER['REMOTE_ADDR']);
$result = json_decode($urlResponse);

if($result->success == false)
{
//error handling
echo "<script>alert('Please complete the Captcha')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
else
{
//successful

//Start or resume session, used for cookie data
session_start();

//Connet to the database
//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = "us-cdbr-iron-east-04.cleardb.net";
$dbusername = "b06be7958abd62";
$dbpassword = "d2a311d6";
$db = "heroku_664869670b7b7c5";
$connection = new mysqli($server, $dbusername, $dbpassword, $db);

//Extract values from html form 'name' tags
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confPassword = $_POST['confirmPassword'];

//Validate username
if($username==''||$username==null|strlen($username)<"3"){
	echo "<script>alert('Username must longer than 3 characters')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	exit();
}

//Validate password
if($password==''||$password==null||strlen($password)<"7"){
	echo "<script>alert('Password must be at least 7 characters long')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	exit();
}

//Do passwords match
if($password != $confPassword){
	echo "<script>alert('Passwords dont match, try again!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	exit();
}

//Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	echo "<script>alert('Please enter a valid email')</script>";
  	echo "<script>window.open('index.php','_self')</script>";
  	exit();
}

//Hash and encrypt password
$password = password_hash($password, PASSWORD_BCRYPT);

//Get user by email string
$check_email = "select * from users where email ='$email'";

//Run get user by email query
$run = $connection->query($check_email);

//Check number of results in query, if more than 0 than email taken
if(mysqli_num_rows($run)>0){
	echo "<script>alert('The email $email is already registered to another users account, please try a different one')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	exit();
}

//Get username string
$check_username = "select * from users where username='$username'";

//Run get username query
$run = $connection->query($check_username);

//If anyone has this username, return error
if(mysqli_num_rows($run)>0){
	echo "<script>alert('The username $username is already taken, please choose another one')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	exit();
}

//Session variable = username
$_SESSION["mail"] = $username;

//Session variable = questionnaire not taken
$_SESSION["questaken"] = 0;

//Insert user to db
$query = "insert into users (username,email,password) values ('$username','$email','$password')";

//Open main content page if success
if($connection->query($query)){
	echo "<script>window.open('maincontent.php','_self')</script>";
}
}

?>
