<?php


$fruit = ["りんご" => 100, "みかん" => 50, "桃" => 300];
$number = [3, 3, 10];


// 単価を計算する関数
function calculation($price, $num) {
  $total = $price * $num;
  return $total;
}


foreach($fruit as $key => $value) {

  if($key === "りんご") {
    $total = calculation($value, $number[0]);
  } else if ($key === "みかん") {
    $total = calculation($value, $number[1]);
  } else {
    $total = calculation($value, $number[2]);
  } 

  echo  $key . "は" . $total . "円です。";
  echo "<br>";
}


?>