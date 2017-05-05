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
  </head>

  <body>
	  <div>
		  <div id="messages">
		  </div>
		  <form method="POST" action="">
			  <p>
          Message :
        </p>

        <div class="message">
          <textarea type="text" name="message" id="message" placeholder="message"></textarea>
        </div>

			  <div>
          <input type="submit" name="mssg" value="Envoyer"/>
        </div>
		  </form>
	  </div>
  </body>
</html>
