<?php

/*
* @author Aaron Fitzgerald, x14715335
*/

//Start or resume session, used for cookie data
session_start();

//Extract values from html form 'name' tags
$userAns1 = $_POST['q1'];
$userAns2 = $_POST['q2'];
$userAns3 = $_POST['q3'];
$userAns4 = $_POST['q4'];
$userAns5 = $_POST['q5'];
$userAns6 = $_POST['q6'];
$userAns7 = $_POST['q7'];

//Real answers
$ans1 = '70';
$ans2 = 'mobile';
$ans3 = '1in10';
$ans4 = 'girls';
$ans5 = '1in10';
$ans6 = 'facebook';
$ans7 = 'unfriend';

//Score var created
$mark = 0;

//if user is right, give 1 mark
if($userAns1 == $ans1){
    $mark += 1;
}
if($userAns2 == $ans2){
    $mark += 1;
}
if($userAns3 == $ans3){
    $mark += 1;
}
if($userAns4 == $ans4){
    $mark += 1;
}
if($userAns5 == $ans5){
    $mark += 1;
}
if($userAns6 == $ans6){
    $mark += 1;
}
if($userAns7 == $ans7){
    $mark += 1;
}

//store score in session and launch main page
$_SESSION["mark"] = $mark;

echo "<script>window.open('maincontent.php','_self')</script>";
?>