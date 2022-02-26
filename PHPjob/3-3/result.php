<?php

// 入力された数字
$input_number = $_POST['input_number'];

// 入力された数字の長さ
$number_length = strlen($input_number);

// 0～入力された数字の長さ、でランダムに数字を取り出す
$random_number = mt_rand(0, $number_length - 1);

// 入力された数字の中から、ランダム番目の数字を取り出す
$fortune_number = substr($input_number, $random_number, 1);

// ０：凶、１〜３：小吉、４〜６、中吉、７〜８：吉、９：大吉、に当てはめる
if($fortune_number === 0) {
  $fortune = "凶";
} else if($fortune_number >= 1 && $fortune_number <= 3) {
  $fortune = "小吉";
} else if($fortune_number >= 4 && $fortune_number <= 6) {
  $fortune = "中吉";
} else if($fortune_number >= 7 && $fortune_number <= 8) {
  $fortune = "吉";
} else {
  $fortune = "大吉";
}

// 今日の日付
$date = date("Y/m/d");


echo $date . "の運勢は";
echo "<br>";
echo "選ばれた数字は" . $fortune_number;
echo "<br>";
echo $fortune;