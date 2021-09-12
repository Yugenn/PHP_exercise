<?php

require_once __DIR__ . '/User.php';

$bob =  new User('bob',20);
echo $bob->selfIntroduction();

$tom = new User('tom',21);
echo $tom->selfIntroduction();

$ken = new User('ken',22);
echo $ken->selfIntroduction();