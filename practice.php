<?php
//課題１
$name = kazushi;
if ($name == kazushi) {
  echo "私は あなたの名前です";
} else {
  echo "あなたの名前ではありません";
}

//課題２
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//課題３
$fruits = ["orage","apple","banana","grape","blueberry"];
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

//課題４
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {    // < → <=
    if ($i % 5 == 0) {                  // 改行のため"\n"をecho
        echo $i;
        echo "\n";
    }
}