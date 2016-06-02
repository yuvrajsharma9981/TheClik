<?php
require('header.html');
session_start();

if (isset($_SESSION['username'])) {
    ?>
    <div class="wrapper">
        <div class="navigator">
            <button class="styled-button-5"><a href="about_view.php"> ABOUT </a></button>
            <button class="styled-button-5"><a href="match.php"> FIND YOUR CLIK! </a></button>
            <button class="styled-button-5"><a href="profile.php"> MY PROFILE </a></button>
            <button class="styled-button-5"><a href="contact_view.php"> CONTACT US </a></button>

        </div>
    </div>
    <?php
} else {
    ?>
    <div class="wrapper">
        <div class="navigator">
            <button class="styled-button-5"><a href="about_view.php"> ABOUT </a></button>
            <button class="styled-button-5"><a href="login_view.php"> LOGIN </a></button>
            <button class="styled-button-5"><a href="registration_view.php"> REGISTER </a></button>
            <button class="styled-button-5"><a href="contact_view.php"> CONTACT US </a></button>

        </div>
    </div>
    <?php
}

