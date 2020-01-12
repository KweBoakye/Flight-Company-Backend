<?php
require_once 'Flight.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FlightFactory
 *
 * @author k1555253
 */
class FlightFactory {
    
    public static function create( $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint)
    {
        $FlightId = NULL;
      return new Flight($FlightId, $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint)  ;
    }
    
   
}

