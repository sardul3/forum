<?php

$msg = $_POST['msgText'];
$sent_by = $_POST['sent_by'];

try{
$pdo = new PDO("mysql://b6f2b30ec08555:6c63d71f@us-cdbr-iron-east-01.cleardb.net/heroku_45f6e70ea9a7def?reconnect=true", 'b6f2b30ec08555', '6c63d71f');

$sql_insert = "insert into message (msg, sent_by ) values ('$msg', '$sent_by')";

$pdo->query($sql_insert);



 header("Location: http://localhost/chatjs/index.php");

}

catch (PDOException $e) {
        die ($e->getMessage());
    }
?>
