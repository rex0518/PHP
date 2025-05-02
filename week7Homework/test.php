<?php
// 連接資料庫
$link = mysqli_connect('localhost', 'root', '', 'school');
mysqli_set_charset($link, 'utf8');

// 查詢資料庫中的資料
$sql = "SELECT * FROM student";
$result = mysqli_query($link, $sql);

// 檢查是否有資料
if (mysqli_num_rows($result) > 0) {
    // 顯示資料
    echo "<table border='1'>";
    echo "<tr><th>sno</th><th>Name</th><th>Address</th><th>Birthday</th><th>username</th><th>password</th></tr>";
    
    // 逐行顯示資料
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["sno"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["address"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["birthday"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["username"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["password"]) . "</td>";
        echo "</tr>";
    }
    
} else {
    echo "沒有資料！";
}

mysqli_close($link);
?>
