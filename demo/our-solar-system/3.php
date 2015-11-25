<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
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
	<link rel="stylesheet" href="css/tooltipster.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #AD4C00; }
		h2 { color: #770A73; }

		.wrap { border-color: #D16824; }
		.bg { background: url(assets/3/bg.jpg); overflow: hidden;}

		#answer p { text-align: left; }
		#answer > p { background-color: rgba(234, 234, 234, 0.8); border-radius: 5px; padding: 5px;}

		html[dir=rtl] #answer p { text-align: right; }

		#buttons .next { display: none; }

		#sortable { width: 100%; padding: 10px 0; }
		#sortable li { background-color: #fcf49a; text-align: center; color: black; margin-bottom: 14px; border-radius: 5px; cursor: move; height: 62px; font-size: 20px; padding: 5px; border: dashed #C5555D;}
		#sortable li:last-child { margin-bottom: 0; }
		
		.ac-custom li { padding: .1em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #32058D; }
		.ac-custom label { color: #000; padding-left: 25px; }
		.ac-custom label::before { border: 2px solid #32058D; height: 14px; width: 14px; margin-top: -8px; }
		.ac-custom svg path { stroke: #32058D; }
		.ac-custom svg { height: 10px; width: 10px; left: 4px; margin-top: -4px; }

		.q1 {width:70%; margin: 0 auto;}
		.q1-img { margin-top: 2px; }
		.q1-img li {width: 70px;}

		.caption {
			font-size: 14px;
			margin-top: -11px;
			margin-bottom: -5px;
			margin-left: -5px;
			width: 70px;
			color: #000;
		}

		ul.planets { position: absolute; bottom: 60px; left: 135px; }
		ul.planets li { display: inline-block; }
		ul.planets li img { width: auto; }
		
		#question3 img { cursor: pointer; }

		.planets input[type="radio"] { display: none; }
		.planets label:before { margin: 0; border: 0; height: 0; width: 0; padding: 0; position: static; }
		.planets label { padding: 0; margin: 0; }
		.planets svg { display: none; }

		.planets input[type="radio"]:checked + label img {
			border: 4px solid #777;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			.q1-img img { margin: 2px auto; }
			ul#sortable li { height: 58px; }
			.q1-img li { width: 70px; margin-top: 6px; }
			li p.caption { margin-top: -5px; }
			.q1-img { margin-top: 9px; }
		}
		@media only screen and (max-width: 960px){
			h1.grid_12 { font-size: 21px; }
			#sortable li {
			    height: 30px !important;
			    line-height: 16px !important;
			}
			#sortable {
			    width: 100% !important;
			    padding: 10px 0 !important;
			}
			li img {
			    width: 45px;
			    margin-left: 10px;
			}
			.q1-img li {
			    width: 70px;
			    height: 60px;
			}
			.caption {
			    font-size: 14px;
			    margin-bottom: -5px;
			    margin-left: -5px;
			    width: 70px;
			    color: #000;
			}		
			body, h2 {
			    font-size: 20px;
			    line-height: 20px;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Checking what you already know about... our solar system"); ?></h1>
						<div class="grid_12">
							<h2><?php echo _('Rearrange the descriptions on the right by dragging them next to the pictures on the left they best describe.'); ?></h2>
							<div class="q1">
								<div class="grid_2 q1">
									<div class="q1-img">
										<ul>
											<li><img src="assets/3/sr6.png" title="<?php echo _('Comet'); ?>"/><p class="caption"><?php echo _("Comet"); ?></p></li>
											<!-- <li><img src="assets/3/sr2.png" class="tooltip" title="<?php echo _('Dwarf Planet'); ?>"/></li> -->
											<li><img src="assets/3/sr1.png" title="<?php echo _('Star'); ?>"/><p class="caption"><?php echo _("Star"); ?></p></li>
											<li><img src="assets/3/sr4.png" title="<?php echo _('Moon'); ?>"/><p class="caption"><?php echo _("Moon"); ?></p></li>
											<li><img src="assets/3/sr5.png" title="<?php echo _('Planet'); ?>"/><p class="caption"><?php echo _("Planet"); ?></p></li>
											<li><img src="assets/3/sr3.png" title="<?php echo _('Asteroid'); ?>"/><p class="caption"><?php echo _("Asteroid"); ?></p></li>
										</ul>
									</div>
								</div>
								<div class="grid_10">
									<div id="sortable-container">
										<ul id="sortable">
											<li id="1"><?php echo _("A celestial body that orbits a planet."); ?></li>
											<li id="2"><?php echo _("A small rocky celestial body that may become a meteorite when it enters the earth’s atmosphere."); ?></li>
											<li id="3"><?php echo _("A celestial body made up mostly of dust and ice."); ?></li>
											<!-- <li id="4" class="font"><?php echo _("A small, planet-like celestial object with a gravitational field too weak to clear out neighboring objects."); ?></li> -->
											<li id="5"><?php echo _("A huge ball of gas that produces tremendous heat and light energy."); ?></li>
											<li id="6"><?php echo _("A large celestial body that orbits a star."); ?></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="clear"></div>	
						</div>
						
						<div class="clear"></div>
					</div>

					<div id="answer">
						<p><?php echo _("The universe is made up of many natural celestial bodies such as stars; planets that orbit the stars; moons that orbit the planets; and comets and asteroids that may also orbit stars. Man has also made some artificial celestial bodies such as communication satellites that orbit the earth."); ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Counting planets..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.tooltipster.min.js"></script>
	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;

		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#777'); // Change border-color

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg.jpg)');
					$('.wrap').css('border-color', '#000'); // Change border-color

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn();
						$('.back').fadeIn();
				   	});
				}
			});
		}

		$('.checkanswer').click(function() {
			$('#question').fadeOut(function() {
				$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
				$('.wrap').css('border-color', '#777'); // Change border-color

				$('#answer').fadeIn();

				$('.back').fadeOut(); 

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				window.location.hash = '#answer';
			});
		});

		$('.back').click(function() {
			if ($('#answer').is(':visible')) {
				$('#answer').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/3/bg.jpg)');
					$('.wrap').css('border-color', '#000'); // Change border-color 

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn();
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '2.php'); }
		});

		$("#sortable").sortable({ scroll: false, containment: "#sortable-container" });
		$(document).ready(function() {
            $('.tooltip').tooltipster();
        });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
