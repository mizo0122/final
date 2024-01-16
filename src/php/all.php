<?php
const SERVER = 'mysql220.phy.lolipop.lan';
const DBNAME = 'LAA1517346-final';
const USER = 'LAA1517346';
const PASS = 'Pass0122';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>曲一覧</title>
</head>
<body>
<hr><br>
    <table>
    <tr><th>ミュージックID</th><th>曲名</th><th>アーティストID</th></tr>
    <?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517346-final;charset=utf8',
    'LAA1517346','Pass0122');
    foreach($pdo->query('select*from MUSC') as $row){
        echo '<tr>';
        echo '<td>',$row['music_id'],'</td>';
        echo '<td>',$row['music_name'],'</td>';
        echo '<td>',$row['artist_id'],'</td>';
        echo '</tr>';
    }
    ?>
    </table>
</body>
</html>