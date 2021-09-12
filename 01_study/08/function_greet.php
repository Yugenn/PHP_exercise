<?

function greet($to, $message = 'どうも')
{
    echo $message . "{$to} さん<br>";

}

greet('Bob');

greet('Tom','Hello!!');