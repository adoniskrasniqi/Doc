<?php
require "../assets/view/body.php";


$body = new body("Pacientet","Doc");


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
			<h2 class="main_HolderTitle">Pacientet</h2>

			<!-- Patient -->
			<div class="mainHolder_ScheduleHolder" >
				<h4 class="scheduleHolderTitle">Bryan Smith</h4>
				<p class="scheduleHolderComment">162358569547</p>	
			</div>

			<!-- Patient -->
			<div class="mainHolder_ScheduleHolder" >
				<h4 class="scheduleHolderTitle">Smith Bryan</h4>
				<p class="scheduleHolderComment">162358569547</p>	
			</div>

			<!-- Patient -->
			<div class="mainHolder_ScheduleHolder" >
				<h4 class="scheduleHolderTitle">Bryan Bryan</h4>
				<p class="scheduleHolderComment">162358569547</p>	
			</div>

			<!-- Patient -->
			<div class="mainHolder_ScheduleHolder" >
				<h4 class="scheduleHolderTitle">Smith Smith</h4>
				<p class="scheduleHolderComment">162358569547</p>	
			</div>


		</section>
	</body>
</html>