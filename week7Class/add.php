<html>
    <head>
        <meta charset = 'utf-8'>
    </head>

    <?php
    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'school'
    );
    $sql = "INSERT INTO info (name, address, birthday) VALUES ('$sName', '$sAddress', '$sBday')";

    mysqli_set_charset($link, 'utf8');

    if(mysqli_query($link, $sql)){
        header("Location:test.php");
    }else{

    }
    ?>
</html>