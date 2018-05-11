//Redirect function
function redirect(){
	setTimeout(function(){
		window.location.replace("schedule/Schedules.php");
	}, 2600);
}
//Ajax call to check if username & password is correct
function check_user(){
	
}

//Animate loading bar in login form

var alreadyClicked = false;
function loadingBarAnimation(){

	$("#loadingBar").fadeIn();
	$("#loadingBar").animate({'width':'100%'},1000, "swing")
	
	setTimeout( function() {
		$("#loadingBar").animate({'width':'10%'},1000, "swing");
	}, 1050);

	setTimeout( function() {
		loadingBarAnimation();
	}, 2100);
}


//Check if username & password correct
//Return status
var alreadyClicked = false;
function ajaxLogIn(){
	//Show loading bar animation if already not shown
	if(!alreadyClicked){
		loadingBarAnimation();
		alreadyClicked=true;
	}
}

//On Login button clicked
//	check if data correct
//	show loading bar animation
//	disable login button

function ajaxLogIn(){
	if(!alreadyClicked)
		loadingBarAnimation();
	alreadyClicked=true;

	return true;
}

function logIn(){
	if(!ajaxLogIn()){
		$("#login_ErrorText").fadeIn();
	}
	$("#submit_button").attr('disabled',true);

	//Redirect to Schedule.php
	redirect();
}