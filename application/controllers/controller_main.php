<?php

class Controller_Main extends Controller {
	
	function action_index() {
		
		global $user;
		
		if (!isset($user->username))	// Для тех вкладок, куда нужна авторизация
			header('Location: http://'.$_SERVER['HTTP_HOST'].'/');
		

		
		print_r($this->model->config);		
		$this->view->generate('main_view.php', 'template_view.php');
	
	}
}