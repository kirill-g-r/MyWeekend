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
	
	public static function login() {
#print_r($_SERVER);
print_r('!!');
#print_r($_POST);

		
		if (!$this->loginUserBySessionData()) {
		
			if (!$this->loginUserByFormData()) {
				
				echo 'SHIT LOGIN!';
				return false;
				
			}
			
		}

		echo 'OK LOGIN!';
		
	}
						
	
	public function loginUserByFormData() {
		
		if (isset($_POST['username']) && isset($_POST['password'])) {
		
			if (list($username, $password) = $this->checkFormInputUserData()) {
		
				$this->model = new Model_Login();
		
				if ($user_info = $this->model->check_user_existence($username, $password)) {
						
					session_start();
						
		
					$_SESSION['username'] = $user_info['username'];
					$_SESSION['password'] = $user_info['password'];
		
					header('Location:/' . $this->getRequestURI());
					exit();
						
				} else {
						
					echo 'Неверный логин или пароль!';
		
				}
		
			}
				
		}
		
		return false;
		
	}
	public function loginUserBySessionData() {
	
		if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	
			if (list($username, $password) = $this->checkSessionUserData()) {
	
				$this->model = new Model_Login();
	
				if ($user_info = $this->model->check_user_existence($username, $password)) {
	
					session_start();
		
					$_SESSION['username'] = $user_info['username'];
					$_SESSION['password'] = $user_info['password'];
					
					unset($this->model);
	
					header('Location:' . $this->getRequestURI());
					exit();
	
				} else {
	
					echo 'Неверный логин или пароль!';
	
				}
	
			}
	
		}
	
		return false;
	
	}
	
	public function checkFormInputUserData() {
		
		$username= $_POST['username'];
		$password = $_POST['password'];
			
		if (empty($username) || empty($password)) {
		
			exit('Hacking attamp!');
		
		}
			
		$username = stripslashes($username);
		$username = htmlspecialchars($username);
		$username = trim($username);
			
		$password = stripslashes($password);
		$password = htmlspecialchars($password);
		$password = trim($password);
			
		if (empty($username) || empty($password)) {
				
			exit('Hacking attamp!');
				
		}

		return array($username, $password);
		
	}
	public function checkSessionUserData() {
	
		$username= $_SESSION['username'];
		$password = $_SESSION['password'];
			
		if (empty($username) || empty($password)) {
	
			exit('Hacking attamp!');
	
		}
			
		$username = stripslashes($username);
		$username = htmlspecialchars($username);
		$username = trim($username);
			
		$password = stripslashes($password);
		$password = htmlspecialchars($password);
		$password = trim($password);
			
		if (empty($username) || empty($password)) {
	
			exit('Hacking attamp!');
	
		}
	
		return array($username, $password);
	
	}
}