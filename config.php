<?php

$localhost = "localhost";
$username = "root";
$pass = "";
$dbname = "weets";

$con = mysqli_connect($localhost, $username, $pass, $dbname);
if($con){
}
else{
    echo "connection error";
}









?>