<?php
require('../model/profile_page.php');
require ('navigator.php');

?>


    <style>


        #profile {


            margin:auto;
            margin-top:120px;
            height:250px;
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

        #profile table tr td.image { background-image: url("../img/profile.jpg"); }
        #profile table tr td.button { background-color:#34495e; border:none; }
        img { height:200px; width: 300px; }
       
    </style>

    
    <div class="login">
    <h1>My Profile</h1>
    </div>
    
    <div id="profile">
        <table>		
            <tr><td class="image"><img src='<?php echo $img ?>'></td></tr>
            <tr><td><?php echo $name ?></td></tr>
            <tr><td>USER ID : <?php echo $userid ?></td></tr>
            <tr><td>EMAIL : <?php echo $email ?></td></tr>
            <tr><td>GENDER : <?php echo $gender ?></td></tr>
            <tr><td>DATE OF BIRTH : <?php echo $dob ?></td></tr>

        </table>
    </div>
    <br>
    <br>
    <br>

<?php
require ('footer.html');
