<?php
    // 測試資料庫連線
    $link = mysqli_connect('localhost', 'root', '', 'school');

    if (!$link) {
        die("資料庫連線失敗：" . mysqli_connect_error());
    }
    echo "資料庫連線成功！<br>";

    // 測試查詢語句
    $sql = "SELECT * FROM user";
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "查詢成功，共有 " . mysqli_num_rows($result) . " 筆資料。<br>";
        
        // 印出每一筆資料
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Username: " . htmlspecialchars($row["username"]) . " - Password: " . htmlspecialchars($row["password"]) . "<br>";
        }
    } else {
        echo "查詢失敗：" . mysqli_error($link);
    }

    mysqli_close($link);
?>
