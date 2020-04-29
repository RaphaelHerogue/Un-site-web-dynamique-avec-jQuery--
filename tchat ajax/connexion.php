<?php

  $serveur = "localhost";
  $dbName = "tchat";
  $users = "root";
  $mdp = "";
  $port = 3306;
  define("SQL_DSN", "mysql:dbname=$dbName;host=$serveur; port= $port");
  define("SQL_USERNAME", "$users");
  define("SQL_PASSWORD", $mdp);

  class PDOFactory
  {
    private static $_instance;

    public function __construct( )
    {

    }

    public static function getInstance()
    {
      if (!isset(static::$_instance))
      {
        try
        {
          static::$_instance = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD,[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
          static::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
          echo $e;
        }
      }
      return static::$_instance;
    }
  }

  $pdo=pdoFactory::getInstance();

?>
