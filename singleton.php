<?php 

class Database{

	public static $instance;
	public $query;

	public static function getInstance(){
		if(!isset(Database::$instance)){
			Database::$instance = new Database();
		}
		return Database::$instance;
	}


	private function __construct(){

	}

	public function setQuery($query){
		$this->query = $query;
	}

	public function getQuery(){
		return $this->query;
	}


}


$db = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

var_dump($db);
var_dump($db2);
var_dump($db3);