
//Display child items of left menu items by id
//Hide other child items
var lastChildItemId=0;
function showLeftMenuItem(id){
	$("#leftMenuItem_child_"+lastChildItemId).animate({height:"0px"},'fast');
	$("#leftMenuItem_child_"+id).animate({height:"96px"},'slow');
	lastChildItemId = id;
}