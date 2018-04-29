<?php

<<<<<<< HEAD
=======

>>>>>>> 43ebae20688abccae1e5dc3ffaa8307e5811dd4c
class body{

	private $URL;
	private $page;


	public function __construct($page = false){
		$this->page = $page;
		$this->URL = "http://localhost/doc/";
	}

	public function printHeader(){
		echo '<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=1">
				<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
				<link href="'.$this->URL.'assets/css/style.css" rel="stylesheet">
				<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
				<script src="'.$this->URL.'assets/js/loginscript.js"></script>';
	}

}

<<<<<<< HEAD

class Database(){

	private $host;
	private $username;
	private $password;
	private	$dbname;

	function __construct(){
		$host		=	"localhost";
		$username	=	"root";
		$password	=	"root";
		$dbname		=	"doc";
	}
	function PDO_CONNECT(){
		$dbPDO = new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password");
		$dbPDO->exec("SET CHARACTER SET utf8");
		$dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$dbPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		return $dbPDO;
	}

	function checkUser_password($username, $passowrd){

	}
}


class User{

	private	$username;
	private	$password;
	private	$authKey;

	function __construct($username = null,$password = null){
		$this->username	=	$username;
		$this->authKey	=	$authKey;
	}

	function checkUser($username, $password){
		
	}
}

=======
>>>>>>> 43ebae20688abccae1e5dc3ffaa8307e5811dd4c
