<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 驗證 Turnstile CAPTCHA
    $captcha = $_POST['cf-turnstile-response'] ?? '';

    if (!$captcha) {
        echo '<h2>請勾選驗證碼。</h2>';
        exit;
    }

    $secretKey = "0x4AAAAAABY3YsQ6CITlu1MBHAtba0yYb0A";
    $ip = $_SERVER['REMOTE_ADDR'];
    $url_path = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $captcha,
        'remoteip' => $ip
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data)
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url_path, false, $context);

    if ($result === FALSE) {
        echo "<h2>驗證失敗，無法與 Cloudflare 溝通。</h2>";
        exit;
    }

    $responseKeys = json_decode($result, true);

    if (!isset($responseKeys["success"]) || $responseKeys["success"] !== true) {
        echo '<h2>驗證失敗，可能是機器人操作。</h2>';
        exit;
    }

    // 顯示表單內容（驗證成功）
    $username = htmlspecialchars($_POST["uName"]);
    $password = htmlspecialchars($_POST["uPwd"]);

    echo "<h2>接收到的表單資料：</h2>";
    echo "使用者名稱： " . $username . "<br>";
    echo "使用者密碼： " . $password . "<br>";
} else {
    echo "請透過表單提交資料。";
}
?>
