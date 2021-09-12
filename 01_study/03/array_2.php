<?php

//配列の中に文字列、数値
//配列の中に配列(多次元配列)
$profile = [
    'Bob' ,
    21 ,
    [
        'Tom',
        'Ken',
        'John'
    ]
    ];

echo $profile[0] . '<br>';

echo $profile[1] . '<br>';

echo $profile[2][0] . '<br>';

echo $profile[2][1] . '<br>';

echo $profile[2][2] . '<br>';

