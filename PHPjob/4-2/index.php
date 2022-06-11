<?php
// 作成したpdo.phpを読み込む
require_once('getData.php');

// getDataクラスをインスタンス化して取得
$get_data = new getData();

// ユーザーデータ
$user_data = $get_data->getUserData();
$user_name = $user_data['last_name'] . $user_data['first_name']; // ユーザー名
$login_time = $user_data['last_login']; // ログイン日時

// 記事データ
$post_data = $get_data->getPostData();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">

    <!-- header -->
    <header class="header">
      <div class="header__logo">
        <img src="images/logo.png" alt="Y&I Group Inc.">
      </div>
      <div class="header__texts">
        <p class="header__name">ようこそ <?php echo $user_name ?> さん</p>
        <p class="header__login">最終ログイン日：<?php echo $login_time ?></p>
      </div>
    </header>

    <!-- main -->
    <main>
      <table class="table">
        <tr>
          <th>記事ID</th>
          <th>タイトル</th>
          <th>カテゴリ</th>
          <th>本文</th>
          <th>投稿日</th>
        </tr>

        <?php while($row = $post_data->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo htmlspecialchars($row['title']) ?></td>
          <td>
            <?php 
            if($row['category_no'] === 1) {
              echo '食事';
            } elseif($row['category_no'] === 2) {
              echo '旅行';
            } else {
              echo 'その他';
            }
            ?>
          </td>
          <td><?php echo htmlspecialchars($row['comment']) ?></td>
          <td><?php echo $row['created'] ?></td>
        </tr>
        <?php }; ?>
        
      </table>
    </main>

    <!-- footer -->
    <footer class="footer">
      <p>Y&I group.inc</p>
    </footer>

  </div>
  
</body>
</html>