<?php
    session_start


<?php
    $uName = $_POST["uName"];
    $uPassword = $_POST["uPassword"];
    $bday = $_POST["bday"];
    $usremail = $_POST["usremail"];
    $uGender = $_POST["uGender"];

    echo "Your name is: " . $uName . "<br>";
    echo "Your password is: " . $uPassword . "<br>";
    echo "Your birthday is: " . $bday . "<br>";
    echo "Your E-mail is: " . $usremail . "<br>";
    echo "Your gender is: " . $uGender;
?>
