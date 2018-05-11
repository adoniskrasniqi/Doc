<?php
require "../assets/view/body.php";


$body = new body("Billing","Doc");


?>
<!DOCTYPE html>
<html>
	<head>
		<?php $body->printHeader(); ?>
	</head>
	<body>

		<section class="top_header"><?php $body->print_topHeaderTitle(); ?></section>
		<section class="left_menu"><?php $body->print_leftMenuItems(); ?></section>
		<section class="main_Holder" id="main_Holder">
			<h2 class="main_HolderTitle">Shto faturen</h2>

			<!-- Date/Time -->
			<div class="mainHolder_itemHolder">
				
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Data</span>
					<input type="text" class="mainHolder_elementDate" name="" id="date" value="11-03-2018">
				</div>

				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Ora</span>
					<input type="text" class="mainHolder_elementHour" name="" id="time_H" value="10">
					<span class="mainHolder_elementTimePoints">:</span>
					<input type="text" class="mainHolder_elementHour" name="" id="time_M" value="50">
				</div>
			</div>

			<!-- Patient name -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Pacienti</span>
					<select class="mainHolder_elementPatients" disabled="true">
						<option>Justine Henderson</option>
					</select>
				</div>	

				<div class="mainHolder_element" style="border-bottom: 0px ">	

				</div>
			</div>

			<!-- Comment -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Cmimi</span>
					<input type="text" class="mainHolder_elementDate" name="" id="price" onkeyup="billing_calculator()" autocomplete="off" value="25">
				</div>	
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Zbritje (%)</span>
					<input type="text" class="mainHolder_elementDate" name="" id="price_sale" onkeyup="billing_calculator()" autocomplete="off" value="0">					
				</div>
				<span class="mainHolder_elementTitle" style="padding:0px 0px 30px 25px;display: block;font-size: 15px " id="final_price">Cmimi final: 25.00 €</span>

				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Komenti</span>
					<textarea class="mainHolder_elementComment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum placerat suscipit. Morbi sodales quam non ante posuere gravida.</textarea>
				</div>



				<div class="mainHolder_element" style="float: left;">
					<span class="bills_Payment paymentComplete">
						<input type="radio" name="status" value="t" > Fatura u pagua
					</span>	
					<br>
  					<span class="bills_Payment paymentIncomplete">
						<input type="radio" name="status" value="f" checked> Fatura nuk u pagua
					</span>
				</div>
				 
				
			</div>


			<!-- Save / Discard button -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_buttonHolder">
					<button class="buttonHolder_SaveButton">Ruaj</button>
					<button class="buttonHolder_DiscardButton">Anulo</button>
				</div>
			</div>	
		</section>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript">
	$.datepicker.regional['al'] = {clearText: 'Fshij', clearStatus: '',
	    closeText: 'Mbyll', closeStatus: 'Mbyll',
	    prevText: '< Prapa', prevStatus: 'Shiko muajin e kaluar',
	    nextText: 'Para >', nextStatus: 'Shiko muajin tjetër',
	    currentText: 'Aktual', currentStatus: 'Shiko muajin aktual',
	    monthNames: ['Janar','Shkurt','Mars','Prill','Maj','Qershor',
	    'Korrik','Gusht','Shtator','Tetor','Nëntor','Dhjetor'],
	    monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
	    'Jul','Aoû','Sep','Oct','Nov','Déc'],
	    dayNamesShort: ['E Hëne','E Martë','E Mërkurë','E Enjte','E Premte','E Shtunë','E Diel'],
	    dayNamesMin: ['H','M','M','E','P','Sh','D'],
	    dateFormat: 'dd-mm-yy',};
	$.datepicker.setDefaults($.datepicker.regional['al']);
	$("#date").datepicker();
	</script>
	</body>
</html>