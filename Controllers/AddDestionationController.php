<?php

require_once 'Controller/Destination_controller.php';
require_once('Model/Destination.php');

if(isset($_POST["Place"]))
  {
    $Place = $_POST["Place"];
    $DestinationTypeID= $_POST["DestinationTypeID"];

    $DestCon = new Destination_controller();
    $DestCon->add($Place, $DestinationTypeID);
  }