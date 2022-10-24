<?php

class DataBase
{
	static $instance = null;
	private $db = null;

	private function __construct($host, $login, $password, $name){
		$this->db = new mysqli($host, $login, $password, $name);
	}

	public static function getInstance($host, $login, $password, $name)
	{
		if (!static::$instance)
		{
			static::$instance = new DataBase($host, $login, $password, $name);
		}

		return static::$instance;
	}

	public function query($q)
	{
		//TODO: защита от инъекций
		return (new DBResult($this->db->query($q)));
	}
}
