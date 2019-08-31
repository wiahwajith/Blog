<?php

	Class User{

		public $firstname;
		public $lastname;
		public $username;

		public function __construct($username, $firstname, $lastname){
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->username = $username;
		}
	}

?>