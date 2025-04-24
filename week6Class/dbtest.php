<?php

    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'school'
    );

    // if (!mysqli_select_db($link,'school')) {
    //     die("無法開啟資料庫!<br/>");
    // }else{
    //     echo "料庫開啟成功!<br/>";
    // }

        $sql = "SELECT * FROM info";
        if($result = mysqli_query($link, $sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["no"].$row["name"]."<BR/>";
            }
        }
        
?>
