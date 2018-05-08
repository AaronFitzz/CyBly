<?php

/*
* @author Aaron Fitzgerald, x14715335
*/

//Start or resume session, used for cookie data
session_start();

//Connect to database
$con = mysqli_connect("localhost","root","","cybly");

//If can't connect to db, return error
if (mysqli_connect_errno()){
    echo "Connection to the database was not able to be established: " . mysqli_connect_error();
}

//Extract values from html form 'name' tags
$emailuser = $_GET['emailuser'];
$password = $_GET['password'];

//Select user string
$sel_user = "SELECT * FROM users WHERE email = '$emailuser' OR username = '$emailuser'";

//Select user query
$run_user = mysqli_query($con, $sel_user);

//Store number of rows from query
$check_pass = mysqli_num_rows($run_user);

//Run selection query to check password using password_verify method
if($check_pass>0){
    $retrpass = "select * from users where email='$emailuser' OR username = '$emailuser'";
    $querypass = mysqli_query($con, $retrpass);
    while($rspass = mysqli_fetch_assoc($querypass)){
        $UserPass= $rspass['password'];
        $UserID= $rspass['username'];
        $QTaken = $rspass['questionnairetaken'];
        $_SESSION["mail"] = $UserID;
        $_SESSION["questaken"] = $QTaken;
    }

    if (password_verify($password, $UserPass)) {
        echo "<script>window.open('maincontent.php','_self')</script>";
    } else {
        echo "<script>alert('You entered the wrong password')</script>";
	    echo "<script>window.open('index.php','_self')</script>";
    }
}

//Blank email/password, retry
if($emailuser == '') {
    echo "<script>alert('Please enter email/username and try again')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}
//Blank password, retry
else if($password == '') {
    echo "<script>alert('Please enter a password')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}
//Email/password doesn't match account
else{  
    echo "<script>alert('Email or password is not correct, try again!')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}
?>