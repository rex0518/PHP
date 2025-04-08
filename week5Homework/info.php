<?php
session_start();
if (isset($_SESSION["check"])) {
    $uName = $_GET["uName"];
    $uPwd = $_GET["uPwd"];
    $uEmail = $_GET["uEmail"];
    $uGender = $_GET["uGender"];
    $uInterests = isset($_GET["uInterests"]) ? $_GET["uInterests"] : "";
    $uIntroduce = isset($_GET["uIntroduce"]) ? $_GET["uIntroduce"] : "";

    echo "Name: " . htmlentities($uName) . "<br>";
    echo "Email: " . htmlentities($uEmail) . "<br>";
    echo "Gender: " . htmlentities($uGender) . "<br>";
    
    echo "Interests: ";
    // 如果興趣是空的，就顯示 "None"，否則顯示興趣內容
    if (empty($uInterests)) {
        echo "None";
    } else {
        echo nl2br(htmlentities($uInterests));  // 使用 nl2br 保留換行
    }
    
    echo "<br>";
    echo "Your introduction: " . nl2br(htmlentities($uIntroduce)) . "<br>";
} else {
    echo "Illegal user!";
    header("Refresh:2; url=login.php");
}
?>
