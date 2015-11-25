<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("The Air Around Us"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #0060A1; }
		
		#buttons .next, #screen2 { display: none; }
		
		.wrap { border-color: #AEF4FC; }
		.bg { background-image: url(assets/6/bg.jpg); }
		
		.balloon { background-image: url(assets/6/balloon.jpg); height: 215px; }
		.balloon span:first-of-type { margin-left: 22px; }
		.balloon span:nth-of-type(2) { float: left;margin-top: 73px;margin-left: 22px; }
		.balloon span:last-of-type { margin-right: 30px;float: right;margin-top: 73px; }
		.wrap > .bg { overflow: hidden !important; }
		#screen2 p:nth-child(2) { margin-top: 3%; }
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
		<?php if ($language == 'es_ES') : ?>	
			.container_12 .grid_7 {  width: 62.333%; }
			#screen2 p:nth-child(2) { margin-top: 0%; }
			p.grid_12 { font-size: 23px; }
			p.grid_7 { font-size: 23px; }
			p.grid_12 { margin: 0; }
			@media only screen and (max-width: 1250px){
				p.grid_6 {
				    margin: 0 !important;
				    font-size: 21px !important;
				}
				p.grid_12 {
				    margin: 0 !important;
				    font-size: 21px !important;
				}
				.balloon {
				    background-image: url(assets/6/balloon.jpg);
				    height: 189px;
				    background-size: contain;
				    background-repeat: no-repeat;
				}
				.balloon span:last-of-type {
				    margin-right: 75px;
				    float: right;
				    margin-top: 72px;
				}
				div#screen2 p {
				    font-size: 22px !important;
				}
				.container_12 .grid_4 {
				    width: 25.333% !important;
				}
			}
		<?php endif; ?>
		<?php if ($language == 'en_US') : ?>
			@media only screen and (max-width: 1250px){
				p.grid_6 {
				    margin: 0 !important;
				    font-size: 22px !important;
				}
				p.grid_12 {
				    margin: 0 !important;
				    font-size: 22px !important;
				}
				.balloon {
				    background-image: url(assets/6/balloon.jpg);
				    height: 189px;
				    background-size: contain;
				    background-repeat: no-repeat;
				}
				.balloon span:last-of-type {
				    margin-right: 75px;
				    float: right;
				    margin-top: 72px;
				}
				div#screen2 p {
				    font-size: 22px !important;
				}
				.container_12 .grid_4 {
				    width: 25.333% !important;
				}
			}
		<?php endif; ?>
		@media only screen and (max-width: 960px){
			div#screen2 p {
			    font-size: 21px !important;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... the air around us"); ?></h1>
						<p class="grid_6"><?php echo _("Many of the complex phenomena that take place in Earth's atmosphere can be explained through an understanding of density and what happens when the density of an air mass changes as a result of changes in temperature and pressure."); ?></p>
						
						<div class="grid_6 balloon">
							<span><?php echo _("Pressure"); ?></span>
							<span><?php echo _("Temperature"); ?></span>
							<span><?php echo _("Density"); ?></span>


						</div>
						
						
						<p class="grid_12"><?php echo _("<span class='key'>Density</span> is the ratio between the amount of matter found in a given quantity of an object and the amount of space that quantity takes up (its volume). How many molecules of air packed into a certain space is what we refer to as the density of air. The density of fluids such as liquids and gases can change in response to changes in temperature and pressure. Even slight decreases in temperature can lead to significant changes in air density. For example, a helium-filled balloon brought from a warm, inside room to the cold outdoors, will quickly look deflated (less filled). This is because the density of helium inside the balloon increases as the gas is cooled by the cold outside air. Consequently, the helium takes up less space inside the balloon so the volume of the balloon is less and the balloon shrinks. This makes the balloon appear more deflated than when it was in a warm room."); ?></p>
					</div>
					
					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Let's look at another example to better explain this. Have you ever opened a freezer door and watched the fog apparently roll out – especially on a warm humid day?"); ?></p>
						<p class="grid_7"><?php echo _("You might have thought that fog inside the freezer simply flowed out when the door was opened. But this isn't what happens at all. What is actually happening is, when you open the freezer door and cold air from the freezer mixes with and cools the warmer air outside the freezer, the water molecules in the warmer air condense from cooling. That means they come together to form tiny droplets that look like fog. Though we can't see cold air flowing, we can observe its movement outward and downward as the process of condensation expands over a larger volume of air."); ?></p>
						<img class="grid_4" src="assets/6/freezer.jpg" />
						<p class="grid_12"><?php echo _("This is one of the amazing phenomena that result from the complex interaction between the gasses in the air and the physical conditions (such as temperature and pressure) that take place throughout the air around us."); ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Opening the refrigerator..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2;

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + screen);
				} else {

					$('.back').fadeOut(); 

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} 

		});

		$('.readmore').click(function(){
			$('.back').fadeOut();
			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
			
			$('#screen1').fadeOut(function() {
				$('#screen2').fadeIn();

				window.location.hash = '#screen2';
			});
		});
	</script>
	
</body>
</html>
