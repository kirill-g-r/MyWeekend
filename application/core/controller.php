<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	public function action_index() {
	
		// todo	
	}
	
	public function getRequestURI() {
		
		$uri = end(explode('/', $_SERVER['REQUEST_URI']));
		
		if ($uri == 'login') {			
			
			return 'main_old';
			
		} else {
			
			return $uri;
			
		}
		
		return end( explode( '/', $_SERVER['REQUEST_URI'] ) );
				
	}
	public function check_user_existence($username, $password) {
	
		$sql = 'SELECT *
				FROM `users`
				WHERE
					`username` = :username
				AND	`password` = :password
				LIMIT 10';
		$sth = $this->dbConnect->prepare($sql);
		$sth->execute(array(
				':username' => $username,
				':password' => $password
		));
	
		return $sth->fetch();
	
	}
	
}
