<?php

$members = ['Bob','Tom','Ken','John'];

$members[1] = 'Michaer';//変更

$members[] = 'Daniel'; //最後の要素に追加(よく使う)

print_r($members);

echo '<br>';
echo'<hr>';

$members[50] = 'SKIP';

$members[] = 'TAIL';

print_r($members);

