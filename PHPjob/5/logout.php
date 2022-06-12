<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="l-wrapper">
            <h1>ログアウト画面</h1>
           <div class="logout-message">ログアウトしました</div>
           <a class="back-button" href="login.php">ログイン画面に戻る</a>
        </div>
    </body>
</html>