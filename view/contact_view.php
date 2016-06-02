<?php
require ('navigator.php');
?>
<div class = "login about">

    <h1>Contact Us!</h1>
    <form action = "../model/contact.php" method = "post">
        <input type = "text" name = "name" placeholder = "What Does Your Mom Call You?" required = "required"></br>
        <input type = "text" name = "email" placeholder = "Where Can We Email You Back?" required = "required"></br>
        <input type = "text" name = "problem" placeholder = "What's On Your Mind?" required = "required" size = '300'></br>
        </br>
        <button type = "submit" name = "submit" class = "btn btn-primary btn-block btn-large">Contact Us!</button>
    </form>
</div>
<?php
require ('footer.html');
