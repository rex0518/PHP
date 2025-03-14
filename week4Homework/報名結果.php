<html>

<head>

</head>

<body bgcolor="#D9B300" text="#ffffff">
<center><font size = 7><b>!報名成功!</b></font></center><br>
    <center><?php
    $name = $_POST["name"];
    $grade = $_POST["grade"];
    $phoneNumber = $_POST["phoneNumber"];

    echo "你的姓名是: " . $name . "<br>";
    echo "你的年級是: " . $grade . "<br>";
    echo "你的電話號碼是: " . $phoneNumber . "<br>";
    ?></center>
</body>

</html>