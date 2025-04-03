<?php

if(isset($_COOKIE["userName"])){
    echo "Welcome back, ".$_COOKIE["userName"];
}

?>
<h1>Please Login to use the system</h1>
<form action="logincheck.php" method="post">
Please input your username: <input type="text" name="userName"><br>
Please input your password: <input type="password" name="userPwd"><br>
<input type="submit"><br>

<?php
date_default_timezone_set("Asia/Taipei");
echo time();
echo "<br>";
echo "Time now:";
echo date("Y-m-d H:i:s");
//header("Refresh:1");
?>

</form>