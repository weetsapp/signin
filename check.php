<?php


include '../config.php';

$username = $_POST['username'];
$pasword = $_POST['pasword'];


    $u = "SELECT * FROM `signin` WHERE `username` = '$username' AND `pasword` = '$pasword'";
    
    $u1 = mysqli_query($con, $u);
    $u2 = mysqli_num_rows($u1);
    if($u2>0){
       while ($info = mysqli_fetch_assoc($u1)){
            $firstname = $info['firstname'];
            echo $firstname;
        }

    }
        else{
            echo "incorrect username or password";
        }
    
