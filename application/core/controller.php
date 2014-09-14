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
		
		return end( explode( '/', $_SERVER['REQUEST_URI'] ) );
				
	}
	
}
