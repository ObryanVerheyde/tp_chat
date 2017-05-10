<?php
  include_once("define.php");
  require_once("pdo.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/verification.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>TP chat</title>
  </head>

  <body id="imagesfeuille">
    <div id="center">
      <h1>Log In</h1>
      <form name="form1" id="login" action="" method="POST">
        <p>
          <input type="text" name="lastname" id="lastname" placeholder="Nom">
        </p>
        <p>
          <input type="text" name="firstname" id="firstname" placeholder="Prénom">
        </p>
        <p>
          <input type="text" name="username" id="username" placeholder="Pseudo (20max)">
        </p>
        <p>
          <input type="submit" name="submit1" value="inscription">
        </p>
      </form>
      <br/>

      <p>
        Entrez avec le pseudo après inscription
      </p>
      <br/>
      <form name="form2" method="POST">
        <input type="text" name="username" id="username" placeholder="Pseudo">
        <p>
          <input type="submit" name="submit2" value="se connecter">
        </p>
      </form>
    </div>
  </body>
</html>
