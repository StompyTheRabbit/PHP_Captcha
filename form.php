<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>PHP Captcha</title>
	</head>
	<body>
		<h2>PHP Captcha</h2>
		<form name="captcha_test" method="POST" action="form.php">
			<p>
				<?php
					require 'inc/captcha.php';
					if(isset($_POST['send']))
					{
						if($_SESSION['captcha_success'] == "yes")
						{
							//Correct Captcha
							echo '<div style="padding-top:4px; font-weight:bold;">Correct Captcha</div>';
						}
						else if($_SESSION['captcha_success'] == "no")
						{
							//Wrong Captcha
							echo '<div style="padding-top:4px; font-weight:bold;">Wrong Captcha</div>';
						}
					}
				?>
			</p>
			<p>
				<input type="submit" name="send" id="send" value="Send" />
			</p>
		</form>
	</body>
</html>
