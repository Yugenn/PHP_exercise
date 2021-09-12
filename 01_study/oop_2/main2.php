<?php

require_once __DIR__ . '/functions.php';

$bob = [
    'name' => 'bob',
    'age' => 20,
];

$tom = [
    'name' => 'tom',
    'age' => 21,
];

$ken = [
    'name' => 'ken',
    'age' => 22,
];

echo selfIntroduction($bob);
echo selfIntroduction($tom);
echo selfIntroduction($ken);