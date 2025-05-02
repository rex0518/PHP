<?php
session_start();
if (!isset($_SESSION["check"])) {
    echo "非法使用者，請先登入！";
    header("Refresh:2;url='login.php'");
    exit();
}

// 資料庫連線
$link = mysqli_connect('localhost', 'root', '', 'school');
mysqli_set_charset($link, 'utf8');

// 處理表單提交（新增 / 修改 / 刪除）
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];
    $sSno = $_POST["uSno"];
    $sName = $_POST["uName"];
    $sAddress = $_POST["uAddress"];
    $sBday = $_POST["uBirth"];
    $sUserName = $_POST["uUserName"];
    $sPwd = $_POST["uPwd"];

    if ($action == "add") {
        $sql = "INSERT INTO student (sno, name, address, birthday, username, password) 
                VALUES ('$sSno', '$sName', '$sAddress', '$sBday', '$sUserName', '$sPwd')";
    } elseif ($action == "update") {
        $sql = "UPDATE student 
                SET name='$sName', address='$sAddress', birthday='$sBday', username='$sUserName', password='$sPwd' 
                WHERE sno='$sSno'";
    } elseif ($action == "delete") {
        $sql = "DELETE FROM student WHERE sno='$sSno'";
    }

    if (!mysqli_query($link, $sql)) {
        echo "操作失敗：" . mysqli_error($link);
    }
}
?>

<!-- 新增資料表單 -->
<h2>新增學生資料</h2>
<form method="post">
    <input type="hidden" name="action" value="add">
    學號：<input type="text" name="uSno" required><br>
    姓名：<input type="text" name="uName" required><br>
    地址：<input type="text" name="uAddress"><br>
    生日：<input type="date" name="uBirth"><br>
    帳號：<input type="text" name="uUserName" required><br>
    密碼：<input type="password" name="uPwd" required><br>
    <input type="submit" value="新增">
</form>

<hr>

<!-- 顯示所有學生資料 -->
<h2>學生資料清單</h2>
<table border="1">
    <tr>
        <th>學號</th><th>姓名</th><th>地址</th><th>生日</th><th>帳號</th><th>密碼</th><th>操作</th>
    </tr>
    <?php
    $result = mysqli_query($link, "SELECT * FROM student");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<form method='post'>";
        echo "<td><input type='text' name='uSno' value='{$row['sno']}' readonly></td>";
        echo "<td><input type='text' name='uName' value='{$row['name']}'></td>";
        echo "<td><input type='text' name='uAddress' value='{$row['address']}'></td>";
        echo "<td><input type='date' name='uBirth' value='{$row['birthday']}'></td>";
        echo "<td><input type='text' name='uUserName' value='{$row['username']}'></td>";
        echo "<td><input type='text' name='uPwd' value='{$row['password']}'></td>";
        echo "<td>
                <button type='submit' name='action' value='update'>修改</button>
                <button type='submit' name='action' value='delete' onclick=\"return confirm('確定要刪除嗎？');\">刪除</button>
              </td>";
        echo "</form>";
        echo "</tr>";
    }
    mysqli_close($link);
    ?>
</table>
