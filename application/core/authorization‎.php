<?php

class User {
	
	public $username;
	
	function User() {
		$this->username = 'Musha!' . rand(1, 1000);
		
		
	}
	
	
	
}
 

$user = new User();