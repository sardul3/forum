<?php

$msg = $_POST['msgText'];
$sent_by = $_POST['sent_by'];

try{
$pdo = new PDO("mysql:host=localhost;dbname=msgs", 'root', '');

$sql_insert = "insert into message (msg, sent_by ) values ('$msg', '$sent_by')";

$pdo->query($sql_insert);



 header("Location: http://localhost/chatjs/index.php");

}

catch (PDOException $e) {
        die ($e->getMessage());
    }
?>
