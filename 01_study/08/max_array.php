<?php

//range関数は引数の1~100までの配列を作成する関数
$nums = range(1,100);

function maxArray($array)
{
    $maxValue = $array[0];

    foreach ($array as $value){
        if ($maxValue < $value){
            $maxValue = $value;
        }
    }
    return $maxValue;
}

echo maxArray($nums); //100が出力されるようにする