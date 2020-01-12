<?php
require_once 'Destination.php';
require_once 'AbstractDao.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DestinationDAO
 *
 * @author k1555253
 */
class DestinationDAO extends AbstractDao{
  
   private static $DestinationDaoInstance;
   
   protected function __construct()
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
           if (empty(self::$DestinationDaoInstance)) {
self::$DestinationDaoInstance = new DestinationDAO();
}
return self::$DestinationDaoInstance;
   }
public function addDestination($Destination)
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('INSERT INTO `dbBk1555253`.`Destination` (`Place`, `DestinationTypeID`) VALUES (:Place,:DestinationTypeID)');
     $statement->bindValue(':Place',$Destination->getPlace());
    $statement->bindValue(':DestinationTypeID',$Destination->getDestinationTypeID());
    $statement->execute();
}

public function getAllDestinations()
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('SELECT `DestinationID`, `Place`, `DestinationTypeID` FROM `dbBk1555253`.`Destination`');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Destination');
  return $result;
}



public function DeleteDestination($DestinationId) {
    $pdo = $this->connect();
    $statement = $pdo->prepare('DELETE FROM `dbBk1555253`.`Destination` WHERE `DestinationID` = :DestinationId');
    $statement->bindValue(':DestinationId',$DestinationId);
    $statement->execute();
}

public function EditDestination($DestinationId,$place,$DestinationTypeID){
$pdo = $this->connect();
    $statement = $pdo->prepare('UPDATE `dbBk1555253`.`Destination` SET `Place` = :Place(), `DestinationTypeID` = :DestinationTypeID() WHERE `Destination`.`DestinationID` = :DestinationID');
    $statement->bindValue(':Place',$place);
    $statement->bindValue(':DestinationTypeID',$DestinationTypeID);
$statement->bindValue(':DestinationID',$DestinationId);
 }
    
}
