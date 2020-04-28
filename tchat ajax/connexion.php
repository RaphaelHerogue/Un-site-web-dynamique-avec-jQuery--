<?php
    try
    {
      $name = "localhost";
      $dbName = "tchat";
      $users = "root";
      $mdp = "";
      $port = 3306;

      $bdd = new PDO('mysql:host='.$name.';dbname='.$dbName.';port='.$port, $users, $mdp);
    }
      catch (Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }
?>
