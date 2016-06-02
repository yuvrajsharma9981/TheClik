<?php
session_start();
require('db.php');

$profileInfo = "SELECT * FROM personal_information where user_name = '" . $_SESSION['username'] . "'";

$profiles = $db->query($profileInfo);
foreach ($profiles as $profile) {
    $userid = $profile['user_name'];
    $fname = $profile['first_name'];
    $lname = $profile['last_name'];
    $email = $profile['email'];
    $dob = $profile['dob'];
    $gender = $profile['gender'];
    $img_type = $profile['img_type'];
    $name = $fname . " " . $lname;
    
    if($img_type == 'image/jpg'){
    
    $img = "../img/".$userid . ".jpg";
    }else if($img_type == 'image/jpeg'){
    
    $img = "../img/".$userid . ".jpeg";
    }else{
    
    $img = "../img/".$userid . ".jpeg";
    }
}
