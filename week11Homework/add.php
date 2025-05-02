<html>
<head>
    <meta charset="utf-8">
</head>


<?php

$name=$_POST['name'];
$email=$_POST['email'];
$FileName = $_FILES["file"]["name"];


if ( copy($_FILES["file"]["tmp_name"],$FileName)){
    $link = mysqli_connect( 
        'localhost', 
        'root',     
        '', 
        'Email');  
    mysqli_set_charset($link, 'utf8');
    
    $sql = "INSERT INTO user (name, email, photo) VALUES ('$name','$email','$FileName')";
    if(mysqli_query($link, $sql)){
        session_start(); 
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["FileName"]=$FileName;
        header("Location:send.php");
    }
}else{ 
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php'");
}
?>

  
</html>