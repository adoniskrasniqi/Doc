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

		<section class="top_header"><?php $body->print_topHeaderTitle(); ?></section>
		<section class="left_menu"><?php $body->print_leftMenuItems(); ?></section>
		<section class="main_Holder" id="main_Holder"></section>
	</body>
</html>