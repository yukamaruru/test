<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select * from diworks_keijiban");
?>
    
    <header>
        <div class="logo"><img src="diblog_logo.jpg">
        </div>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
        <main>
            <div class="main-container">
                <div class="left">
                    <h2>プログラミングに役立つ掲示板</h2>
    
                    <form method="post" action="insert.php">
                        <h3>入力フォーム</h3>
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename"></div>     
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="35" rows="7" name="comments"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                    </form>
                    <div class="kijis">
                    
<?php
while($row = $stmt->fetch()){
    
    echo "<div class=kiji>\n";
    echo "<h3>".$row['title']."</h3>\n";
    echo "<div class='contents'>\n";
    echo $row['comments']."\n";
    echo "<div class='handlename'>posted by".$row['handlename']."</div>\n";
    echo "</div>\n";
    echo "</div>\n";
}
?>                               
                    </div>
                </div>
                <div class="right">
                    <div class="article">
                        <h4>人気の記事</h4>
                            <p>PHPオススメ本</p>
                            <p>PHP MyAdminの使い方</p>
                            <p>いま人気のエディタTops</p>
                            <p>HTMLの基礎</p>
                    </div>
                    <div class="link">
                        <h4>オススメリンク</h4>
                            <p>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</p>
                            <p>XAMPPのダウンロード</p>
                            <p>Eclipesのダウンロード</p>
                            <p>Braketsのダウンロード</p>
                    </div>
                    <div class="category">
                        <h4>カテゴリ</h4>
                            <p>HTML</p>
                            <p>PHP</p>
                            <p>MySQL</p>
                            <p>JavaScript</p> 
                    </div>
                </div>
            </div>
        </main>
    </header>
    <footer>Copyright D.I.works|D.I.blog is the one which provides A to Z about programming</footer>
</body>
</html>