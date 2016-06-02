<?php

session_start();
require('db.php');

$first_name = $_POST['first'];
$last_name = $_POST['last'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    
     move_uploaded_file($file_tmp, "/home/ys527/public_html/TheClik/img/$username.jpeg");
}

$enterLoginInfo = "INSERT INTO login_info (user_name, password) VALUES('$username', '$password')";
$db->query($enterLoginInfo);

$enterPersonalInfo = "INSERT INTO personal_information (user_name, first_name, last_name, dob, gender, email, img_type) 
                    VALUES( '$username','$first_name', '$last_name', '$dob', '$gender', '$email', '$file_type')";
$db->query($enterPersonalInfo);

$_SESSION['username'] = $username;






header("Location: ../view/quiz.html");



