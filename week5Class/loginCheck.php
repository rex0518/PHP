<?php
    $defaultName = "nuk";
    $defaultPwd = "123456";

    $userName = $_POST["userName"];
    $userPwd = $_POST["userPwd"];

    echo $userName . "<br>";
    echo $userPwd . "<br>";

    if($defaultName == $userName && $defaultPwd == $userPwd){
        echo "login success";
        //header("Location;form.php");
    }else{
        echo "login failed,will send you back to login page";
        header("Refresh:5;url='login.php'");
    }
?>