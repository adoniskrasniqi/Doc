
function loadingBarAnimation(){

	/*$("#loadingBar").fadeIn();
	$("#loadingBar_span").animate({'display':'block'},0)
	$("#loadingBar_span").animate({'left':'100%'},2000)

	setTimeout( function() {
		$("#loadingBar_span").css("left","-45%");
		loadingBarAnimation();
	}, 2050)*/


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
	loadingBarAnimation();
	
}

function logIn(){

	if(!ajaxLogIn()){
		$("#login_ErrorText").fadeIn();
	}
}