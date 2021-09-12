<?php

require_once __DIR__ . '/User.php';

$user = new User();

echo $user->greet('Tom');
echo $user->selfIntroduction();