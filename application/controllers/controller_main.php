<?php

class Controller_Main extends Controller {
	
	function action_index() {
		print_r($this->model->get_data); 	//???
		$this->view->generate('main_view.php', 'template_view.php');
	}
}