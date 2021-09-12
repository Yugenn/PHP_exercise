<?php

$prices = [
    'apple' => 150,
    'banana' => 200,
    'melon' => 300,
];

foreach($prices as $fruit => $price){
    echo $fruit . 'は' . $price . '円です' . '<br>';
}