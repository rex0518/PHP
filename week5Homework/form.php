<?php
session_start();
?>

<html>
    <head>
        <title>form</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION["check"])){
                echo "Welome!<br>";
                echo "<a href='logout.php'>Logout</a>";

                echo "<form action='info.php' method='GET'>";
                echo "Please input your name:<input type='text' name='uName'><br>";
                echo "Please input your password:<input type='password' name='uPwd'><br>";
                echo "Please input your Email:<input type ='email' name='uEmail'><br>";
                echo "Please select your gender:";
                echo "<select name='uGender'>";
                echo "<option value='male'>male</option>";
                echo "<option value='female'>female</option>";
                echo "</select><br>";
                echo "Please input your interests:";
                echo "<textarea cols='30' rows='5' name='uInterests'>";
                echo "</textarea><br>";
                echo "Please Introduce yourself:";
                echo "<textarea cols='30' rows='5' name='uIntroduce'>";
                echo "</textarea><br>";
                echo "<input type='submit'><input type='reset'>";
                echo "</form>";
            }
        ?>
    </body>
</html>