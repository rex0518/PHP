<?php
    session_start();
?>

<heml>
    <head>
    </head>
    <body>
        <h1>Login Result</h1>
        <?php
            $defaultName="REX";
            $defalutPwd="123456";
            $userName=$_POST["userName"];
            $userPwd=$_POST["userPwd"];

            if($defaultName == $userName && $defalutPwd == $userPwd){
                echo "Login success";
                $_SESSION["check"] = 1;
                $cookiedate = strtotime("+10 seconds",time());
                setcookie("userName", $defaultName,$cookiedate);
                header("Location:form.php");
            }else{
                echo "Login failed, will send you back to login again";
                header("Refresh:3;url='login.php'");
            }
        ?>
    </body>
</heml>