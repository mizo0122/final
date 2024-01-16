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
    <?php
    $pdo->query('select*from MUSC')
    foreach($pdo->query('select MUSC.music_name,ARTIST.artist_name,MUSC.music_id from MUSC ,ARTIST group by MUSC.music_id') as $row) as $row){
        echo '<p>';
        echo $row['music_id'],':';
        echo $row['music_name'],':';
        echo $row['artist_id'];
        echo '</p>';
    }
    ?>
</body>
</html>