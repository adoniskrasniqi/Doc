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
}