<?php
mb_internal_encoding("utf8");



$pdo = new 
    /*"db"nameを"bd"nameにしていたので接続できていなかった40分思考*/PDO("mysql:dbname=lesson_yusuke;host=localhost;","root","mysql");

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."',
'".$_POST['age']."',
'".$_POST['comments']."');"
  );
  
 
  
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <!--"div"を"duv"にしていたので反映されていなかった30分思考--><div class="confirm">
        <p>お問い合わせ有難うございました。<br>3営業日以内にご連絡差し上げます。</p>
    </div>
</body>

</html>
