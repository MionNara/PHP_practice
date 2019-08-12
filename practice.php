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

