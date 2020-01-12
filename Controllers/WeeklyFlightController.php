<?php
require_once 'Model/FlightDao';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeeklyFlightController
 *
 * @author k1555253
 */
class WeeklyFlightController extends FlightController {
    function addFlight( $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint,$WeeklyFlightID,$DayOfTheWeek,$Time)
{
    $FlightId = NULL;
    $FlightNo = htmlentities($FlightNo);
    $FlightDuration= htmlentities($FlightDuration);
    $DeparturePoint= htmlentities($DeparturePoint);
    $WeeklyFlightID= htmlentities($WeeklyFlightID);
    $DestinationPoint= htmlentities($DestinationPoint);
    $DayOfTheWeek= htmlentities($DayOfTheWeek);
    $Time= htmlentities($Time);
    $WeeklyFlight = WeeklyFlightFactory::create( $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint,$WeeklyFlightID,$DayOfTheWeek,$Time);
   
$FlightDAO = FlightDAO::getInstance();
$FlightDAO->addnewFlight($WeeklyFlight);
        
  }
  
 public function convertTime($Time) {
      $hours = floor($seconds / 3600);
$mins = floor($seconds / 60 % 60);
 $timeFormat = sprintf('%02d:%02d:%02d', $hours, $mins);   
return $timeFormat;  
  }
  
  public function Date($date)
  {
$dayofweek = date('w', strtotime($date));
return $dayofweek;
  }
}
