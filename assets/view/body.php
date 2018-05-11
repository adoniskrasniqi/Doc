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
				<script src="'.$this->URL.'assets/js/loginscript.js"></script>
				<script src="'.$this->URL.'assets/js/script.js"></script>';
	}


	//Print title of top header
 	public function print_topHeaderTitle(){
 		echo '<h3 class="topHeader_title">';
 		echo $this->business_name." - ".$this->page;
 		echo '</h3>';
	}

	//Print left menu items
	public function print_leftMenuItems(){
		echo '
			<a href="'.$this->URL.'main.php" class="left_menuItem"><span></span>Kryefaqja</a>
			<a href="javascript:void(0)" class="left_menuItem" onclick="showLeftMenuItem(1)"><span></span>Itinerari</a>
				<div class="leftMenuItem_child" id="leftMenuItem_child_1">
					<a href="'.$this->URL.'schedule/AddSchedule.php">Shto</a>
					<a href="'.$this->URL.'schedule/Schedules.php">Shiko itinerarin</a>
				</div>
			<a href="#" class="left_menuItem"><span></span>Regjistri i Shëndetit</a>
			<a href="#" class="left_menuItem" onclick="showLeftMenuItem(3)"><span></span>Faturimi</a>
				<div class="leftMenuItem_child" id="leftMenuItem_child_3">
					<a href="'.$this->URL.'billing/AddBilling.php">Shto faturen</a>
					<a href="'.$this->URL.'billing/Bills.php">Shiko gjendjen</a>
				</div>
			<a href="'.$this->URL.'portal/Patients.php" class="left_menuItem"><span></span>Portali i pacientit</a>
			<a href="'.$this->URL.'" class="left_menuItem"><span></span>Dilni</a>';
	}

}