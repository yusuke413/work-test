<!--================================================================================
17時間目の掲示板作成は
このファイルでは4each.keijibanのＨＴＭＬ文書及び使用者の目に見える部分を作る
！HTML、CSSで作ったブログの中を少し変えて作る
その際、HTMLではなく、PHPファイルにしてデータベースへのアクセスを可能にする
問題が起きた時に注意すること
1,ほとんどの問題が起きるケースではスペルミスやケアレスミスがほとんど。
2,うまく動かないときはファイルがデータベースに接続できているかのチェック→スペルチェック→１０分以上同じところで悩んだときは講師の方にｈｅｌｐする。
3,ケアレスミスを減らすために細分化して考えることを意識する。
==================================================================================-->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4each掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    mb_internal_encoding
    ("utf8");
    $pdo = new PDO("mysql:dbname=lesson_yusuke;host=localhost;","root","");
    $stmt=$pdo->query("select*from 4each_keijiban");
    
   /* while ($row=$stmt->fetch()){
        echo $row['handlename'];
        echo $row['title'];
        echo $row['comments'];
    }*/
    ?>
    <img src="4eachblog_logo.jpg" height="60px">

    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="LeftC">
            <h1>プログラミングに役立つ掲示板</h1>
            <!--form methodを指定していなかったのでinsertに情報が送られていなかった -->
<!--途中でなぜかformのボックス化がLeftC全体に適応された、フォームをdivで囲むとなおったが、さいごまで進めていくと何故か直っていた-->        
                <form method="post" action="insert.php">
                    <h3>入力フォーム</h3>
                    <!-- Notice: Undefined idfndex: handlename in C:xampphtdocs4each_keijibanindex.php on line 52 -->
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" name="handlename" size="40" class="HN">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" name="title" size="40" class="Title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>

                        <textarea name="comments" rows="6" cols="60" class="Comments"></textarea>
                    </div>
                    <input type="submit" value="投稿する" class="Submit">


                </form>
            
            <?php
            while($row=$stmt->fetch()){
            echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                echo"<div class='contents'>";
                echo $row['comments'];
                    echo"<div class='handlename'>posted by".$row['handlename']."</div>"; 
                echo"</div>";
            echo"</div>";
            }
            ?>
        </div>
        <div class="RightC">
            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP　MyAdminの使い方</li>
                <li>今人気のエディタ</li>
                <li>HTMLの基礎</li>
            </ul>
            <h2>オススメリンク</h2>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h2>カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </main>

    <footer>
        copyright c internous 4each blog is the one which provides A to Z about programming.
    </footer>

</body>

</html>
