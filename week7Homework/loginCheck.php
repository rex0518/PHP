<?php
session_start(); // 啟動 session

// 取得表單資料
$userName = $_POST["userName"];
$userPwd = $_POST["userPwd"];

// 資料庫連線
$link = mysqli_connect('localhost', 'root', '', 'test');
mysqli_set_charset($link, 'utf8');

// 查詢帳密是否正確
$sql = "SELECT * FROM user WHERE username = '$userName' AND password = '$userPwd'";
$result = mysqli_query($link, $sql);

// 判斷是否登入成功
if (mysqli_num_rows($result) > 0) {
    // 登入成功
    $_SESSION["check"] = 1;

    // 記住使用者（設定 cookie，有效時間 60 秒）
    setcookie("userName", $userName, time() + 60);

    echo "登入成功，將為您跳轉...";
    header("Refresh:2;url=form.php");
} else {
    // 登入失敗
    echo "登入失敗，3 秒後回登入頁";
    header("Refresh:3;url=login.php");
}
?>
