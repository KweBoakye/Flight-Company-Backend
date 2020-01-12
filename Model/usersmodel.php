<?php



class UsersModel
{
	
	public $id;
	public $fullname;
	public $username;
	public $email;
	public $password;
	public $phone;
	public $create_date;
        
        public function __construct($id, $fullname, $username, $email, $password, $phone, $create_date) {
            $this->id = $id;
            $this->fullname = $fullname;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->phone = $phone;
            $this->create_date = $create_date;
        }
        
        public function getId() {
            return $this->id;
        }

        public function getFullname() {
            return $this->fullname;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getPhone() {
            return $this->phone;
        }

        public function getCreate_date() {
            return $this->create_date;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setFullname($fullname) {
            $this->fullname = $fullname;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function setPhone($phone) {
            $this->phone = $phone;
        }

        public function setCreate_date($create_date) {
            $this->create_date = $create_date;
        }





}