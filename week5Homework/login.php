<html>
    <head>
        <title>login page</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE["userName"])){
                echo "Welcome back,".$_COOKIE["userName"];     
            }
        ?>
        <h1>Please login to use system</h1>
        <form action="loginCheck.php" method="post">
            Please enter your userName: <input type="text" name="userName"><br>
            Please enter your password: <input type="password" name="userPwd"><br>
            <input type="submit"><br>
        </form>
        <button>register</button>
    </body>
</html>