<?php
/*
 * This is just a template and needs to be drastically changed to work.
 * also need to develop register form, just have log in currently.
 *
 */ 
mysql_connect("localhost","root","");
mysql_select_db("cybly");

	if(isset($_POST['submit_x'])){
	
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	
	if($username==''||$username==null|strlen($username)<"2"){
	echo "<script>alert('Username must be filled out')</script>";
	exit();
	}
	
	if($password==''||$password==null||strlen($password)<"7"){
	echo "<script>alert('Password must be at least 7 characters long')</script>";
	exit();
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	echo "<script>alert('Invalid email format')</script>";
  	exit();
	}
	
	$check_email = "select * from users where user_email='$email'";
	
	$run = mysql_query($check_email);
	
	if(mysql_num_rows($run)>0){
	
	echo "<script>alert('The email $email is already registered to another users account, please try a different one')</script>";
	exit();
	}
	
	$check_username = "select * from users where username='$username'";
	
	$run = mysql_query($check_username);
	
	if(mysql_num_rows($run)>0){
	
	echo "<script>alert('The username $username is already taken, please choose another one')</script>";
	exit();
	}
	
	$_SESSION["mail"] = $username;
	$query = "insert into users (username,email,password) values ('$username','$email','$password')";
	if(mysql_query($query)){
	echo "<script>window.open('index.php','_self')</script>";
	
	}
	
}

?>