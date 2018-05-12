<?php
require "../assets/view/body.php";


$body = new body("Patient","Doc");


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
			<h2 class="main_HolderTitle">Regjistri i shëndetit</h2>
			
		</section>
	</body>
</html>