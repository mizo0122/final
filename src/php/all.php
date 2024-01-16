<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="db_connect.php"></a>
    <title>曲一覧</title>
</head>
<body>
    <?php
    $pdo = new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517346-final;charset=utf8','LAA1517346','PASS0122')
    $pdo->query('select*from MUSC')
    foreach($pdo->query('select*from MUSC') as $row){
        echo '';
        echo $row['music_id'],':';
        echo $row['music_name'],':';
        echo $row['artist_id'];
        echo '</p>';
    }
    ?>
</body>
</html>