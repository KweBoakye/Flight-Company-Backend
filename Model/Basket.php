<?php
class Basket

{
  private  $BasketID;
  private $FlightScheduleID;
  private  $CustomerID;
  
  public function __construct($BasketID, $FlightScheduleID, $CustomerID) {
      $this->BasketID = $BasketID;
      $this->FlightScheduleID = $FlightScheduleID;
      $this->CustomerID = $CustomerID;
  }
  public function getBasketID() {
      return $this->BasketID;
  }

  public function getFlightScheduleID() {
      return $this->FlightScheduleID;
  }

  public function getCustomerID() {
      return $this->CustomerID;
  }

  public function setBasketID($BasketID) {
      $this->BasketID = $BasketID;
  }

  public function setFlightScheduleID($FlightScheduleID) {
      $this->FlightScheduleID = $FlightScheduleID;
  }

  public function setCustomerID($CustomerID) {
      $this->CustomerID = $CustomerID;
  }


  
}




?>
