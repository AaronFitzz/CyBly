<?php

/*
* @author Aaron Fitzgerald, x14715335
*/

//Start or resume session, used for cookie data
if(!isset($_SESSION))
    {
        session_start();
    } 

//Connect to database
//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = "us-cdbr-iron-east-04.cleardb.net";
$dbusername = "b06be7958abd62";
$dbpassword = "d2a311d6";
$db = "heroku_664869670b7b7c5";
$connection = new mysqli($server, $dbusername, $dbpassword, $db);

//If can't connect to db, return error
if (mysqli_connect_errno()){
    echo "Connection to the database was not able to be established: " . mysqli_connect_error();
}
else{

    //Select data strings
    $month_data1_string = "SELECT COUNT(monthbully) FROM visualdata WHERE monthbully = 1";
    $month_data2_string = "SELECT COUNT(monthbully) FROM visualdata WHERE monthbully = 2";
    $month_data3_string = "SELECT COUNT(monthbully) FROM visualdata WHERE monthbully = 3";

    $prevelant_data1_string = "SELECT COUNT(cbprevelant) FROM visualdata WHERE cbprevelant = 1";
    $prevelant_data2_string = "SELECT COUNT(cbprevelant) FROM visualdata WHERE cbprevelant = 2";
    $prevelant_data3_string = "SELECT COUNT(cbprevelant) FROM visualdata WHERE cbprevelant = 3";
    $prevelant_data4_string = "SELECT COUNT(cbprevelant) FROM visualdata WHERE cbprevelant = 4";

    $resource_data1_string =  "SELECT COUNT(moreresource) FROM visualdata WHERE moreresource = 1";
    $resource_data2_string =  "SELECT COUNT(moreresource) FROM visualdata WHERE moreresource = 2";

    //Select data queries
    $month_data1 = $connection->query($month_data1_string);
    $month_data2 = $connection->query($month_data2_string);
    $month_data3 = $connection->query($month_data3_string);

    //access results to be able to store to variable
    while($res = mysqli_fetch_assoc($month_data1)){
        $month_data1_res = $res['COUNT(monthbully)'];
    }
    while($res = mysqli_fetch_assoc($month_data2)){
        $month_data2_res = $res['COUNT(monthbully)'];
    }
    while($res = mysqli_fetch_assoc($month_data3)){
        $month_data3_res = $res['COUNT(monthbully)'];
    }

    $prevelant_data1 = $connection->query($prevelant_data1_string);
    $prevelant_data2 = $connection->query($prevelant_data2_string);
    $prevelant_data3 = $connection->query($prevelant_data3_string);
    $prevelant_data4 = $connection->query($prevelant_data4_string);

    while($res = mysqli_fetch_assoc($prevelant_data1)){
        $prevelant_data1_res = $res['COUNT(cbprevelant)'];
    }
    while($res = mysqli_fetch_assoc($prevelant_data2)){
        $prevelant_data2_res = $res['COUNT(cbprevelant)'];
    }
    while($res = mysqli_fetch_assoc($prevelant_data3)){
        $prevelant_data3_res = $res['COUNT(cbprevelant)'];
    }
    while($res = mysqli_fetch_assoc($prevelant_data4)){
        $prevelant_data4_res = $res['COUNT(cbprevelant)'];
    }

    $resource_data1 = $connection->query($resource_data1_string);
    $resource_data2 = $connection->query($resource_data2_string);

    while($res = mysqli_fetch_assoc($resource_data1)){
        $resource_data1_res = $res['COUNT(moreresource)'];
    }
    while($res = mysqli_fetch_assoc($resource_data2)){
        $resource_data2_res = $res['COUNT(moreresource)'];
    }

    //save in session variables for quick access
    $_SESSION['month1'] = $month_data1_res;
    $_SESSION['month2'] = $month_data2_res;
    $_SESSION['month3'] = $month_data3_res;

    $_SESSION['prevelant1'] = $prevelant_data1_res;
    $_SESSION['prevelant2'] = $prevelant_data2_res;
    $_SESSION['prevelant3'] = $prevelant_data3_res;
    $_SESSION['prevelant4'] = $prevelant_data4_res;

    $_SESSION['resource1'] = $resource_data1_res;
    $_SESSION['resource2'] = $resource_data2_res;
}
?>
