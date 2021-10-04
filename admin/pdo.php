<?php
   define("PDO_HOST", "localhost");

  //  Local
   define("PDO_DBBASE", "accessability");
   define("PDO_USER", "root");
   define("PDO_PW", "root");

  //  Live
  //  define("PDO_DBBASE", "");
  //  define("PDO_USER", "");
  //  define("PDO_PW", "");
 
 try{
   $connection = new PDO(
   "mysql:host=" . PDO_HOST . ";".
   "dbname=" . PDO_DBBASE, PDO_USER, PDO_PW,
   array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
}
 catch (PDOException $e){
   print "Erreur !: " . $e->getMessage() . "<br/>";
   die();
}
?>