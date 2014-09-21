<?php

class Controller_Portfolio extends Controller
{

	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}
	
	function action_index()
	{
		//require_once 'application/core/login.php';
		//$x = new Login();
		//$x->checkUserLogin();
		$this->checkUserAccess();
		$data = $this->model->get_data();		
		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}
	function __destruct() {
		
				
	}
	
}
