<?php

session_start();
require ('navigator.php');
require ('../model/CosineSimilarity.php');
?>
<style>


        .profile {


            margin:auto;
            margin-top:120px;
            
            width:400px;




        }
        
        table { width:400px; height:250px; top: 45%;}
        
        table tr td { 

            background:#4a77d4;

            height:50px;
            font-family:Cuprum;
            font-size:25px;
            color:white;
            text-align:center;
        }

        .profile table tr td.image { background-image: url("../img/profile.jpg"); }
        .profile table tr td.button { background-color:#34495e; border:none; }
        img { height:200px; width: 300px; }
       
    </style>?>
        <?php

foreach ($temp as $t) {
    $profileInfo = "SELECT * FROM personal_information where user_name = '" . $t . "'";

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

        if ($img_type == 'image/jpg') {

            $img = "../img/" . $userid . ".jpg";
        } else if ($img_type == 'image/jpeg') {

            $img = "../img/" . $userid . ".jpeg";
        } else{

            $img = "../img/" . $userid . ".jpeg";
        }
    }
    
    include ('lobby.php');
    
}
require ('footer.html');