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
	public function checkUserAccess( $page = false ) {
		
		require_once 'application/core/login.php';
		return Login::checkAccess();
		
	}
	
	
}
