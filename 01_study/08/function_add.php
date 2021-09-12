<?php

function add($a , $b)
{
    $sum = $a + $b;
    return $sum;
}

echo add(2,3) . '<br>';

echo '<hr>';

function getCircleArea($radius)
{
    return $radius * $radius * pi();

}

echo getCircleArea(5);
