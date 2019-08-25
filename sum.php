<?php

/*
// 1~10 までを足した値を返す関数
function sum ( ){
    
    // $result は結果を保存する変数
    $result = 0;
    
    // $ $i は　1 から始まり　$max より大きくなるまでループする
    for($i =1; $i <= 10; $i++){
        
        // $result に　$i を順番に足していく
        $result += $i;
    }
            // $result を結果として返す
    return $result;
}

// 関数を実行する
//echo sum();
*/


/*
    function　関数名(仮引数){
        実行する処理
    }
    
*/


/*
仮引数
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++ ) {
        $result += $i;
    }
    return $result;
}
echo sum( 100 );
//ここで実際の値＝引数１００を渡す
*/


//課題1:引数に数値を指定して実行すると、数値を2倍にして返す関数
function time2($num) {
    return $num *2;
}
echo time2(7);
echo "\n";


//課題2:$a と $b を仮引数に持ち、　$aと$bを足した結果を返す関数
function sum2($a, $b){
    return $a + $b;
}
echo sum2(25,52);
echo "\n";


//課題3:$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数
function multi($arr) {
    return array_product($arr);
}
echo multi(array(1,3,5,6,9));
//パラメータ＝array
echo "\n";


//課題4:【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr2){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr2[0];
 foreach($arr2 as $a){
    if($max_number < $a){
        $max_number = $a;
    }
 }

 return $max_number;
 }
echo max_array(array(1,3,5,7,9));
echo "\n";

//課題5
/*
<strip_tags>
文字列から HTML および PHP タグを取り除く

string strip_tags ( string $str [, string $allowable_tags ] )

この関数は、指定した文字列 (str) から全ての NUL バイトと HTML および PHP タグを取り除きます。
*/

$text = '<p>Ptag</p><!-- Comment --> <a href="linkURL">atag</a>';
echo strip_tags($text);
//タグ部分が消える

// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');
//a hrefもaタグなので残る。
echo "\n";


/*
<array_push>
１つ以上の要素を配列の最後に追加したい時に使用する

int array_push($配列名, $値１ [, 値２ $...])

引数：
第一引数に追加する対象の配列を指定します。
第一引数以降には配列に追加する値を1つまたは複数指定します。

返り値：
追加した後の配列の要素数を返します。

注意点：
配列に追加する要素が1つのみの場合は、関数を呼び出す際のオーバーヘッドが発生しない$array[] = を使用することをオススメします。
*/

$fruits =["apple", "orange", "grape"];

//array_pushで要素を追加
array_push($fruits, "peach", "banana");

print_r($fruits);
//print_r : 指定した変数に関する情報をわかりやすく出力する
echo "\n";

/*
<array_merge>
配列の要素の最後に一つまたは複数の配列を結合する

array array_merge(array $配列 [,追加する配列 $...])

引数：
第一引数には対象の配列を指定します。
第一引数以降の引数では追加する配列を1つまたは複数指定します。

返り値：
対象の配列の最後に配列を追加することにより、ひとつまたは複数の配列をマージし、マージした結果の配列を返します。
*/

$array1 = ["A1","A2","A3"];
$array2 = ["B1","B2","B3"];
$array3 = ["C1","C2","C3"];

//配列の結合
$array_merge = array_merge($array1, $array2, $array3);

print_r($array_merge);
echo "\n";


/*
<time>
UNIXタイムスタンプを取得する
int time(void)
UNIXタイムスタンプをint型（整数型）で返す
*/

//現在のタイムスタンプを取得
echo "現在のタイムスタンプ:" . time();
echo "\n";

//3日後のタイムスタンプを取得
$nweek = time () + (3 * 24 * 60 * 60);
echo "3日後のUNIXタイムスタンプ:" . $nweek;

//比較 時刻によって処理を分岐したい時に使用する
$time1 = time();
$time2 = time() + (3 * 24 * 60 * 60);

if($time1 < $time2){
    echo '$time2が大きい値です';
    //ここはシングルクォーテーション
    echo "\n";
}


/*
<mktime>
指定した日時のタイムスタンプを取得することができる
時、分、秒、月、日、年　で指定
引数を全て省略した場合は現在のタイムスタンプを取得する
*/

//2019/8/25 00:00:00
$timestamp = mktime(0,0,0,8,25,2019);
echo $timestamp . "\n";


/*
<date>
引数一つの時：「現在の時刻」を「指定したフォーマット」で出力
引数二つの時：「第２引数のタイムスタンプ」を「指定したフォーマット」で出力
戻り値はstring(整数)

date_default_timezone_set('Asia/Tokyo');：まずタイムゾーンの設定をすること。
Y：年（4桁表記）
y：年（2桁表記）
m：月（2桁表記）
n：月（先頭にゼロつけない）
d：日（2桁表記）
H：時間（24時間単位）
h：時間（12時間単位）
i：分
s：秒
t：指定した月の日数
w：曜日番号（0[日曜]から6[土曜]の値）
.：文字列連結
\n：改行

 */
 
 date_default_timezone_set('Asia/Tokyo');
 
 echo date("Y/m/d H:i:s") . "\n";
 echo date("Y/m/01") . "\n";
 echo date("Y/m/t") . "\n";
 
 $w = date("w");
 $week_name = array("sun","mon","tue","wed","thu","fri","sat");
 
 echo date("Y/m/d") . "($week_name[$w])\n";
 
 
 
 
 
    



?>

