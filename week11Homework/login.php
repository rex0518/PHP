<html>
<head>
<meta charset="utf-8">
</head>

<form action="add.php" method="post" enctype="multipart/form-data">

Please input your name:<input type="text" name="name"><br>
Please input your email:<input type="email" name="email"><br>
Please input your photo:<input type="file" name="file">
<br>
<input type="submit">

</form>

<?php
$link = mysqli_connect( 
    'localhost',  
    'root',      
    '', 
    'Email');  

   

$sql = "SELECT * FROM user"; 

mysqli_set_charset($link, 'utf8');

if ( $result = mysqli_query($link, $sql)){
    echo "<table border='1'>";
    while( $row = mysqli_fetch_assoc($result)){  //取得查詢結果中的每一列，並以關聯陣列的方式存入 $row
        echo "<tr>";
        echo 
            "<td>".$row["no"]."</td>"
            ."<td>".$row["name"]."</td>"
            ."<td>".$row["email"]."</td>"
            ."<td>".$row["photo"]."</td>
            <br>";
        echo "</tr>";
    }
echo "</table>";


    }


    

?>
</html>