<?php

class Controller_Main extends Controller
{
				
	function action_index() {
				
		if ( $this->userIsLogged() ) {
			
			header('Location:/portfolio');
		
		} else {
			
			$this->view->generate('', 'main_view.php');
			//$this->view->generate('main_view.php', 'template_view.php');
			
		}
			
	}
	public function userIsLogged() {
		
		session_start();
		
		if (isset($_SESSION['username']) 
			&& isset($_SESSION['password'])
				&& !empty($_SESSION['username'])
					&& !empty($_SESSION['password'])) {
			
			return true;
			
		}
		
	}
	
}