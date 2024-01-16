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
    <title>削除結果</title>
</head>

<body>
    <?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from MUSC where music_id=?');
    if($sql->execute([$_GET['music_id']])){
        echo '削除に成功しました。';

    }else{
        echo '削除に失敗しました。';
    }

?>
    <br>
    <hr><br>
    <table>
        <tr>
        <th>ミュージックid</th>
        <th>曲名</th>
        <th>アーティストID</th>
        </tr>
        <?php
    foreach ($pdo->query('select * from MUSC') as $row) {
        echo '<tr>';
        echo '<td>', $row['music_id'], '</td>';
        echo '<td>', $row['music_name'], '</td>';
        echo '<td>', $row['artist_id'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
    </table>
    <form action="all.php" method="post">
        <button type="submit">一覧画面へ戻る</button>
    </form>
</body>

</html>