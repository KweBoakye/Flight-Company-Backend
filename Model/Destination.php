<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Destination
 *
 * @author k1555253
 */
class Destination implements JsonSerializable{
    

    private $DestinationId;
private  $Place;
private  $DestinationTypeID;

function __construct($DestinationId, $Place, $DestinationTypeID) {
    $this->DestinationId = $DestinationId;
        $this->Place = $Place;
        $this->DestinationTypeID = $DestinationTypeID;
       
    }
    
    
    public function getDestinationId() {
        return $this->DestinationId;
    }

    public function getPlace() {
        return $this->Place;
    }

    public function getDestinationTypeID() {
        return $this->DestinationTypeID;
    }

    public function setDestinationId($DestinationId) {
        $this->DestinationId = $DestinationId;
    }

    public function setPlace($Place) {
        $this->Place = $Place;
    }

    public function setDestinationTypeID($DestinationTypeID) {
        $this->DestinationTypeID = $DestinationTypeID;
    }

    public function jsonSerialize()
  {
    return get_object_vars($this);
    
  }

}


    
    
?>

