<?php
require_once 'AbstractDao.php';
require_once 'Flight.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FlightDao
 *
 * @author k1555253
 */
class FlightDao extends App\Model\DataAccessLayer\AbstractDao {
    private static $FlightDaoInstance;
   
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
           if (empty(self::$FlightDaoInstance)) {
self::$FlightDaoInstance = new FlightDao();
}
return self::$FlightDaoInstance;
   }
   
  public function addnewFlight($Flight)
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('INSERT INTO `dbBk1555253`.`Flight` (`FlightNo`, `FlightDurationSeconds`, `DeparturePoint`, `DestinationPoint`) VALUES ( :FlightNo, :FlightDurationSeconds, :DeparturePoint, :DestinationPoint');
     $statement->bindParam(':Place',$Flight->getFlightNo());
     $statement->bindParam(':Place',$Flight->getFlightDurationSeconds());
     $statement->bindParam(':Place',$Flight->getDeparturePoint());
    $statement->bindParam(':DestinationTypeID',$$UniqueFlight->getDestinationPoint());
    $statement->execute();
} 



         public function addnewWeeklyFlight($WeeklyFlight)
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('INSERT INTO `dbBk1555253`.`WeeklySchedule` ( `FlightId`, `DayOfTheWeek`, `Time`) VALUES (:FlightId`, :DayOfTheWeek, :Time)');
     $statement->bindParam(':FlightId',$WeeklyFlight->getFlightId());
     $statement->bindParam(':DayOfTheWeek',$WeeklyFlight->geDayOfTheWeek());
     $statement->bindParam(':Time',$WeeklyFlight->getTime());
    $statement->execute();
} 
   
function getAllFlights()
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('SELECT `FlightID`, `FlightNo`, `FlightDurationSeconds`, `DeparturePoint`, `DestinationPoint` FROM `Flight`');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Flight');
  return $result;
}

function getFlightsByDeparturePoint($DeparturePoint)
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('SELECT `FlightID`, `FlightNo`, `FlightDurationSeconds`, `DeparturePoint`, `DestinationPoint` FROM `Flight` WHERE `DeparturePoint` = :DeparturePoint ');
 $statement->bindParam(':DeparturePoint',$DeparturePoint);
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Flight');
  return $result;
}

function getFlightsByDestination($DeparturePoint)
{
  $pdo = $this->connect();
  $statement = $pdo->prepare('SELECT `FlightID`, `FlightNo`, `FlightDurationSeconds`, `DeparturePoint`, `DestinationPoint` FROM `Flight` WHERE `DestinationPoint` = :DestinationPoint ');
 $statement->bindParam(':DestinationPoint',$DestinationPoint);
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Flight');
  return $result;
}




function DeleteFlight($Flight) {
    $pdo = $this->connect();
    $statement = $pdo->prepare('DELETE FROM `dbBk1555253`.`Fllight` WHERE `FlightID` = :FlightId');
    $statement->bindValue(':FlightId',$Flight);
    $statement->execute();
}
}
