
<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
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

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #d4137e; }
		.bg { background-image: url(assets/4/bg.jpg); }

		#screen1 p.grid_7 {
			width:61.3333%;
		}

		img { border: 2px solid #9c9de5;}

		.scrn1img {margin-left: 40px; width: 90%;}
		.scrn2img {width: 100%; margin-top: 0; margin-bottom: 0;}
		.scrn3img {margin: 15px 230px; height: 350px;}
		.img1cap {margin: 0 0 0 55px;}
		#screen2, #screen3 { display: none; }

		#buttons .next { display: none; }
		
		.next1, .prev { position: absolute; top: 36% }
		
		.next1 { right: 43px; cursor: pointer;}
		.prev { left: 43px;  cursor: pointer;}
		#flashlight { min-width: 380px; position: relative; background: url("assets/4/4c.png") top left/100% 100%; height: 230px; width: 440px; margin: 0 auto;}
		#flashlight p { position: absolute; font-size: 18px; color: #000; width: auto; background-color: transparent;}
		#case {top: 3%; left: 8%;}
		#spring {top: 71%; left: 5%;}
		#bulb {top: 4%; left: 88%;}
		#switch {top: -2%; left: 41%;}
		#wire {top: 3%; left: 67%;}
		#protective-glass {top: 79%; left: 84%; text-align: center; line-height: 16px;}
		#reflector {top: 79%; left: 65%;}
		#dry-cells {top: 82%; left: 40%;}

		#screen3 .scrn2img { width: 40%; margin-top: 1%; }
		#screen3 .grid_12 { text-align: center; }
		#screen3 > div > p.grid_12 { text-align: left; line-height: 25px; font-size: 22px; }
		#screen3 > div > p.note { font-size: 21px; margin: 0; }
		#screen3 div#flashlight p { font-size: 16px; }
		
		@media only screen and (max-width: 1250px) {
			#screen3 .scrn2img { width: 30%; margin: 0; }
			#screen3 > div > p { font-size: 20px !important; }
			#screen3 #flashlight { width: 50% !important; height: 210px; }
			#protective-glass { top: 76%; }
		}
		@media only screen and (max-width: 940px) {
			#screen3 div#flashlight p { font-size: 14px; }
		}
	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12 clearfix">
				<div class="grid_12">
				
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... electric circuits"); ?></h1>
						<p class="grid_12"><?php echo _("The most fundamental concept of almost any electrical device is the idea of a <span class='key'>circuit</span>. A circuit allows <span class='key'>electrons</span>, which are tiny invisible negatively charged particles, to flow through a wire or another conductor. The <span class='key'>electric current</span> (the flowing electrons) moves from a source of electrical energy - such as a <span class='key'>battery</span> or electrical generator - to a device that needs electrical energy to operate – like a light bulb, an electric motor, or a computer chip. In sophisticated electrical devices, such as a computer, circuits can be very complex, but at its core, every complex circuit begins with a <span class='key'>simple circuit</span> composed of three basic components:<br>"); ?></p>
						<p class="grid_7">
							<span>1. <?php echo _("a source of electrical energy – like a battery;"); ?></span><br>
							<span>2. <?php echo _("a device that uses electrical energy – like a light bulb; and"); ?></span><br>
							<span>3. <?php echo _("an electrical conductor, such as a wire or other metal, that allows electricity to flow from the electrical source to the device and back again –  as in the case of a battery operated bulb in a flashlight."); ?></span>
						</p>
						<div class="grid_4">
							<p class="img1cap"><?php echo _("Simple Electric Circuit"); ?></p>
							<img class="scrn1img" src="assets/4/4a.png" />
						</div>
						<div class="clear"></div>
						
					</div>
					<div id="screen2" class="screen">
						<div class="clear"></div><br>
						<div class="grid_6 prefix_3 suffix_3">
							<img  class="scrn2img" src="assets/4/4b.png" />
						</div>
						<div class="grid_12">
							<p><?php echo _("The term \"circuit\" comes from the same Latin language root \"circ\" - as in the word circle. When you draw a circle, you start at one point and come all the way back to it. Can you think of other words that come from that same Latin root? Even though electrical circuits might not always be in the shape of circles, the idea is that electrical current flows in a path that starts at the source of the electrical energy, flows through the circuit, and finally comes back to that source. Sometimes simple circuits can have a switch, like in the flashlight, but it isn’t absolutely necessary."); ?></p>
						</div>				
					</div>

					<div id="screen3" class="screen">
						<div class="grid_12">
							<div class="grid_12">
								<img  class="scrn2img" src="assets/4/4b.png" />
							</div>
							<div class="clear"></div>
							<p class="grid_12"><?php echo _("Look carefully at the diagram above. You can trace the flow of electricity in the circuit. It starts by coming out of one end of the battery, flows through the wire to the side of the bulb, then through the bulb making the bulb light up, then out the bottom of the bulb and through the wire back to the battery. Flashlights are a good example of a simple circuit. Can you trace the circuit in this diagram of a flashlight?") ?></p>
							<p class="note"><?php echo _("A simple circuit inside a flashlight"); ?></p>
							<div id="flashlight">
								<p id="case"><?php echo _("plastic case"); ?></p>
								<p id="spring"><?php echo _("spring"); ?></p>
								<p id="switch"><?php echo _("switch"); ?></p>
								<p id="dry-cells"><?php echo _("battery"); ?></p>
								<p id="bulb"><?php echo _("bulb"); ?></p>
								<p id="reflector"><?php echo _("reflector"); ?></p>
								<p id="protective-glass"><?php echo _("protective<br/>glass"); ?></p>
								<p id="wire"><?php echo _("wire"); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Drawing a circle..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jquery.cycle2.js"></script>
	<script src="js/responsiveslides.js"></script>

	
	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 3;

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

		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
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
				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {

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
