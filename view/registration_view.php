<?php
require ('navigator.php');
?>

<div class="login">

    <h1>Register Here!</h1>
    <form action = "../model/registration.php" method="post" enctype="multipart/form-data">
        <input type="text" name="first" placeholder="First Name" required="required"></br>
        <input type="text" name="last" placeholder="Last Name" required="required"></br>
        <input type="text" name="dob" placeholder="YYYY-MM-DD" required="required"></br>
        <input type="text" name="username" placeholder="Username" required="required"></br>
        <input type="text" name="email" placeholder="Email Address" required="required"></br>
        <input type="text" name="gender" placeholder="Gender" required="required" ></br>
        <input type="password" name="password" placeholder="Password" required="required"></br>
        <input type="password" name="repassword" placeholder="Re-enter Password" required="required" ></br>

        <input type="file" name="image" required="required">
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Register!</button>
    </form>
</div>

<?php
require ('footer.html');
