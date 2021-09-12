<?php

$age = 18;

if ($age < 20) {
    echo '未成年です' . '<br>';
}

//厳密演算子
//数値の18と文字列の'18'を比較

if($age !== '18'){
    echo '値とデータ型が一致していません' . '<br>';

}

var_dump($age < 20);

echo '<br>';

var_dump($age !== '18');