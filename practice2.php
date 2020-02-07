<?php

//課題１
function double($num) {
   echo $num *= 2;
}   
echo double(10);
echo "\n";


//課題２
function plus($a,$b) {
    echo $a + $b;
}
echo plus(1,2);
echo "\n";


//課題３
 $array = array(1,3,5,7,9);         
   
    function five($arr) {
         $answer = 1;
        foreach($arr as $num) {
            $answer *= $num;
    } 
    return $answer;
}
echo five($array);
echo "\n";

//課題４
$array = array(1,5,8,12,6);
function max_array($arr) {
    echo max($arr);
}
echo max_array($array);
echo "\n";

//課題５
//strip_tags:文字列からHTML及びPHPタグを取り除く
$test_html = "<p>hello,html!</p>";
echo strip_tags ($test_html);
echo "\n";

//array_push:一つ以上の要素を配列の最後に追加する
$foods = array("rice","bread");
array_push($foods,"noodle","curry");
print_r($foods);

//array_merge:一つ、または複数の配列をマージする
$drink1 = array("cola","juice");
$drink2 = array("tea","blue" => "soda");
$drink_all = array_merge($drink1,$drink2);
print_r($drink_all);

//time:現在のUnixタイムスタンプを返す
//mktime:日付をUnixのタイムスタンプとして返す
echo time();
echo "\n";
echo mktime();
echo "\n";

//date:ローカルの日付/時刻を書式化する
echo date("m j l");