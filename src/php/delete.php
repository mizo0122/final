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
    <title>削除画面</title>
</head>

<body>
    <table>
    <tr>
        <th>ミュージックid</th>
        <th>曲名</th>
        <th>アーティストID</th>
    </tr>
        <?php
    $pdo=new PDO($connect, USER, PASS);
    foreach($pdo->query('select * from MUSC')as $row){
        echo '<tr>';
        echo '<td>', $row['music_id'], '</td>';
        echo '<td>', $row['music_name'], '</td>';
        echo '<td>', $row['artist_id'], '</td>';
        echo '<td>';
        echo '<a href="delete.php?id=',$row['music_id'],'">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }


?>
    </table>
</body>

</html>