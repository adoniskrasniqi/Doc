
//Display child items of left menu items by id
//Hide other child items
var lastChildItemId=0;
function showLeftMenuItem(id){
	$("#leftMenuItem_child_"+lastChildItemId).animate({height:"0px"},300);
	$("#leftMenuItem_child_"+id).animate({height:"96px"},300);
	lastChildItemId = id;
}

//Redirect page to 'Add User' page

function redirect_toAddUser(){
	var schedule_data = $("#date").val();
	var shchedule_time_H = $("#time_H").val();
	var shchedule_time_M = $("#time_M").val();

	window.location.href = "../patient/AddPatient.php?redir=0&&schedule_data="+schedule_data
							+"&&shchedule_time_H="+shchedule_time_H
							+"&&shchedule_time_M="+shchedule_time_M;
}