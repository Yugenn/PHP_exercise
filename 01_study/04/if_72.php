<?php

echo '1つ目の点数を入力してください:';

$score_1 = fgets(STDIN);

echo '2つ目の点数を入力してください:';

$score_2 = fgets(STDIN);

if ($score_1 >= 80 and $score_2 >= 80){
    echo '合格';
} elseif ($score_1 >= 50 || $score_2 >= 50){
    echo '追試';
} else {
    echo '不合格';
} 