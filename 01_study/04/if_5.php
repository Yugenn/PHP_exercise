<?php

$score_1 = 50;
$score_2 = 50;

if ($score_1 >= 80 && $score_2 >= 80) {
    echo '合格';
} elseif($score_1 >= 50 || $score_2 >= 50){
    echo '追試';
} else {
    echo '不合格';
}
