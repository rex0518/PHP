<?php
    if (isset($_COOKIE["userName"])) {
        echo "Welcome back, " . $_COOKIE["userName"] . "!<br>";
    }
?>

<h1>請登入系統</h1>
<form action="loginCheck.php" method="POST">
    使用者名稱：<input type="text" name="userName"><br>
    密碼：<input type="password" name="userPwd"><br>
    <input type="submit" value="登入">
</form>

<?php
    date_default_timezone_set("Asia/Taipei");
    echo "現在時間：" . date("Y-m-d H:i:s");
?>