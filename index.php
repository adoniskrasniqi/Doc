<?php
require "assets/controller/functions.php";

$body = new body("index");

?>
<!DOCTYPE html>
<html>
	<head>
		<?php $body->printHeader(); ?>
	</head>
	<body>
		<section class="index_Holder">
				<div class="index_SignIn_holder">
				<form method="POST">
					<span class="loadingBar" id="loadingBar"></span>
					<div class="padder">
						<img src="assets/css/img/1.png">
						<div>
							<h3>Kyçuni</h3>
							<p>për të vazhduar në Dental</p>

						</div>
						<section class="index_LoginSection">
							<div>
								<span>Emri:</span>
								<input type="text" name="username" autocomplete="off" spellcheck="false">
							</div>
						</section>
						<section class="index_LoginSection">	
							<div>
								<span>Fjalëkalimi:</span>
								<input type="password" name="password" autocomplete="off">
							</div>
						</section>
						<p class="login_ErrorText" id="login_ErrorText">Emri ose fjalëkalimi i gabuar.</p>
						<div>
							<a href="#">Keni harruar fjalëkalimin ?</a>
						</div>

						<div>
							<a href="#">Regjistrohu</a>
						</div>

						<input type="submit" name="submit" value="Kyçu" onclick="logIn(); return false;" id="submit_button">

					</div>
				</form>		
				</div>	
		</section>
	</body>
</html>