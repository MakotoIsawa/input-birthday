<?php

$birthday = $_POST['birthday'];

$youbi = date("l", strtotime($birthday));

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <title>PHPの練習</title>
</head>
<body>
    <h1>PHPの練習</h1>
    <p>あなたの誕生日は<?php echo htmlspecialchars($youbi); ?>曜日です。</p>
</body>
</html>