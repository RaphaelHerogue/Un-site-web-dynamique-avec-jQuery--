<?php
include "connexion.php";

if(isset($_POST['submit']))
{
  if(!empty($_POST['pseudo']) && !empty($_POST['message']))
  {

    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];
    $insertion = $bdd->prepare('INSERT INTO messages VALUES("", :pseudo, :message)');
    $insertion->execute(array(
          ':pseudo' => $pseudo,
          ':message' => $message
      ));
  }
  else
  {
      echo "Vous avez oublié de remplir un des champs !";
  }

}


 ?>
