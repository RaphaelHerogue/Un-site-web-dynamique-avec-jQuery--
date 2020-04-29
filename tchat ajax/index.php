<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <title>Tchat Ajax</title>
  </head>
  <body>

    <div id="messages">
      <?php
        require_once("connexion.php");

        $requete = $pdo->query('SELECT * FROM messages ORDER BY id DESC LIMIT 0,10');

        while($donnees = $requete->fetch())
        {
            echo "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";
        }

        $requete->closeCursor();
      ?>
    </div>

    <form method="POST" action="traitement.php">
      Pseudo : <input type="text" name="pseudo" id="pseudo" /><br />
    	Message : <textarea name="message" id="message"></textarea><br />
    	<input type="submit" name="submit" value="Envoyez votre message !" id="envoi" />
    </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <script src="js/script.js"></script>
  </body>
</html>
