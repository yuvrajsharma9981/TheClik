<?php
require ('navigator.php');
?>

<div class="login">

    <h1>Login</h1>
    <form action = "../model/login.php" method="post">
        <input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>

<?php
require ('footer.html');
