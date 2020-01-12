<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Model/DestinationDAO.php' ;
require_once 'Model/DestinationFactory.php';
require_once 'Model/Destination.php';
session_start();
/**
 * Description of addDestination_controller
 *
 * @author k1555253
 */
class Destination_controller {
    //put your code here require_once ("customer.php");
function add($Place,$DestinationTypeID)
{
    $DestinationID = NULL;
    $Place = htmlentities($Place);
    $DestinationTypeID = htmlentities($DestinationTypeID);
    $Destination = DestinationFactory::create($DestinationID,$Place, $DestinationTypeID);
   
$DestDAO = DestinationDAO::getInstance();
$DestDAO->addDestination($Destination);
        
  }
  
  function delete($DestinationId)
  {
      $DestinationId = htmlentities($DestinationId);
      $DestDAO = DestinationDAO::getInstance();
$DestDAO->DeleteDestination($DestinationId);
  }
  
}

  
   
