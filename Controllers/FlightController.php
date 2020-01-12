<?php
require_once 'Model/FlightDao';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FlightController
 *
 * @author k1555253
 */
class FlightController {
    function addFlight($FlightId, $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint)
{
    $FlightId = NULL;
    $FlightNo = htmlentities($FlightNo);
    $FlightDuration= htmlentities($FlightDuration);
    $DeparturePoint= htmlentities($DeparturePoint);
    $$DestinationPoint= htmlentities($DestinationPoint);
    $Flight = FlightFactory::create($FlightId, $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint);
   
$FlightDAO = FlightDAO::getInstance();
$FlightDAOO->addnewFlight($Flight);
        
  }
  
  function delete($FlightId)
  {
      $FlightId = htmlentities($FlightId);
      $FlightDAO = FlightDAO::getInstance();
$FlightDAO->DeleteFlight($FlightId);
  }
  
  public function getFlights()
  {
      $FlightDAO = FlightDAO::getInstance();
$FlightDAO->getAllFlights();
  }
  
  
}
