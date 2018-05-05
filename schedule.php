<?php
require "assets/view/body.php";


$body = new body("Schedule","Doc");


?>
<!DOCTYPE html>
<html>
	<head>
		<?php $body->printHeader(); ?>
	</head>
	<body>

		<section class="top_header"><h3 class="topHeader_title"><?php $body->print_topHeaderTitle(); ?></h3></section>
		<section class="left_menu"></section>
		<section class="main_Holder"></section>
	</body>
</html>