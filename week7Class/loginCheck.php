<?php
    session_start();
?>

<?php
    //$defaultName = "nuk";
    //$defaultPwd = "123456";

    $userName = $_POST["userName"];
    $userPwd = $_POST["userPwd"];

    echo $userName . "<br>";
    echo $userPwd . "<br>";

    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'school'
    );

    $sql = "SELECT * FROM user WHERE userName = '".$userName."' AND password ='".$userPwd."'";

    $result = mysqli_query($link, $sql);
    $record = mysqli_num_rows($result);

    if($record > 0){
        echo "login success";
        echo "<br>";
        $_SESSION["check"] = 1;
        $cookiedate = strtotime("+10 seconds",time());
        header("Location:form.php");
    }else{
        echo "login failed,will send you back to login page";
        header("Refresh:5;url='login.php'");
    }
?>
