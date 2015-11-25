<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		h1 { color: #90171c; padding-bottom: 10px; }
		#buttons .next { display: none; }
		p { text-align: left }
		.key { color: #90F !important; }
		.wrap { border-left: 1px dashed #C4C4C4; border-right: 1px dashed #C4C4C4; }
		.bg { background-image: url(images/6/bg.jpg); }

		#screen2 { display: none; text-align: center; padding-top: 30px; }
		#screen2 img { display: inline-block; }
		#screen2 p { padding-top: 20px; }

		//#screen1 .left { float: left; width: 335px; padding-right: 10px; padding-top: 20px; } 
		//#screen1 .right { float: left; width: 490px; padding-left: 5px; padding-top: 20px; }
		#screen1 .right { width: 490px; margin: 40px auto 0; margin-top: 20px !important;}
		#screen1 .slide { background-color: rgba(250, 205, 138, .4); padding: 5px 10px 10px 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; position: relative; min-height: 380px; } 
		#screen1 .slide .arrows { position: absolute; width: 100%; top: 100px; }
		#screen1 .slide .data img { display: block; margin: 20px auto; }

		#left:hover, #right:hover { cursor: pointer; }
		#right { position: absolute; right: 20px; }

		#screen2 { overflow:hidden; }
		#screen2 img { margin-right: 20px; }
		#screen2 img:last-child { margin-right: 0; }
		#s7 p, #s4 p{
			font-size:21px;
		} 
		.left {width:85%}

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 31px !important; }
			.data p { font-size: 22px !important; }
			#s7 p { font-size: 18px !important; }
			#s4 p { font-size: 20px !important; }
			#screen2 p { font-size: 22px; }
		<?php endif; ?>

		html[dir="rtl"] h1 { padding-right:120px; }
		html[dir="rtl"] p { text-align: right; }
		html[dir="rtl"] .left p { padding-right:130px; }
		html[dir="rtl"] .arrows img#left { left:20px;position: absolute; }
		html[dir="rtl"] #right { position: absolute;right:0; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#screen2 { padding-top: 35px; }
		}	
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#screen1 .right { margin: 5px auto 0; }
			.left p { font-size: 22px; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 40px; }
			.slide p { line-height: 25px; font-size: 20px; }
			#screen1 .slide { min-height: 350px; }
			#s7 p, #s4 p { font-size: 18px; line-height: 20px; }
			div#screen2 img { padding-top: 10px; width: 30%; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="screen1">
			<h1><?php echo _("More big ideas... about energy and its forms"); ?></h1>

				<div class="left">
					<p><?php echo _("There are different forms of <span class='key'>energy</span>. All of them can move or change things, or basically do work!"); ?></p>
					<p><?php echo _("Browse through the slides below by clicking the left and right arrows"); ?>.</p>
				</div>

				<div class="right">
					<div class="slide">
						<div class="arrows">
							<img src="images/6/left.png" width="70" height="45" id="left">
							<img src="images/6/right.png" width="70" height="45" id="right">
						</div>

						<div id="s1" class="data">
							<img src="images/6/mechanical.jpg">
							<p><?php echo _("<span class='key'>Mechanical energy</span> is needed to push or pull objects. Hammering a nail, lifting a book, throwing a ball, and riding a bicycle or skateboard all involve mechanical energy."); ?></p>
						</div>

						<div id="s2" class="data">
							<img src="images/6/thermal.jpg">
							<p><?php echo _("<span class='key'>Thermal energy</span> is the energy of all the movement (kinetic energy) in the atoms and molecules that make up matter. <span class='key'>Heat</span> is the energy that you feel when you touch a hot pan or sit near a campfire."); ?></p>
						</div>

						<div id="s3" class="data">
							<img src="images/6/electrical.jpg">
							<p><?php echo _("<span class='key'>Electrical energy</span> also involves things moving, but this time it's electrons moving from place to place, not atoms and molecules. Electrical energy is needed to make our radios, televisions, cellphones and computers work."); ?></p>
						</div>

						<div id="s4" class="data">
							<img src="images/6/chemical.jpg">
							<p><?php echo _("<span class='key'>Chemical energy</span> is the energy change when substance(s) undergoes a chemical reaction and turn into different chemical substance(s). The heat and light from a campfire come from the chemical energy of the wood. The energy releases when the molecules that make up the wood break apart and recombine with molecules of other substance(s) as it burns."); ?></p>
						</div>

						<div id="s5" class="data">
							<img src="images/6/sound.jpg">
							<p><?php echo _("<span class='key'>Sound energy</span> is the energy of vibrating matter - such as air or metal. The vibrating matter carries the sound energy from one molecule to the next. Without matter to vibrate, there can be no sound energy."); ?></p>
						</div>

						<div id="s6" class="data">
							<img src="images/6/nuclear.jpg">
							<p><?php echo _("<span class='key'>Nuclear energy</span> is yet another form of energy. It involves splitting apart or atoms combining together to become a new element. Nuclear energy, like other energies, is used to make electricity to heat and light our homes and businesses."); ?></p>
						</div>

						<div id="s7" class="data">
							<img src="images/6/radiant.jpg">
							<p><?php echo _("<span class='key'>Radiant energy</span>, also called <span class='key'>light energy</span> is a type of wave energy that includes visible colors of the rainbow and other wave energies such as X-rays and radio waves that we can't see. The Sun is our main source of radiant energy. <span class='key'>Solar energy</span> is the term used to describe the radiant energy that comes from the Sun."); ?></p>
						</div>	
					</div>
				</div>
			</div>

			<div id="screen2">
				<img src="images/6/right.jpg">
				<img src="images/6/left.jpg">
				<p><?php echo _("An important thing to remember is that energy can change forms. For example, when you lift a book the energy in the food you ate gives your muscles mechanical energy to lift the book. As you lift the book, the book has kinetic energy. When you place the book on the table, the book now has potential energy."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Sound, nuclear, chemical..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/global.js"></script>

	<script>
	
		var hash = window.location.hash.slice(1);
	
		var back = $('a.back'),
		next = $('a.next'),
		more = $('a.readmore'),

		screen1 = $('#screen1'),
		screen2 = $('#screen2'),

		left = $('#left'),
		right = $('#right'),
		slides = $('.data'),
		currentSlide = 1;

		slides.hide();

		$('#s' + currentSlide).show();

		right.on('click', function() {
			$('#s' + currentSlide).fadeOut();

			if (currentSlide != 7) currentSlide += 1;
			else currentSlide = 1; 

			$('#s' + currentSlide).delay(500).fadeIn();
		});

		left.on('click', function() {
			$('#s' + currentSlide).fadeOut();

			if (currentSlide != 1) currentSlide -= 1;
			else currentSlide = 7;

			$('#s' + currentSlide).delay(500).fadeIn();
		});

		more.on('click', function() {
			screen1.fadeOut(function() {
				screen2.fadeIn();
				window.location.hash = '#screen2';
			});
			more.fadeOut(function() { next.fadeIn(); });
		});

		back.on('click', function() {
			if (screen1.is(':visible')) {
				document.location.href = "5.php";
			} else {
				screen2.fadeOut(function() { screen1.fadeIn();
					$('h1').show(); });
				next.fadeOut(function() { more.fadeIn(); });
			}
		});
		
		if(hash == 'screen2') {
			$('#screen1').hide();
			$('h1').hide();
			$('#screen2').show(function () {
				window.location.hash = '#screen2';
				$('img.readmore-toggle').fadeOut(function(){
					$('img.next-toggle').fadeIn();
				});
			});
		}

	</script>
</body>
</html>
