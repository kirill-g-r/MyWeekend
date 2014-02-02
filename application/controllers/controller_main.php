<?php

class Controller_Main extends Controller {
	
	function index_action() {
		$this->view->generate('main_view.php', 'template_view.php');
	}
}