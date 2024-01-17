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
    <link rel="stylesheet" href="style.css">
    <title>更新画面</title>
</head>

<body>
    <div class="th0">ミュージックID</div>
    <div class="th1">曲名</div>
    <div class="th1">アーティストID</div>
    <?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from MUSC') as $row) {
		echo '<form action="update-output.php" method="post">';
		//商品ID　作成３
		echo '<input type="hidden" name="music_id" value="',$row['music_id'],'">';
		echo '<div class="td0">',$row['music_id'],'</div>';
		echo '<div class="td1">';
		//商品名　作成４
        echo '<input type="text" name="music_name" value="',$row['music_name'],'">';


		echo '</div> ';
		echo '<div class="td1">';
		//価格　作成５
        echo '<input type="text" name="price" value="',$row['artist_id'],'">';
		echo '</div> ';
		//更新ボタン　作成６
        echo '<div class="td2"><input type="submit" value="更新"></div>';
		echo '</form>';
		echo "\n";
	}
?>

</body>

</html>