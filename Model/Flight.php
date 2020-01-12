<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstractFlight
 *
 * @author k1555253
 */
class Flight {
    

private $FlightId;
private  $FlightNo;
private  $FlightDuration;
private  $DeparturePoint;
private $DestinationPoint;

public function __construct($FlightId, $FlightNo, $FlightDuration, $DeparturePoint, $DestinationPoint) {
    $this->FlightId = $FlightId;
    $this->FlightNo = $FlightNo;
    $this->FlightDuration = $FlightDuration;
    $this->DeparturePoint = $DeparturePoint;
    $this->DestinationPoint = $DestinationPoint;
}

public function getFlightId() {
    return $this->FlightId;
}

public function getFlightNo() {
    return $this->FlightNo;
}

public function getFlightDuration() {
    return $this->FlightDuration;
}

public function getDeparturePoint() {
    return $this->DeparturePoint;
}

public function getDestinationPoint() {
    return $this->DestinationPoint;
}

public function setFlightId($FlightId) {
    $this->FlightId = $FlightId;
}

public function setFlightNo($FlightNo) {
    $this->FlightNo = $FlightNo;
}

public function setFlightDuration($FlightDuration) {
    $this->FlightDuration = $FlightDuration;
}

public function setDeparturePoint($DeparturePoint) {
    $this->DeparturePoint = $DeparturePoint;
}

public function setDestinationPoint($DestinationPoint) {
    $this->DestinationPoint = $DestinationPoint;
}


}
