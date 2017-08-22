<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Roweb</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="styles/layout.css" type="text/css">
	<link rel="stylesheet" href="styles/curs2.css" type="text/css">
	<link rel="stylesheet" href="styles/jquery.bxslider.css" type="text/css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="scripts/jquery.bxslider.js"></script>
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>

	<?php include 'lib/header.php';?>

	<!-- content -->
	<div class="wrapper row2">
		<div id="container" class="clear">
			<!-- content body -->


			<div class="container">

				<form action="#" method="get" id="formId">

					<h1>Login2</h1>

					<fieldset>						
						<label for="e-mail">E-mail:</label>
						<input type="text" id="email" name="email">

						<label for="parola">Parola:</label>
						<input type="password" id="parola" name="parola">
					</fieldset>
					<button type="submit">Login</button>

				</form>
			</div><!-- container -->

		</div>
		
		<?php include 'lib/footer.php';?>

		<script>
			$(function(){
				$('.bxslider').bxSlider({
					mode: 'horizontal',
					moveSlides: 1,
					slideMargin: 40,
					infiniteLoop: true,
					slideWidth: 660,
					minSlides: 3,
					maxSlides: 3,
					speed: 800,
				});

				$('ul.tabs li').click(function(){
					var tab_id = $(this).attr('data-tab');

					$('ul.tabs li').removeClass('current');
					$('.tab-content').removeClass('current');

					$(this).addClass('current');
					$("#"+tab_id).addClass('current');
				});

				$(document).on('click', '.custom-menu .target', function (e) {
					$('.custom-menu').find('.active').removeClass('active');
					$(this).addClass('active');
				});
			});
		</script>
		<script src="scripts/sandraValidare.js"></script>
	</body>
	</html>