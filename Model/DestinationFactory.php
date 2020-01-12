<?php
require_once 'Destination.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DestinationFactory
 *
 * @author k1555253
 */
class DestinationFactory {
    public static function create($DestinationID,$Place,$DestinationTypeID)
    {
        $DestinationID = NULL;
      return new Destination($DestinationID,$Place,$DestinationTypeID)  ;
    }
    
   
}
