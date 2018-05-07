<?php
require "../assets/view/body.php";


$body = new body("Schedule","Doc");


?>
<!DOCTYPE html>
<html>
	<head>
		<?php $body->printHeader(); ?>
	</head>
	<body>

		<section class="top_header"><?php $body->print_topHeaderTitle(); ?></h3></section>
		<section class="left_menu"><?php $body->print_leftMenuItems(); ?></section>
		<section class="main_Holder" id="main_Holder">
			<h2 class="main_HolderTitle">Itinerari</h2>

			<!-- Date/Time -->
			<div class="mainHolder_itemHolder">
				
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Data</span>
					<input type="text" class="mainHolder_elementDate" name="" id="date">
				</div>

				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Ora</span>
					<input type="text" class="mainHolder_elementHour" name="" id="time_H">
					<span class="mainHolder_elementTimePoints">:</span>
					<input type="text" class="mainHolder_elementHour" name="" id="time_M">
				</div>
			</div>

			<!-- Patient name -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Pacienti</span>
					<select class="mainHolder_elementPatients" >
						<option></option>
						<option>Waylon Dalton</option>
						<option>Justine Henderson</option>
						<option>Abdullah Lang</option>
						<option>Marcus Cruz</option>
						<option>Thalia Cobb</option>
						<option>Mathias Little</option>
						<option>Eddie Randolph</option>
					</select>
				</div>	

				<div class="mainHolder_element">	
					<button class="mainHolder_elementNewPatientButton" onclick="redirect_toAddUser()">Pacient i ri</button>
				</div>
			</div>

			<!-- Comment -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Komenti</span>
					<textarea class="mainHolder_elementComment"></textarea>
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