<?php

class Controller_Registration extends Controller
{
				
	function action_index() {
		
		//print_r($_POST);
#		if (!isset($_POST['username']) && !isset($_POST['password'])) {
#			
#			echo 'Форма логин с надписью теправильное имя или пароль пользователя';
#			
#		} else {
			
			$this->view->generate('', 'registration_view.php');
			print_r('!!!!!!!');
			//$this->view->generate('main_view.php', 'template_view.php');
		
			
		
#		}
			
	}
		
}