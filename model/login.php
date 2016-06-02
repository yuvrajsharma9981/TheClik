<?php
error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    
session_start();
require('db.php');

$username = $_POST['username'];
$password = $_POST['password'];


$_SESSION['username'] = $username;

$loginCheck = "select user_name, password from login_info";

$login_infos = $db->query($loginCheck);
foreach ($login_infos as $login_info) {
    
    $uname = $login_info['user_name'];
    $upass = $login_info['password'];
    
    if($username == $uname && $password == $upass){
        header("Location: ../view/profile.php");
    }
}




