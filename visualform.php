<?php
  
//Start or resume session, used for cookie data
session_start();

//Connect to the database
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$dbusername = $url["user"];
$dbpassword = $url["pass"];
$db = substr($url["path"], 1);
$connection = new mysqli($server, $dbusername, $dbpassword, $db);
	
//Extract values from html form 'name' tags
$q1ans = $_POST['q1'];
$q2ans = $_POST['q2'];
$q3ans = $_POST['q3'];

//Validate answers
if($q1ans==''||$q1ans==null){
	echo "<script>alert('Select an answer for question 1')</script>";
	echo "<script>window.open('maincontent.php','_self')</script>";
	exit();
} else if($q2ans==''||$q2ans==null){
	echo "<script>alert('Select an answer for question 2')</script>";
	echo "<script>window.open('maincontent.php','_self')</script>";
	exit();
}else if($q2ans==''||$q2ans==null){
	echo "<script>alert('Select an answer for question 3')</script>";
	echo "<script>window.open('maincontent.php','_self')</script>";
	exit();
}

//acquire usernmae from session
$username = $_SESSION['mail'];

//Update user to verify questionnaire taken
$update_string = "UPDATE users SET questionnairetaken = 1 WHERE username = '$username'";

//insert answers into visualdata table
$insert_string = "insert into visualdata (monthbully,cbprevelant,moreresource) values ('$q1ans','$q2ans','$q3ans')";

//Open main content page if validated
if($connection->query($insert_string)){
    if($connection->query($update_string)){
        $_SESSION["questaken"] = 1;
	echo "<script>window.open('maincontent.php','_self')</script>";
}
}


?>