<?php

//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$question01 = ["80", "22", "20", "21"];
$question02 = ["PHP", "Python", "JAVA", "HTML"];
$question03 = ["join", "select", "insert", "update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer01 = "80";
$answer02 = "HTML";
$answer03 = "select";

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <p class="center-white mt50">お疲れ様です<?php echo $name ?>さん</p>
    
    <!--フォームの作成 通信はPOST通信で-->
    <form class="center-white mt50" action="answer.php" method="post">
    
      <h2>①ネットワークのポート番号は何番？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php
      foreach($question01 as $value) {
        echo '<input type="radio" name="your_answer01" value="' . $value . '">' . $value;
      }
      ?>
      
      <h2>②Webページを作成するための言語は？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php
      foreach($question02 as $value) {
        echo '<input type="radio" name="your_answer02" value="' . $value . '">' . $value;
      }
      ?>
      
      <h2>③MySQLで情報を取得するためのコマンドは？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php
      foreach($question03 as $value) {
        echo '<input type="radio" name="your_answer03" value="' . $value . '">' . $value;
      }
      ?>
      
      <br>
      <!--問題の正解の変数と名前の変数を[answer.php]に送る-->

      <!-- 正解の変数 -->
      <input type="hidden" name="answer01" value="<?php echo $answer01 ?>">
      <input type="hidden" name="answer02" value="<?php echo $answer02 ?>">
      <input type="hidden" name="answer03" value="<?php echo $answer03 ?>">
      
      <!-- 名前の変数 -->
      <input type="hidden" name="name" value="<?php echo $name ?>">
      
      <input type="submit" value="回答する">

    </form>

</body>
</html>