<?php
namespace App\Model\Flight;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeeklyFlight
 *
 * @author k1555253
 */
class WeeklyFlight extends Flight{
private $WeeklyFlightID;
private $DayOfTheWeek;
private $Time;

public function __construct($FlightId, $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint,$WeeklyFlightID,$DayOfTheWeek,$Time) {
    parent::__construct($FlightId, $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint);
    $this->$WeeklyFlightID = $WeeklyFlightID;
    $this->DayOfTheWeek = $DayOfTheWeek;
    $this->Time = $Time;
}



public function getWeeklyScheduleID() {
    return $this->WeeklyScheduleID;
}

public function getDayOfTheWeek() {
    return $this->DayOfTheWeek;
}

public function getTime() {
    return $this->Time;
}

public function setWeeklyScheduleID($WeeklyScheduleID) {
    $this->WeeklyScheduleID = $WeeklyScheduleID;
}

public function setDayOfTheWeek($DayOfTheWeek) {
    $this->DayOfTheWeek = $DayOfTheWeek;
}

public function setTime($Time) {
    $this->Time = $Time;
}


}
