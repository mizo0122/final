<?php
const SERVER = 'mysql220.phy.lolipop.lan';
const DBNAME = 'LAA1517346-final';
const USER = 'LAA1517346';
const PASS = 'Pass0122';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録画面</title>
</head>
<body>
    <p>曲を追加します。</p>
    <form action="insert-output.php" method="post">
        曲名<input type="text" name="music"><br>
        アーティスト名<input type="text" name="artist"><br>
        <button type="submit">追加</button>
    </form>
</body>
</html>
</body>
</html>