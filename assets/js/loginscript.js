<<<<<<< HEAD

//Ajax call to check if username & password is correct
function check_user(){

}

//Animate loading bar in login form
=======
var alreadyClicked = false;

>>>>>>> 43ebae20688abccae1e5dc3ffaa8307e5811dd4c
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
<<<<<<< HEAD

//Check if username & password correct
//Return status
var alreadyClicked = false;
function ajaxLogIn(){
	//Show loading bar animation if already not shown
	if(!alreadyClicked){
		loadingBarAnimation();
		alreadyClicked=true;
	}
	return check_user();
}

//On Login button clicked
//	check if data correct
//	show loading bar animation
//	disable login button
=======
function ajaxLogIn(){
	if(!alreadyClicked)
		loadingBarAnimation();
	alreadyClicked=true;

	return true;
}

>>>>>>> 43ebae20688abccae1e5dc3ffaa8307e5811dd4c
function logIn(){
	if(!ajaxLogIn()){
		$("#login_ErrorText").fadeIn();
	}
	$("#submit_button").attr('disabled',true);
}