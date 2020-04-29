<?php
require_once("connexion.php");

  if(!empty($_GET['id']))
  {
    $id = (int) $_GET['id'];
    $requete = $pdo->prepare('SELECT * FROM messages WHERE id > :id ORDER BY id DESC');
    $requete->execute(array("id" => $id));

    $messages = null;

    while($donnees = $requete -> fetch())
    {
        $messages .= "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";
    }

    echo $messages;

  }
?>
