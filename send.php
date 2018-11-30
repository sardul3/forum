<?php

$msg = $_POST['msgText'];
$sent_by = $_POST['sent_by'];

try{
$pdo = new PDO("mysql:host=w29ifufy55ljjmzq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=xp2scq2gzxc9775i", 'co5ouhslws2gsya7', 'cfe57qnrmfee44ud');

$sql_insert = "insert into message (msg, sent_by ) values ('$msg', '$sent_by')";

$pdo->query($sql_insert);



 header("Location: https://crew-talk.herokuapp.com/");

}

catch (PDOException $e) {
        die ($e->getMessage());
    }
?>
