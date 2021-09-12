<?php
$name = '';
$age = '';
$err_messages = [];

if($_SERVER['REQEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];

    if(empty($name)){
        $err_messages[] = '氏名を入力してください';
    }

    if (empty($age)) {
        $err_messages[] = '年齢を入力してください';
    }

    if($name && $age){
        // thankyou.phpにリダイレクト
        header('Logation: thankyou.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>個人情報送信</h1>
    <?php if ($err_messages): ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_messages as $err_message): ?>
                <li><?= $err_message ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">
        <div>
            <label for="name">氏名</label><br>
            <input type="text" name="name" id="age" value="<?= $age ?>">
        </div>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>