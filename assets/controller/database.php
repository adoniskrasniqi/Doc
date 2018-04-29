<?php

class Database{

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
		try{
			$dbPDO = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->username", "$this->password");
			$dbPDO->exec("SET CHARACTER SET utf8");
			$dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$dbPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			return $dbPDO;
		}
		catch(Exception $e){
			echo $e;
			return false;
		}	
	}

	function checkUser_password($username, $passowrd){
		$dbPDO = $this->PDO_CONNECT();
		$stmt = $dbPDO->prepare("SELECT id FROM users WHERE username=:username AND password=:password");
		$stmt->bindParam(":username",$username,PDO::PARAM_STR);
		$stmt->bindParam(":password",$password,PDO::PARAM_STR);
	    $stmt->execute();
	    return count($stmt->fetchAll())>0;
	}

	function checkUser_authKey($username, $authKey){
		$dbPDO = PDO_CONNECT();
		$stmt = $dbPDO->prepare("SELECT id FROM users WHERE username=:username AND authKey=:authKey");
		$stmt->bindParam(":username",$username,PDO::PARAM_STR);
		$stmt->bindParam(":authKey",$authKey,PDO::PARAM_STR);
	    $stmt->execute();
	    return count($stmt->fetchAll())>0;
	}

}