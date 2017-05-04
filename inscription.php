<?php
  include_once("define.php");
  require_once("pdo.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="verification.js"></script>
    <link rel="stylesheet" href="/css/css.css" />
    <title> formulaire chat </title>
  </head>

  <body id="imagesfeuille">
    <div id="center">
      <p> s'inscrire </p>
      <form name="form1" action="" method="POST">
        <input type="text" name="lastname" id="lastname" placeholder="Nom"><br/>
        <input type="text" name="firstname" id="firstname" placeholder="Prénom"><br/>
        <input type="text" name="username" id="username" placeholder="Pseudo (20max)"><br/>
        <input type="submit" name="submit1" value="inscription">
      </form><br/>

      <p> entrer avec le pseudo après inscription</p>
      <form name="form2" method="POST">
        <input type="text" name="username" id="username" placeholder="Pseudo"><br/>
        <input type="submit" name="submit2" value="se connecter">
      </form>
    </div>
  </body>
</html>
