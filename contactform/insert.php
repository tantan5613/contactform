<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" href="destyle.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div id="wrapper">
        <div id="form-wrap">
            <h3>お問い合わせ内容確認</h3>
            <div id="form-box">
                <p>
                    お問い合わせ有難うございました。<br>
                    3営業日以内に担当者よりご連絡差し上げます。
                </p>
            </div>
        </div>
    </div>
</body>
</html>