<?php
echo 'hello php!';


// 代入
$a = 3;
$b = 7;
echo $a + $b;


// 配列
$array_month = ["１月","２月","３月","４月","５月"
,"６月","７月","８月","９月","１０月","１１月","１２月"];
echo $array_month [7];


// 連結
$hello = "Hello, ";
$name = "Mion";
$world = "'s World!";
echo $hello . $name . $world;


//複合演算　連結
$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;


//連想配列 かっこの形、ダブルクォーテーション、変数は数字で始まる名前はNG
// , =>
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];



//PHP/Laravel 03 
//プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう


// else if
$height = 230;

if ($height < 150) {
  echo "150cm　未満の方はご乗車できません。";
} else if ($height >= 200) {
  echo "200cm　以上の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}


//switch
$weekday = "土曜";
switch ($weekday) {
  case "月曜";
  case "木曜";
    echo "可燃ごみの日です";
    break;
  case "水曜";
    echo "資源ごみの日です";
    break;
  default:
    echo "回収はありません";
    echo "\n";
    break;
}



//課題2
  echo "【課題】：PHP/Laravel 03";
  echo "\n";

//1
$name2 = "Mion";

switch ($name2) {
  case "Mion Nara";
     echo "私はあなたの名前です";
   break;
   default:
     echo "あなたの名前ではありません";
     echo "\n";
   break;
}

if ($name2 == "Mion Nara") {
  echo "私はあなたの名前です";
} else { 
  echo "あなたの名前ではありません";
  echo "\n";
}


//2
// += 変数と式の和を変数に代入する
$total = 0;
for ($i = 0; $i <= 10000; $i++){
  $total += $i;
}
  echo $total;
  echo "\n";
 

//3
//foreach文は配列の要素を順番に処理するための構文
$fruits  = array("apple", "orange" , "lemon", "peach" , "grape");

//要素の数
echo count($fruits);
echo "\n";

//出力
foreach($fruits as $fruit){
  echo "要素は".$fruit;
  echo "\n";
}
//$fruitsから一つずつ要素を取り出して、$fruitに代入させる


//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
/*
1から100まで表示させたい
×$i < $end
○$i <= $end

*/



