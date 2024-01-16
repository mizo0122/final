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
    <title>Document</title>
</head>
<body>
<?php
            $pdo=new PDO($connect, USER,PASS);
            $sql=$pdo->prepare('insert into ARTIST(artist_id,artist_name) values (null, ?)');
          
            $sql->execute([ $_POST['artist']]) ;

            $sql = $pdo->query('select max(artist_id) from ARTIST');
            $max = $sql->fetch(PDO::FETCH_COLUMN);


            $sql=$pdo->prepare('insert into MUSC(music_id,music_name,artist_id) values (null, ?,?)');
          
            $sql->execute([ $_POST['music'],$max]) ;
        ?>
            <br><hr><br>
            <table>
                <tr><th>曲名</th><th>アーティスト名</th></tr>
                <?php
                    foreach ($pdo->query('select MUSC.music_name,ARTIST.artist_name,MUSC.music_id from MUSC ,ARTIST group by MUSC.music_id') as $row) {
                        echo '<tr>';
                        echo '<td>',$row['music_name'],'</td>';
                        echo '<td>',$row['artist_name'],'</td>';
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