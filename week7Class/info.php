<h1>Please login to use system</h1>

<?php
    if(isset($_COOKIE["userName"])){
        echo "Welcome back," . $_COOKIE["userName"];
    }
?>

<form action = "loginCheck.php" method = "POST">
    Please enter your username: <input type = "text" name = "userName"><br>
    Please enter your password: <input type = "password" name = "userPwd"><br>
    <input type="submit">
</form>

<?php
    echo "Time now: ";
    echo date("Y-m-d");
?>

