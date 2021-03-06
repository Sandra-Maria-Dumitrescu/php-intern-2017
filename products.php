<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Roweb</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="styles/curs2.css" type="text/css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" href="styles/jquery.bxslider.css" type="text/css">
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
    <div id="slider">
		<ul class="bxslider">
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>		  
		</ul>
	</div>    
  </div>
  
	<div class="container">
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Tab One</li>
			<li class="tab-link" data-tab="tab-2">Tab Two</li>
			<li class="tab-link" data-tab="tab-3">Tab Three</li>
		</ul>

		<div id="tab-1" class="tab-content current">

          <?php include 'db/getProducts.php';?>

			<!-- <div class="product">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>	    
			</div>

			<div class="product">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>
			<div class="product">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>
			<div class="product">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>
			<div class="product last">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>
			
			<div style="clear:both;"></div>
			
			<div class="product">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>
			<div class="product">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>
			<div class="product">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>
			<div class="product">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>
			<div class="product last">
				<img src="images/demo/80x80.gif" alt="">
				<div style="clear:both;"></div>
				<span> The product title </span>
			</div>-->
			<!-- <div style="clear:both;"></div>  -->
			
		</div>

		<div id="tab-2" class="tab-content">
			 <div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product last">

			</div>
			<div style="clear:both;"></div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product last">

			</div>
			<div style="clear:both;"></div>
		</div>
		<div id="tab-3" class="tab-content">
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product last">

			</div>
			<div style="clear:both;"></div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product">

			</div>
			<div class="product last">

			</div>
			<div style="clear:both;"></div>
		</div>

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

</body>
</html>
