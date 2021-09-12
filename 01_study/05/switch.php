<?php

$hour = '5';

switch ($hour){
    case '6':
        echo 'おはようございます';
        break;
    case '12':
        echo 'こんにちは';
        break;
    case '18':
        echo 'こんばんは';
        break;
    default:
        echo 'どうも';
        break;
}

echo '<hr>';

if($hour == '6'){
    echo 'おはようございます';
} elseif($hour == '12'){
    echo 'こんにちは';
} elseif($hour == '18'){
    echo 'こんばんは';
} else{
    echo 'どうも';
}