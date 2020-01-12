<?php

abstract class AbstractDao {


   public static function connect(){
     $servername = "kunet.kingston.ac.uk";
     $username = "k1555253";
     $password = "phpproject";
     $dbname = "dbBk155525";
     $charset = "UTF8";

     try{
       $dsn = "mysql:host=".$servername.";dbnname=".$dbname.";charset=".$charset;
       $pdo = new PDO($dsn, $username, $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $pdo;
     }catch (PDOException $e){
       echo "Connection failed: ".$e->getMessage();

     }
  }
  


}
