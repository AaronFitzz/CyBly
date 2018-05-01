<?php
session_start();
// establishing the MySQLi connection

/*
* @author Aaron Fitzgerald, x14715335
*/
$con = mysqli_connect("localhost","root","","cybly");
/*
* @reference http://www.onlinetuting.com/create-login-script-in-php/
*/
if (mysqli_connect_errno()){
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
}

	 $emailuser = $_GET['emailuser'];
	 $password = $_GET['password'];
$sel_user = "SELECT * FROM users WHERE email = '$emailuser' OR username = '$emailuser'";

$run_user = mysqli_query($con, $sel_user);

$check_pass = mysqli_num_rows($run_user);

if($check_pass>0){
    $retrpass = "select * from users where email='$emailuser' OR username = '$emailuser'";
    $querypass = mysqli_query($con, $retrpass);
    while($rspass = mysqli_fetch_assoc($querypass)){
        $UserPass= $rspass['password'];
        $UserID= $rspass['username'];
        $_SESSION["mail"] = $UserID;
    }
    $currentPassword = '$2a$15$Ku2hb./9aA71tPo/E015h.LsNjXrZe8pyRwXOCpSnGb0nPZuxeZP2';
    $checkPassword = 'passwords';

    if (password_verify($password, $UserPass)) {
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo 'You entered the wrong password';
    }
}

/*
* @author Aaron Fitzgerald, x14715335
*/

if($emailuser == '') {

    echo "<script>alert('Please enter email/username and try again')</script>";

}
else if($pass == '') {

    echo "<script>alert('Please enter a password')</script>";

}
else{  

    echo "<script>alert('Email or password is not correct, try again!')</script>";

}



?>