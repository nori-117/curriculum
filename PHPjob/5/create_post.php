<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// 登録ボタンが押された場合
if (!empty($_POST)) {
    // titleとdateとstockの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未選択です。';
    }

    // 全て入力されている場合
    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        // 入力したtitleとdateとstockを格納
        $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
        $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
        $stock = $_POST['stock'];

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";

            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);

            // タイトルをバインド
            $stmt->bindParam(':title', $title);

            // 発売日をバインド
            $stmt->bindParam(':date', $date);

            // 在庫数をバインド
            $stmt->bindParam(':stock', $stock);

            // 実行
            $stmt->execute();

            // main.phpにリダイレクト
            header("Location: main.php");
            exit;

        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();

            // 終了
            die();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>本 登録画面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="l-wrapper">

        <h1>本 登録画面</h1>
        <form class="login-form" method="POST" action="">
            <input type="text" name="title" id="title" placeholder="タイトル">
            <input type="text" name="date" id="date" placeholder="発売日">
            <p>在庫数</p>
            <select name="stock" id="stock">
                <option value="">選択してください</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            <input type="submit" value="登録" id="post" name="post">
        </form>

    </div>
</body>
</html>