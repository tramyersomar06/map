<?php 
    error_reporting(0);
    require('includes/db.php');
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $code = rand(100,999);
        $query = "SELECT * FROM `users` WHERE email = '$email'";
        $result = mysql_query($query) or die(mysql_error());
        $count = mysql_num_rows($result);

        if ($count == 1) {
            mysql_query("update users set activation_code='$code' where email='$email'");
            //That Mail code should be put here    <----------------------
        } else {
        }
        echo " Something Here for a response";
    }
?>

<form action="" method="post">
    Enter you email ID: <input type="text" name="email">
    <input type="submit" name="submit" value="Send">
</form>