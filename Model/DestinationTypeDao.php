<?php
require_once 'AbstractDao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DestinationTypeDao
 *
 * @author k1555253
 */
class DestinationTypeDao extends AbstractDao {
    private static $instance;
   
   private function __construct()
{
}

 private function __clone()
{
}
//prevent cloning


 private function __wakeup()
{
}
//prevent unserializing
   public static function getInstance()
   {
           if (empty(self::$instance)) {
self::$instance = new DestinationTypeDao();
}
return self::$instance;
   }
  
public function addDestination($DestinationTypeDao)
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('INSERT INTO `dbBk1555253`.`Destination` (`DestinationID`, `Place`, `DestinationTypeID`) VALUES (:Place,:DestinationTypeID)');
     $statement->bindValue(':Place()',$DestinationTypeDao->getDestinationTypeID());
    $statement->bindValue(':DestinationTypeID()',$DestinationTypeDao->getDestinationType());
}

function getAllDestinations()
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('SELECT `DestinationID`, `Place`, `DestinationTypeID` FROM `Destination`');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Destination');
  return $result;
}
}
