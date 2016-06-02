<?php
session_start();
require('db.php');

for($i=1; $i<=10; $i++){
    if(isset($_POST[$i])){
        $question_number = $i;
        $response = $_POST[$i];
        $username = $_SESSION['username'];
        $userResponse = "INSERT INTO responses (question_number, user_name, response) 
                    VALUES( '$question_number','$username','$response')";
        $userResponses = $db->query($userResponse);
    }
}

header("Location: ../view/profile.php");
