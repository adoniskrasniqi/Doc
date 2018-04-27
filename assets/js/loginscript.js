var alreadyClicked = false;

function loadingBarAnimation(){
	$("#loadingBar").fadeIn();
	$("#loadingBar").animate({'width':'10%'},1500, "swing")
	
	setTimeout( function() {
		$("#loadingBar").animate({'width':'100%'},1500, "swing");
	}, 1550);

	setTimeout( function() {
		loadingBarAnimation();
	}, 3100);
}
function ajaxLogIn(){
	if(!alreadyClicked)
		loadingBarAnimation();
	alreadyClicked=true;
}

function logIn(){

	if(!ajaxLogIn()){
		$("#login_ErrorText").fadeIn();
	}
}