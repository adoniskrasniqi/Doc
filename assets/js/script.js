
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



//Billing price with percentage
function billing_calculator(){
	var price = $("#price").val();
	var sale = $("#price_sale").val();
	var final_price = 0;
	var pre_price_text = "Cmimi final: ";
	var after_price_text = " €";


	//If sale exists
	if(sale!=null)
		price = ((price)-(price*sale/100)).toFixed(2)
	else
		price = price.toFixed(2);

	//Print price to final price holder
	$("#final_price").text(pre_price_text+price+after_price_text);

	//If final price lower than 0 change color of final price holder 
	if(price<=0)
		$("#final_price").css({"color":"#fd5e60"});
	//If final price is NaN
	else if(isNaN(price))
		$("#final_price").text("Ju lutem kontrolloni cmimin dhe zbritjen.")
	//Revert it's color to normal
	else
		$("#final_price").css({"color":"rgb(128, 128, 128)"});
}