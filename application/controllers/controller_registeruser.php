<?php

class Controller_Registeruser extends Controller {
				
	function action_index() {
			
		require_once 'application/core/registeruser.php';
		echo 'IT WORKS!';
//		return Registeruser::checkFunc();

	}
		
}