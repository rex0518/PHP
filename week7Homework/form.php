<?php
session_start();
?>

<html>
<head></head>
<body>
<?php
if(isset($_SESSION["check"])){
    echo "Welcome!<br>";
    echo "<a href='logout.php'>Logout</a>";

    echo "<form action='add.php' method='POST'>";
    echo "Please input your sno: <input type='text' name='uSno'><br>";
    echo "Please input your name: <input type='text' name='uName'><br>";
    echo "Please input your address: <input type='text' name='uAddress'><br>";
    echo "Please input your birthday: <input type='date' name='uBirth'><br>";
    echo "Please input your username: <input type='text' name='uUserName'><br>";
    echo "Please input your password: <input type='password' name='uPwd'><br>";
    echo "<input type='submit' value='Submit'><input type='reset'>";
    echo "</form>";
}else{
    echo "Illegal user! Please log in first.";
    header("Refresh:2;url='login.php'");
}
?>

<!-- 顯示表格（測試用） -->
<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
    </tr>
    <tr>
        <td>John</td>
        <td>25</td>
        <td>New York</td>
    </tr>
    <tr>
        <td>Alice</td>
        <td>30</td>
        <td>London</td>
    </tr>
    <tr>
        <td>Bob</td>
        <td>22</td>
        <td>Paris</td>
    </tr>
</table>

</body>
</html>
