<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

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

		h1 { color: #d11848; }
		.wrap { border-color: #34B6B1; }
		.bg { background-image: url(assets/6/bg.jpg); }

		#screen2 { display: none; }

		#buttons .next { display: none; }

		#screen2 img { width: auto; border-radius: 0; }

		#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%; overflow: hidden;}
		.pet:hover {cursor: pointer;}
		.click {text-align: center;font-size:22px;}
		#close { background: white; color: #406468; display: block; margin: 10px auto; width: 120px; padding:5px 10px; border-radius: 5px;text-align:center;}
		#close:hover { cursor: pointer; }
		span.view { text-align: center; display: block; margin: 0 auto; font-size: 25px; color: #0549A0; }
		.popup img { display: block; width: auto;  width: 200px;}

		table { font-size: 20px; text-align: center; margin-top: 10px; }
		table img { width: auto; margin: 0; width: 50px; }
		thead { background: #9ebde9; }
		td:first-child { width: 140px; text-align: left; }
		td { background: #afebff; }
		th:nth-child(3), th:nth-child(4) { width: 250px; }
		td, th { padding: 5px; border: 1px solid #003471; }

		@media only screen and (max-width : 1250px) {
			table { font-size: 16px !important; margin-top:50px; margin-left:2%;}
			table img { width: 43px !important; }
			th:nth-child(3), th:nth-child(4) { width: 220px; }
		}

		@media only screen and (max-width : 960px) {
			table { font-size: 12px !important; margin-top:50px; margin-left:2%;}
			table img { width: 43px !important; }
			th:nth-child(3), th:nth-child(4) { width: 200px; }
		}

		@media only screen and (max-width : 780px) {
			table { font-size: 10px !important; margin-top:50px; margin-left:2%;}
			table img { width: 40px !important; }
			th:nth-child(3), th:nth-child(4) { width: 150px; }
			#screen1 {font-size: 18px;}
		}

		@media only screen and (max-width : 600px) {
			table { font-size: 10px !important; margin-top:50px; margin-left:2%;}
			table img { width: 40px !important; }
			th:nth-child(3), th:nth-child(4) { width: 150px; }
			#screen1 {font-size: 15px;}
		}

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			.popup img { width: 370px; }
			#close { margin: 50px auto 10px; }
			table { width: 100%; margin-left: 0; }
		}
		.bg {
		    overflow: hidden;
		}
		table {
		    margin-left: auto;
		    margin-right: auto;
		}
		td img {
		    width: 25% !important;
		}
		div#screen1 p {
		    line-height: 22px;
		}
	<?php if ($language == 'es_ES') : ?>
	@media only screen and (max-width: 960px){

	}
	<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv" >
				<table>
					<thead>
						<th><?php echo _("Planet"); ?></th>
						<th><?php echo _("Average Distance from the Sun"); ?></th>
						<th><?php echo _("Number of Earth Days required to Orbit the Sun (rounded to nearest whole number)"); ?></th>
						<th><?php echo _("Number of Earth Years required to Orbit the Sun (rounded to nearest whole number)"); ?></th>
					</thead>
					<tbody>
						<tr>
							<td><img src="assets/6/mercury.png" /><span><?php echo _("Mercury"); ?></span></td>
							<td><?php echo _("57 million km"); ?></td>
							<td><?php echo _("88"); ?></td>
							<td><?php echo _("0.24"); ?></td>
						</tr>
						<tr>
							<td><img src="assets/6/venus.png" /><span><?php echo _("Venus"); ?></span></td>
							<td><?php echo _("108 million km"); ?></td>
							<td><?php echo _("225"); ?></td>
							<td><?php echo _("0.62"); ?></td>
						</tr>
						<tr>
							<td><img src="assets/6/earth.png" /><span><?php echo _("Earth"); ?></span></td>
							<td><?php echo _("150 million km"); ?></td>
							<td><?php echo _("365"); ?></td>
							<td><?php echo _("1"); ?></td>
						</tr>
						<tr>
							<td><img src="assets/6/mars.png" /><span><?php echo _("Mars"); ?></span></td>
							<td><?php echo _("228 million km"); ?></td>
							<td><?php echo _("730"); ?></td>
							<td><?php echo _("2"); ?></td>
						</tr>
						<tr>
							<td><img src="assets/6/jupiter.png" /><span><?php echo _("Jupiter"); ?></span></td>
							<td><?php echo _("779 million km"); ?></td>
							<td><?php echo _("4380"); ?></td>
							<td><?php echo _("12"); ?></td>
						</tr>
						<tr>
							<td><img src="assets/6/saturn.png" /><span><?php echo _("Saturn"); ?></span></td>
							<td><?php echo _("14,300 million km"); ?></td>
							<td><?php echo _("10,585"); ?></td>
							<td><?php echo _("29"); ?></td>
						</tr>
						<tr>
							<td><img src="assets/6/neptune.png" /><span><?php echo _("Neptune"); ?></span></td>
							<td><?php echo _("28,800 million km"); ?></td>
							<td><?php echo _("30,660"); ?></td>
							<td><?php echo _("84"); ?></td>
						</tr>
						<tr>
							<td><img src="assets/6/uranus.png" /><span><?php echo _("Uranus"); ?></span></td>
							<td><?php echo _("45,000 million km"); ?></td>
							<td><?php echo _("58,400"); ?></td>
							<td><?php echo _("165"); ?></td>
						</tr>
					</tbody>
				</table>
				
				<span id="close"><?php echo _("Close me!"); ?></span>
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("More big ideas about... our solar system"); ?></h1>
						<p><?php echo _("The Sun exerts a very strong gravitational pull on the planets in our solar system. With the Sun at the center of our solar system, a balance of gravitational forces keeps the planets orbiting the Sun. The time it takes the planets to journey around the Sun (orbit) varies widely. Generally, the planets closer to the Sun such as Mercury, Venus, Earth and Mars complete one <span class='key'>revolution</span> around the Sun much more quickly than those planets such as Jupiter, Saturn, Uranus and Neptune that are much further away. Click on the table below to see if you can see this pattern."); ?></p>
							<div class="popup">
								<!-- <span class="view"><?php echo _("Click on the table below to see if you can see this pattern."); ?></span> -->
								<img src="assets/6/table.png" class="small pet" />
							</div>
						<p><?php echo _("Advancements in technologies made by scientists and engineers have led to great discoveries about the detailed structure and composition of our solar system. Manned space crafts and unmanned probes have been used to gather information about the surface of the moon while space probes and robots have recorded details about the surface structure and composition of Mars. Here on Earth, advances in spectroscopy (the study of the absorption and radiation of light by matter) and computers have provided much information about the chemical composition of the solar system and the universe."); ?></p>							
					</div>

					<div id="screen2" class="screen">
						<p><?php echo _("Astronomers use an instrument called a \"<span class='key'>spectrometer</span>.\" This instrument analyzes emission of light rays by spreading them out through a prism. The composition of the objects being viewed can then be determined by the patterns created by the spectrometer. Figure 1 below shows the spectrum emitted by white light. Figure 2 shows the spectrum emitted by energized hydrogen atoms. In this way, scientists are able to conclude that the Sun is composed largely of hydrogen (and helium)."); ?></p>
						<p><?php echo _("Figure 1. Full spectrum of white light."); ?></p>
							<img src="assets/6/fig1.png" />
						<p><?php echo _("Figure 2. Spectrum of energized hydrogen atoms."); ?></p>
							<img src="assets/6/fig2.png" />
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Using spectrometer..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1);

		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});	

		if (hash != "") {
			$('.screen').hide();
			$('#screen2').show();

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
		}
		
		$('.back').click(function() {
			if ($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
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
			if ($('#screen1').is(':visible')) {

				$('.back').fadeOut();
				$('#graphDiv').fadeOut();

				$('.readmore').fadeOut(function() {					
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
