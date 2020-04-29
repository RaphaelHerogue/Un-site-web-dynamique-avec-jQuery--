<?php
require_once("connexion.php");

if(isset($_POST["submit"]))
{
  if(!empty($_POST["pseudo"]) && !empty($_POST["message"]))
  {

    $pseudo = $_POST["pseudo"];
    $message = $_POST["message"];
    $requete = $pdo->query("INSERT INTO messages (auteur, message) VALUES(:pseudo, :message)") or die(print_r($bdd->errorInfo()));
    $requete->exec(array(
          "pseudo" => $pseudo,
          "message" => $message
      ));
  }
  else
  {
      echo "Vous avez oublié de remplir un des champs !";
  }

}


 ?>
