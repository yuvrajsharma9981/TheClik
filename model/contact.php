<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = "From: $name<$email>\r\nReturn-path: $email";
$subject = "The Clik - Message Recieved";
mail("yuvrajsharma9981@gmail.com", $subject, $message, $from);
header("Location: contact.php");



