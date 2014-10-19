<?php

class Controller_Login extends Controller
{
				
	function action_index() {
		
		print_r($_POST);
		if (isset($_POST['username']) && isset($_POST['password'])) {
			
			echo 'Форма логин с надписью теправильное имя или пароль пользователя';
			
		} else {
			
			$this->view->generate('', 'login_view.php');
			//$this->view->generate('main_view.php', 'template_view.php');
		
			echo '';
		
		}
			
	}
		
}