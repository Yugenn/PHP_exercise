<?php
$message = '';
$err_message = '';

if ($_SERVER['REQUEST_METHOD'] ==='POST'){
    $message = $_POST['message'];
    if(empty($message)){
        $err_message = '未入力です';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
    
</head>
<body>
    <h1>バリデーション</h1>
    <form action="" method="POST">
        <div>
            <label for="">メッセージ</label><br>
            <input type="text" name="message" value="<?= $message?>">
            <?php if ($err_message): ?>
                <ul>
                    <li><?= $err_message ?></li>
                </ul>
            <?php endif; ?>   
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= $message ?></p>
</body>
</html>