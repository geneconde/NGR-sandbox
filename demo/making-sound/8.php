<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10 to 15) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(10, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('module');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'], $problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg { background-image: url(assets/10/bg.jpg); }

		#screen2, #screen3 { display: none; }
		.grid_3 {  width:30% !important; }
		.grid_8 { width: 60% !important;}

		.table-title { text-align: center; padding-bottom: 10px; }
		th, .table-title {font-weight: bold;}

		#table1, #graphDiv2 table {  text-align: center; width: 100%; margin: auto; background-color: #fff; font-size: 18px; }

		#screen1 .table-title { font-size: 20px; padding: 0;}
		#screen1 img { width: 90% !important; margin: 10px 5% 0;}
		#screen1 > .grid_5 > p:first-child { margin-top: 0;}
		#table1 { font-size: 16px;}
		#table1 { background-color: transparent; width: 80%;}
		#table1 > div:first-child { width: 500px; margin: 10px auto; margin-top:10%; padding: 30px; }
		#table1 table th { width: 50%; }
		#table1 tr td:first-child {text-align: left;}


		#screen2 img { height: 250px;}
		#screen3 img { margin: 10% 0;}

		.side_image {margin-top: 57px; padding: 0 10%;}
		.side_image img {height:320px; width: 100%; margin: 10px auto;  }
		.side_image_2 img {height:350px; width: 200px; margin: 10px auto; width: 100%;}
		.side_image_2 {margin-left: 15px; margin-top:10px; padding: 0 5%;}
		.text-justify { text-align: justify; }

		.rslides img { border: 5px solid #f9cffd; }

		#buttons .next { display: none; }
		.button { background-color: #e0e67c; border-radius: 5px; padding: 5px; margin: 10px auto; text-align: center; }
		.button:hover { cursor: pointer; }
		#close {width: 150px; }
		#btn_view { width: 180px;}

		.a{ font-size: 130%; 	position: absolute; top: 7%; 	left: 40%;   color: #A964B2 !important; }
		.b{ font-size: 76%; 	position: absolute; top: 32%; 	left: 40%; }
		.c{ font-size: 76%; 	position: absolute; top: 23%; 	left: 46%; }
		.d{ font-size: 76%; 	position: absolute; top: 23%; 	left: 54%; }
		.e{ font-size: 76%; 	position: absolute; top: 23%; 	left: 60%; }
		.f{ font-size: 76%; 	position: absolute; top: 71%; 	left: 35%; }
		.g{ font-size: 76%; 	position: absolute; top: 54%; 	left: 47%; }
		.h{ font-size: 76%; 	position: absolute; top: 66%; 	left: 56%; }


	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... making sound"); ?></h1>
						<div class="grid_5">							

							<p><?php echo _("Sound moves through air at over three soccer fields per second. Air, water, steel and wood are examples of different media (which is plural of medium). Without a medium to vibrate, there can be no sound! That means you can hear sounds underwater but not in outer space."); ?></p>

							<p><?php echo _("How fast sound travels in a material depends on how tightly the material is packed and how elastic or stretchy the material is. The following table lists the speed of sound in various materials:"); ?></p>

							<div class="clear"></div>

						</div>
						<div class="grid_7">						
							<div class="grid_12">
								<img src="assets/10/10a.jpg" alt="">	
								<p class="table-title"><?php echo _("Data Table: Speed of Sound in Different Media"); ?></p>
								<table id="table1">
									<thead>
										<th><?php echo _("Meduim"); ?></th>
										<th><?php echo _("Speed in feet per second"); ?></th>
									</thead>
									<tbody>
										<tr>
											<td><?php echo _("Air at 59°F"); ?></td>
											<td>1,116</td>
										</tr>	
										<tr>
											<td><?php echo _("Aluminum"); ?></td>
											<td>16,000</td>
										</tr>	
										<tr>
											<td><?php echo _("Brick"); ?></td>
											<td>11,980</td>
										</tr>	
										<tr>
											<td><?php echo _("Distilled water at 77°F"); ?></td>
											<td>4,908</td>
										</tr>	
										<tr>
											<td><?php echo _("Glass"); ?></td>
											<td>14,900</td>
										</tr>	
										<tr>
											<td><?php echo _("Seawater at 77°F"); ?></td>
											<td>5,023</td>
										</tr>	
										<tr>
											<td><?php echo _("Steel"); ?></td>
											<td>17,100</td>
										</tr>	
										<tr>
											<td><?php echo _("Wood (maple)"); ?></td>
											<td>13,480</td>
										</tr>		
									</tbody>
								</table>				
							</div>
						</div>

						
					</div><!--screen 1-->

					<div id="screen2" class="screen">
						<div class="grid_12">
							<p><?php echo _("Those speeds might look pretty fast, but they're pretty slow compared to another type of wave. Light waves carry energy at over 670,000,000 miles per hour. At that speed, light can travel from the moon to Earth in just over one second. By comparison, light travels through air a million times faster than sound. That's why you see the flash of lightning before you hear the crack of the thunder, or see a batter knock a baseball deep into the outfield before you hear the crack of the bat. During a thunderstorm, you can determine how far you are from the lightning by counting the seconds between when you see the flash, and when you hear the thunder. Sound travels close to one mile in five seconds. So if you divide the seconds between the flash and the thunder by five, you'll know how many miles away the lightning hit."); ?></p>
							<div class="grid_6">
								<img src="assets/10/10b1.jpg"/>
							</div>
							<div class="grid_6">
								<img src="assets/10/10b2.png"/>
							</div>
							<div class="clear"></div>						
						</div>
					</div>

					<div id="screen3" class="screen">
						<div class="grid_12">
							<div class="grid_6 prefix_3 suffix_3">
								<img src="assets/8/HumanEar.jpg"/>
								<h2 class="a" ><?php echo _("HUMAN EAR"); ?></h2>
								<p class="b" ><?php echo _("Ear Canal"); ?></p>
								<p class="c" ><?php echo _("Malleus"); ?></p>
								<p class="d" ><?php echo _("Incus"); ?></p>
								<p class="e" ><?php echo _("Stapes"); ?></p>
								<p class="f" ><?php echo _("Pinna"); ?></p>
								<p class="g" ><?php echo _("Ear Drum"); ?></p>
								<p class="h" ><?php echo _("Eustachian Tube"); ?></p>
							</div>
							<p><?php echo _("Most of the time, we hear sounds that travel through air. Sound waves in the air make our ear drums (the thin covering inside your ears) vibrate and the ear drum then causes tiny bones in your ear (the smallest bones in our bodies) to vibrate. Nerves in your ears then send a message to your brain about the sound you are hearing. So ears are specialized body parts designed to receive sound."); ?></p>
							<div class="clear"></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Swinging a bat..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		var screenCount = 3;
		var hash = window.location.hash.slice(1);

		$('#btn_view').click(function() {
			$('#graphDiv1').fadeIn();
		});

		$('#close').click(function() {
			$('#graphDiv1').fadeOut();
		});

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + (screen + 1));

				} else {
					$('.back').fadeOut();

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}
		
		$('.next').click( function(){
			document.location.href = "9.php";
		});

		$('.back').click(function() {
			if ($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			}else {
				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen3').fadeOut(function () {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() {
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			} else{
				$('.back').fadeOut();

				$('.readmore').fadeOut(function() {
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen2').fadeOut(function() {
					$('#screen3').fadeIn();

					window.location.hash = '#screen3';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
