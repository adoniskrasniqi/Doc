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
			<h2 class="main_HolderTitle">Itinerari</h2>

			<!-- Schedule -->
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditSchedule.php?id=1'" >
				<h4 class="scheduleHolderTitle">Bryan Smith</h4>
				<div class="shceduleHolderDateTime">
					<span class="scheduleHolderDate">02/04/2018</span>
					<span class="scheduleHolderTime">16:30</span>
				</div>
				<p class="scheduleHolderComment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nibh, pulvinar hendrerit vehicula a, aliquet eu urna. Sed a leo eget odio mattis mattis sodales vel mi.</p>	
			</div>
			
			<!-- Schedule -->
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditSchedule.php?id=1'" >
				<h4 class="scheduleHolderTitle">Bryan Smith</h4>
				<div class="shceduleHolderDateTime">
					<span class="scheduleHolderDate">02/04/2018</span>
					<span class="scheduleHolderTime">16:30</span>
				</div>
				<p class="scheduleHolderComment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nibh, pulvinar hendrerit vehicula a, aliquet eu urna. Sed a leo eget odio mattis mattis sodales vel mi.</p>	
			</div>
			<!-- Schedule -->
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditSchedule.php?id=1'" >
				<h4 class="scheduleHolderTitle">Bryan Smith</h4>
				<div class="shceduleHolderDateTime">
					<span class="scheduleHolderDate">02/04/2018</span>
					<span class="scheduleHolderTime">16:30</span>
				</div>
				<p class="scheduleHolderComment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nibh, pulvinar hendrerit vehicula a, aliquet eu urna. Sed a leo eget odio mattis mattis sodales vel mi.</p>	
			</div>
			<!-- Schedule -->
			<div class="mainHolder_ScheduleHolder" onclick="window.location.href = 'EditSchedule.php?id=1'" >
				<h4 class="scheduleHolderTitle">Bryan Smith</h4>
				<div class="shceduleHolderDateTime">
					<span class="scheduleHolderDate">02/04/2018</span>
					<span class="scheduleHolderTime">16:30</span>
				</div>
				<p class="scheduleHolderComment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nibh, pulvinar hendrerit vehicula a, aliquet eu urna. Sed a leo eget odio mattis mattis sodales vel mi.</p>	
			</div>

		</section>
	</body>
</html>