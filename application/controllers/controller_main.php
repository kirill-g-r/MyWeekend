<?php

class Controller_Main extends Controller
{
				
	function action_index()
	{	
		if (isset($_POST['username']) && isset($_POST['password'])) {
		
			$this->view->generate('main_view.php', 'template_view.php');
			
		} else {
			
			$this->view->generate('', 'index_main_view.php');
			
		}
	}
}