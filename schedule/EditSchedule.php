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

		<section class="top_header"><?php $body->print_topHeaderTitle(); ?></section>
		<section class="left_menu"><?php $body->print_leftMenuItems(); ?></section>
		<section class="main_Holder" id="main_Holder">
			<h2 class="main_HolderTitle">Takimi me <span>Thalia Cobb</span></h2>

			<!-- Date/Time -->
			<div class="mainHolder_itemHolder">
				
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Data</span>
					<input type="text" class="mainHolder_elementDate" name="" id="date" value="<?php echo date('d-m-y'); ?>">
				</div>

				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Ora</span>
					<input type="text" class="mainHolder_elementHour" name="" id="time_H" value="<?php echo date('G'); ?>">
					<span class="mainHolder_elementTimePoints">:</span>
					<input type="text" class="mainHolder_elementHour" name="" id="time_M" value="<?php echo date('i'); ?>">
				</div>
			</div>

			<!-- Comment -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Komenti</span>
					<textarea class="mainHolder_elementComment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nibh, pulvinar hendrerit vehicula a, aliquet eu urna. Sed a leo eget odio mattis mattis sodales vel mi.</textarea>
				</div>	
			</div>


			<!-- Save / Discard button -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_buttonHolder">
					<button class="buttonHolder_SuccessfulButton">Takimi perfundoi</button>
					<button class="buttonHolder_SaveButton">Ruaj Ndryshimet</button>
					<button class="buttonHolder_DiscardButton">Fshij</button>
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