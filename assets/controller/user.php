<?php
require 'database.php';

class User extends Database{

	private	$username;
	private	$password;
	private	$authKey;
	private $privileges;

	function __construct($username = null,$authKey = null){
		$this->username	=	$username;
		$this->authKey	=	$authKey;
	}

	function checkUser_byPassword($username, $password){
		return checkUser_password($username, $password);
	}

	function checkUser_byAuthKey($username, $authKey){
		return checkUser_authKey($username, $authKey);
	}

	function getPrivileges(){
		return $this->privileges;
	}
}
