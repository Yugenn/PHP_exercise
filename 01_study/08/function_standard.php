<?php
// 配列の要素数を返す関数
$staff = ['Bob','Tom','Ken'];

echo count($staff) . '<br>';

//乱数を発生させる関数
echo mt_rand(0,10) . '<br>';

//指定した範囲の数値を持つ配列を作る関数
$nums = range(1,10);
var_dump($nums);
echo  '<br>';

//配列内の最大値を返す関数
echo max($nums);
