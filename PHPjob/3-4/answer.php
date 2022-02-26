<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

// 名前の変数
$name = $_POST['name'];

// 選択した回答
$your_answer01 = $_POST['your_answer01'];
$your_answer02 = $_POST['your_answer02'];
$your_answer03 = $_POST['your_answer03'];

// 問題の答えの変数
$answer01 = $_POST['answer01'];
$answer02 = $_POST['answer02'];
$answer03 = $_POST['answer03'];


//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judge($your_answer, $answer) {
  if($your_answer === $answer) {
    echo "正解！";
  } else {
    echo "残念・・・";
  }
}


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

  <div class="center-white">

    <p><?php echo $name ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php judge($your_answer01, $answer01); ?></p>
  
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php judge($your_answer02, $answer02); ?></p>
  
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php judge($your_answer03, $answer03); ?></p>

  </div>


</body>
</html>