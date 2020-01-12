<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Destination;

/**
 * Description of DestinationType
 *
 * @author k1555253
 */
class DestinationType {
    private  $DestinationTypeID;
private   $DestinationTypeName ;

public function __construct($DestinationTypeID, $DestinationTypeName) {
    $this->DestinationTypeID = $DestinationTypeID;
    $this->DestinationTypeName = $DestinationTypeName;
}

public function getDestinationTypeID() {
    return $this->DestinationTypeID;
}

public function getDestinationTypeName() {
    return $this->DestinationTypeName;
}

public function setDestinationTypeID($DestinationTypeID) {
    $this->DestinationTypeID = $DestinationTypeID;
}

public function setDestinationTypeName($DestinationTypeName) {
    $this->DestinationTypeName = $DestinationTypeName;
}


}
