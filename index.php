<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|K2D|Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href = "./css/index.css">
    <title>Web Forum</title>
  </head>
  <body>

<div class = "container">
<div class = "displayArea">

</div>

<div class = "inputArea ">
  <div class = "row type">
  <form action="send.php" method="post">
      <div class = "input-group">
        <div class = "col col-sm-3 col-md-7 col-lg-3">
          <input class = "form-control"  id = "user" name="sent_by" placeholder="user name"> </input>
        </div>
        <div class = "col col-sm-7 col-md-7 col-lg-7">
          <input class = "form-control"  id = "msgText" name="msgText" placeholder="message"> </input>
      </div>
      <div class = "col col-sm-2 col-md-2 col-lg-2">
        <button type = "submit" class = "btn btn-primary"  id = "msgSend">  Send </button>
      </div>
      </div>
      </form>
</div>
</div>
</div>


<?php
$pdo = new PDO("mysql:host=w29ifufy55ljjmzq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=xp2scq2gzxc9775i", 'co5ouhslws2gsya7', 'cfe57qnrmfee44ud');
$sql_retrive = "select * from message";
$result = $pdo->query($sql_retrive);

foreach ($result as $data) {
    echo "<div class = 'message container'>";
    echo '<span class = "username">'. $data['sent_by'] . '</span>';
    echo "<br />";
    echo '<span class = "msg">'. $data['msg'] . '</span>';
    echo "<br />";
    echo '<span class = "time">'.$data['sentTime'] . '</span>';
    echo "</div>";

}
?>


  <!--  <script src="./js/index.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
