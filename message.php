<?php
  session_start();
  include_once("define.php");
  require_once("pdo.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Messages</title>
    <link rel="stylesheet" href="/css/css.css">
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="verification.js"></script>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
	  <div>
		  <div id="messages">
		  </div>
		  <form method="POST" action="">
        <h1>Message :</h1>

        <div class="message">
          <textarea type="text" name="message" id="message" placeholder="message"></textarea>
        </div>

			  <div>
          <input type="submit" name="mssg" value="Envoyer"/>
        </div>
		  </form>
      <?php
        $allmsg = $PDO->query('SELECT * FROM chat_ajax ORDER BY id ASC');
        while($msg = $allmsg->fetch())
        {
      ?>

      <?php
        echo $msg->username;
      ?>
      :
      <?php
        echo $msg->message;
      ?>

      <?php
        }
      ?>
	  </div>
  </body>
</html>
