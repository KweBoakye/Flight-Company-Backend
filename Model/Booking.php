<?php
class Booking

{
private $BookingID;
private $CustomerID;

public function __construct($BookingID, $CustomerID) {
    $this->BookingID = $BookingID;
    $this->CustomerID = $CustomerID;
   
}

public function getBookingID() {
    return $this->BookingID;
}

public function getCustomerID() {
    return $this->CustomerID;
}

public function setBookingID($BookingID) {
    $this->BookingID = $BookingID;
}

public function setCustomerID($CustomerID) {
    $this->CustomerID = $CustomerID;
}


}



?>