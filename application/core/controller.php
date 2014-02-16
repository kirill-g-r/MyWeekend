<?php

class Controller {
	
	public $model;
	public $view;
	public $i = 0;
	
	function __construct() {
		$this->view = new View();
		$this->model = new Model();			
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index() {
				
	}
}

