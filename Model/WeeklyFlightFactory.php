<?php
require_once 'FlightFactory.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeeklyFlightFactory
 *
 * @author k1555253
 */
class WeeklyFlightFactory extends FlightFactory {
   
    public static function create( $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint,$WeeklyFlightID,$DayOfTheWeek,$Time) {
       $FlightId = NULL;
        return new Flight($FlightId, $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint,$WeeklyScheduleID,$DayOfTheWeek,$Time);
    }

}
