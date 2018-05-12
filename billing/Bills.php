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
			<h2 class="main_HolderTitle">Gjendja financiare</h2>

			<!-- Date/Time -->
			<div class="mainHolder_itemHolder">
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Të paguara</span>
					<span class="bills_Payment paymentComplete">1024.00 €</span>
				</div>
				<div class="mainHolder_element">
					<span class="mainHolder_elementTitle">Të papaguara</span>
					<span class="bills_Payment paymentIncomplete">25.00 €</span>
				</div>
			</div>

			<hr class="firstTypeDivider">

			<h2 class="main_HolderTitle">Faturat</h2>
			<!-- Bill -->
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditBilling.php'">
				<h4 class="scheduleHolderTitle">Smith Bryan</h4>
				<p class="scheduleHolderComment">162358569547</p>	
				<span class="bills_Payment paymentComplete">25.00 €</span>
			</div>
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditBilling.php'">
				<h4 class="scheduleHolderTitle">Smith Bryan</h4>
				<p class="scheduleHolderComment">162358569547</p>	
				<span class="bills_Payment paymentComplete">15.00 €</span>
			</div>
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditBilling.php'">
				<h4 class="scheduleHolderTitle">Smith Bryan</h4>
				<p class="scheduleHolderComment">162358569547</p>	
				<span class="bills_Payment paymentComplete">10.00 €</span>
			</div>
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditBilling.php'">
				<h4 class="scheduleHolderTitle">Smith Bryan</h4>
				<p class="scheduleHolderComment">162358569547</p>	
				<span class="bills_Payment paymentComplete">35.00 €</span>
			</div>
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditBilling.php'">
				<h4 class="scheduleHolderTitle">Bryan Smith</h4>
				<p class="scheduleHolderComment">162358569547</p>	
				<span class="bills_Payment paymentIncomplete">25.00 €</span>
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