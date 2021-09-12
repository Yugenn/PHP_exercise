<?php

$profile = [
    'name' => 'Bob',
    'age' => '21',
    'staff' => ['Tom','Ken','John']

];

echo $profile['name'] . '<br>';

echo $profile['age'] . '<br>';

echo $profile['staff'][0] . '<br>';

echo $profile['staff'][1] . '<br>';

echo $profile['staff'][2] ;

echo '<hr>';

var_dump($profile);