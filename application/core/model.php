<?php

class Model {
	
	public $config;
	
	/*
	 Модель обычно включает методы выборки данных, это могут быть:
	> методы нативных библиотек pgsql или mysql;
	> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
	> методы ORM;
	> методы для работы с NoSQL;
	> и др.
	*/
	
	function __construct() {
#		$this->config = parse_ini_file('../.configuration');	
		$this->config = 'FUUUCK!';	
	}
	
	// метод выборки данных
	function get_data() {
		
	}
		
}