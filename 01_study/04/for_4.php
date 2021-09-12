<?php

$fruits = ['banana','apple','melon'];

for($i = 0 ;$i < 3;$i++ ){
    echo $fruits[$i] . '<br>';
}

echo '<hr>';


$nums = [];

for ($j = 1;$j <= 10; $j++){
    $nums[] = $j;
}
var_dump($nums);