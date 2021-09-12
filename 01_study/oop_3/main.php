<?php

require_once __DIR__ . '/User.php';

$bob = new User('bob',20);


echo $bob->selfIntroduction();

$bob->setName('bob･smith');
$bob->setAge(30);

echo $bob->getName();
echo "\n";
echo $bob->getAge();
echo "\n";

echo $bob->selfIntroduction();
