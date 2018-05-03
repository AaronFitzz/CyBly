<?php

//Start or resume session, used for cookie data
session_start();

//Connet to the database
mysql_connect("localhost","root","");
mysql_select_db("cybly");
	
//Extract values from html form 'name' tags
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
	 
//Hash password
$password = password_hash($password, PASSWORD_BCRYPT);

//Validate username
if($username==''||$username==null|strlen($username)<"2"){
	echo "<script>alert('Username must be filled out')</script>";
	exit();
}
	
//Validate password
if($password==''||$password==null||strlen($password)<"7"){
	echo "<script>alert('Password must be at least 7 characters long')</script>";
	exit();
}
	
//Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	echo "<script>alert('Invalid email format')</script>";
  	exit();
}

//Get user by email string
$check_email = "select * from users where email ='$email'";

//Run get user by email query
$run = mysql_query($check_email);

//Check number of results in query, if more than 0 than email taken
if(mysql_num_rows($run)>0){
	echo "<script>alert('The email $email is already registered to another users account, please try a different one')</script>";
	exit();
}

//Get username string
$check_username = "select * from users where username='$username'";

//Run get username query
$run = mysql_query($check_username);

//If anyone has this username, return error
if(mysql_num_rows($run)>0){
	echo "<script>alert('The username $username is already taken, please choose another one')</script>";
	exit();
}

//Session variable = username	
$_SESSION["mail"] = $username;
$query = "insert into users (username,email,password) values ('$username','$email','$password')";

//Open main content page
if(mysql_query($query)){
	echo "<script>window.open('maincontent.php','_self')</script>";
}

?>