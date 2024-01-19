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
    <title>更新完了画面</title>
</head>

<body>
    <button onclick="location.href='all.php'">トップへ戻る</button>
    <?php
    $pdo=new PDO($connect, USER, PASS);
    // SQL発行準備 prepareメソッド　作成２
    $sql=$pdo->prepare('update MUSC set music_id=null,music_name=?,artist_id where id=?');
    if (empty($_POST[''])) {
        echo 'を入力してください。';
    } else
    //SQLを発行 excuteメソッド　作成３
    //更新に成功しました　作成４
    //更新に失敗しまし　作成５
    if($sql->execute([htmlspecialchars($_POST['music_id']),$_POST['music_name'],$_POST['artist_id']])){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }
    
?>
    <hr>
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
    <button onclick="location.href='update.php'">更新画面へ戻る</button>
</body>

</html>