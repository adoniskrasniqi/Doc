<?php

class body{

	private $URL;
	private $page;
	private $business_name;

	public function __construct($page = false, $business_name = false){
		$this->page = $page;
		$this->URL = "http://localhost/doc/";

		$this->business_name = $business_name;
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


	//Print title of top header in pages like Schedule.php / EHR.php ...
 	public function print_topHeaderTitle(){
 		echo $this->business_name." - ".$this->page;
	}

}