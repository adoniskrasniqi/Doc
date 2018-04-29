<?php
require 'database.php';

class User extends Database{

	private	$username;
	private	$password;
	private	$authKey;

	function __construct($username = null,$authKey = null){
		$this->username	=	$username;
		$this->authKey	=	$authKey;
	}

	function checkUser_password($username, $password){
		return parent::checkUser_password($username, $password);
	}

	function checkUser_authKey($username, $authKey){
		return parent::checkUser_authKey($username, $authKey);
	}
}
