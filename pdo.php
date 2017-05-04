<?php
  try
  {
    $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB, MYSQL_USER, MYSQL_PASSWD);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  }
  catch (PDOException $e)
  {
    $e->getMessage();
  }

  if(isset($_POST["submit1"]))
  {
    if($_POST["lastname"] != "" && $_POST["firstname"] != "" && $_POST["username"] != "")
    {
      $req = $PDO->prepare("INSERT INTO chat_ajax (lastname, firstname, username) VALUES(:lastname, :firstname, :username)");
      $req->bindValue(':lastname', $_POST["lastname"]);
      $req->bindValue(':firstname', $_POST["firstname"]);
      $req->bindValue(':username', $_POST["username"]);
        if ($req->execute())
        {
          echo "votre formulaire a été rempli, tu peux entrer avec le pseudo";
        }
        else
        {
          echo "rempli le formulaire";
        }
      }
      else
      {
      echo "tu dois remplir tous les champs";
    }
  }
  else
  {
    // echo "tu dois surement etre deja inscrit !";
  }

  if(isset($_POST["mssg"]))
  {
  	if($_POST["message"] != "")
    {
  		$pseudo = htmlspecialchars($_POST['username']);
      $message = htmlspecialchars($_POST['message']);
  		$insertmsg = $PDO->prepare('INSERT INTO chat_ajax(username, message) VALUES(?, ?)');
  		$insertmsg->execute(array($pseudo, $message));
  	}
  }


  if(isset($_POST["submit2"]))
  {
    if($_POST["username"] != "")
    {
      $pseudo = $_POST['username'];
      $req = $PDO->query("SELECT * FROM chat_ajax WHERE username = '$pseudo'");
      $rows = $req->rowCount();
      if ($rows == 1)
      {
        $req2 = $PDO->query("SELECT lastname, firstname FROM chat_ajax WHERE username = '$pseudo'");
        $answer = $req2->fetch();
        session_start();

        Header('location: message.php');
      }
      else
      {
        echo "tu n'est pas inscrit";
      }
    }
  }
?>
