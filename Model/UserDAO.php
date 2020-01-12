<?php
require_once 'AbstractDao.php';
require_once 'UsersModel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDAO
 *
 * @author k1555253
 */
class UserDAO extends AbstractDao{
    
    
    protected static $tableName = 'users';

	protected $tableSchema = array(
		'fullname',
		'username',
		'email',
		'password',
		'phone',
		'create_date'
		);
        
     private function __construct()
{
}

 private function __clone()
{
}
//prevent cloning


 private function __wakeup()
{
}
//prevent unserializing

public static function getInstance()
   {
           if (empty(self::$FlightDaoInstance)) {
self::$FlightDaoInstance = new FlightDao();
}
return self::$FlightDaoInstance;
   }
    
    
    
 private function BuildSQLstring()
	{
		$params = '';
	 	foreach ($this->tableSchema as $columnName) {
	 		if ($this->$columnName != null) {
		 		if (is_int($this->$columnName)) {
		 			$params .= $columnName . ' = ' . $this->$columnName . ', ';
		 		} else {
		 			$params .= $columnName . " = '" . $this->$columnName . "', ";
		 		}
	 		}
	 	}
	 	return trim($params, ', ');
	}

	// inserts data to the database,
	// this function uses the $tableName variable at the model and the BuildSQLstring function
	// to generate the whole SQL insert query automaticly.
	public function Create()
	{$pdo = $this->connect();
		$sql = $pdo->prepare('INSERT INTO ' . static::$tableName . ' SET ' . $this->BuildSQLstring());
		if ($pdo->query($sql)) {
			$this->id = $pdo->insert_id;
			return true;
		}
	}

	##### auth ##########
	// Parameters :- a: username/email, b: password
	// Return :- user's info/false
	// Purpose :- authenticate user for login by checking his email/username and password if they match any users in the database.
	###########################
	public function auth($username, $password)
	{$pdo = $this->connect();
		$sql = "select * from users where (username = ':username' or email = ':email') and password = ';password'";
		$stmt = $pdo->prepare($sql);
                $stmt->bindParam(':username',$username);
                $stmt->bindParam(':email',$email);
                $stmt->bindParam(':password',$password);
		$stmt->execute();
		$results = $stmt->fetchAll(\PDO::FETCH_CLASS, 'UsersModel');
		return $results;
	}

	##### checkUsername ##########
	// Parameters :- a: username
	// Return :- count of users match the search
	// Purpose :- select the users with the same username parameter to check if the username is available and return the count of users match that username
	###########################
	public function checkUsername($username)
	{$pdo = $this->connect();
		$sql = "SELECT * FROM users WHERE username=':username'";
		$stmt = $pdo->prepare($sql);
                $stmt->bindParam(':username',$username);
		$stmt->execute();
		$count = $stmt->rowCount();
		return $count;
	}

	##### checkEmail ##########
	// Parameters :- a: email
	// Return :- count of users match the search
	// Purpose :- select the users with the same email parameter to check if the email is available and return the count of users match that email
	###########################
	public function checkEmail($email)
	{$pdo = $this->connect();
		$sql = "SELECT * FROM users WHERE email='$email'";
		$stmt = $pdo->prepare($sql);
                $stmt->bindParam(':email',$email);
		$stmt->execute();
		$count = $stmt->rowCount();
		return $count;
	}

}	  

