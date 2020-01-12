<?php
class Customer

{
  private $CustomerID;
  private  $Title;
  private  $FirstName;
  private  $LastName;
  private  $Gender;
  Private  $Email;
  private  $Password;
  private  $MobileNumber;
  
  public function __construct($CustomerID, $Title, $FirstName, $LastName, $Gender, $Email, $Password, $MobileNumber) {
      $this->CustomerID = $CustomerID;
      $this->Title = $Title;
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Gender = $Gender;
      $this->Email = $Email;
      $this->Password = $Password;
      $this->MobileNumber = $MobileNumber;
      
    
  }

  public function getCustomerID() {
      return $this->CustomerID;
  }

  public function getTitle() {
      return $this->Title;
  }

  public function getFirstName() {
      return $this->FirstName;
  }

  public function getLastName() {
      return $this->LastName;
  }

  public function getGender() {
      return $this->Gender;
  }

  public function getEmail() {
      return $this->Email;
  }

  public function getPassword() {
      return $this->Password;
  }

  public function getMobileNumber() {
      return $this->MobileNumber;
  }

  public function setCustomerID($CustomerID) {
      $this->CustomerID = $CustomerID;
  }

  public function setTitle($Title) {
      $this->Title = $Title;
  }

  public function setFirstName($FirstName) {
      $this->FirstName = $FirstName;
  }

  public function setLastName($LastName) {
      $this->LastName = $LastName;
  }

  public function setGender($Gender) {
      $this->Gender = $Gender;
  }

  public function setEmail($Email) {
      $this->Email = $Email;
  }

  public function setPassword($Password) {
      $this->Password = $Password;
  }

  public function setMobileNumber($MobileNumber) {
      $this->MobileNumber = $MobileNumber;
  }


}
?>