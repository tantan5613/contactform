<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" href="destyle.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div id="form-wrap">
            <h3>お問い合わせ内容確認</h3>
            <div id="form-box">
                <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>
                よろしければ「送信する」ボタンを押して下さい。</p>
                <p>名前<br>
                    <?php echo $_POST['name']; ?>
                    </p>
                <p>メールアドレス<br>
                    <?php echo $_POST['mail']; ?>
                </p>
                <p>年齢<br>
                    <?php echo $_POST['age']."歳"; ?>
                </p>
                <p>コメント<br>
                    <?php echo $_POST['comments']; ?>
                </p>
                <!-- 戻るボタン　actionに元の画面のHTMLファイルを指定する -->
                <form action="index.html">
                    <input type="submit" value="戻って修正する">
                </form>
                <!-- 最終画面に飛ばす　HTMLファイルで取得した内容を次の画面に渡す　-->
                <form action="insert.php" method="post">
                    <input type="submit" class="button2" value="登録する">
                    <!-- type="hidden"にすることでweb上隠すことができる -->
                    <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
                    <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                </form>
            </div>
        </div>
    </div>
</body>
</html>