<?php
include "connexion.php";

if(isset($_POST['submit']))
{
  echo "1er if";
  if(!empty($_POST['pseudo']) && !empty($_POST['message']))
  {
    echo "2ieme if";
    $pseudo = $_POST['pseudo'];
    echo "pseudo";
    $message = $_POST['message'];
    echo "message";
    $insertion = $bdd->prepare('INSERT INTO messages VALUES("", :pseudo, :message)');
    echo "insertion";
    $insertion->execute(array(
          'pseudo' => $pseudo,
          'message' => $message
      ));
      echo "exe insertion";
  }
  else
  {
      echo "Vous avez oublié de remplir un des champs !";
  }

}


 ?>
