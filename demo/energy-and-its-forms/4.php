<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES"){ ?> dir="es" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/normalize.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		h1 { color: #e7ea90; }
		p { color: #fff; text-align: left; }
		#buttons .next { display: none; }
		.wrap { border-left: 1px dashed #009eaa; border-right: 1px dashed #009eaa; }
		.bg { background-image: url(images/4/bg.jpg); }
		#screen2, #screen3 { display: none; }
		#screen1 .images { background: url(images/4/frame.png) no-repeat; width: 484px; height: 341px; margin: 230px auto 0; float: none; list-style: none; }
		#screen1 .images img { display: block; margin: 38px 0 0 42px; }
		#screen2 .images { padding: 40px 0; margin: auto; width: 90%; overflow: hidden; }
		#screen2 .frame { background: url(images/4/frame-small.png); }

		#screen2 p { margin-bottom: 20px; clear: both; }
		#screen2 img { display: block; margin: 27px 0 0 34px; width: 291px; }
		#screen3 { text-align: center; }
		#screen3 p { padding-top: 20px; }
		#screen3 img { display: inline-block; margin-top: 30px; }

		#screen2 .frame {
			height: auto !important;
			width: 45% !important;
			background-size: 100% 100%;
			text-align: center;
		}
		#screen2 .frame:first-child { float: left; }
		#screen2 .frame:last-child { float: right; }
		#screen2 .frame img {
			width: 78% !important;
			margin: 0 !important;
			display: initial !important;
			padding-top: 10%;
			padding-bottom: 10%;
		}
		#screen2 .images {
			padding-bottom: 10px;
		}
		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 31px !important; }
			#screen1 p { font-size: 22px !important; }
			#screen2 p { font-size: 22px; }
		<?php endif; ?>

		html[dir="rtl"] #screen1 p { float:right;text-align: right; margin-top: 90px; }
		html[dir="rtl"] #screen2 p { text-align:right; }
		html[dir="rtl"] #screen3 p { text-align:right; }
		html[dir="rtl"] #screen2 img { margin:27px 34px 0 0; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#screen1 p { width: auto; float: none; }
			#screen1 .images { margin: 20px auto 0; display: block; float: none; }
			#screen2 .images { width: 100%; }
			#screen2 .frame { margin-right: 0; }
			html[dir="rtl"] #screen1 p { float: none; }
		}	
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			h1 { font-size: 30px !important; padding-bottom: 0; }
			#screen1 p { font-size: 21px !important; }
			#screen2 .images { padding: 10px 0; }
			#screen3 img { margin-top: 0; }
			#screen3 p { padding-top: 10px; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 40px !important; }
			p.fl { line-height: 25px; }
			#screen1 .images {
				background-size: contain !important;
				width: 375px !important;
			}
			#screen1 .images img {
				width: 300px !important;
				height: 200px !important;
				margin: 35px !important;
			}
			#screen2 p {
				margin-bottom: 5px;
				line-height: 25px;
			}
			#screen3 img { width: 45%; padding-top: 20px; }
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="screen1">
				<h1><?php echo _("Reviewing big ideas... about energy and its forms"); ?></h1>
				<p class="fl"><?php echo _("What is energy? Scientists define <span class='key'>energy</span> as the ability to do <span class='key'>work</span>. Doing work means moving or changing something in some way. Lifting a book from a table, running around a playground, and blowing up a balloon all involved doing work —all require energy. The effort needed to move or change something determines how much energy is needed. The bigger something is, the more energy it takes to move it. The farther something has to be moved, the more energy it takes to move it. The more something has to be changed, the more energy it takes to change it. They all require work!"); ?>
				</p>

				<div class="fr images">
					<img src="images/4/1.jpg">
					<img src="images/4/2.jpg">
					<img src="images/4/3.jpg">
				</div>
			</div>

			<div id="screen2">
				<div class="images">
					<div class="frame"><img src="images/4/pendulum.jpg" alt="<?php echo _("Pendulum"); ?>"></div>
					<div class="frame"><img src="images/4/baby.jpg" alt="<?php echo _("Baby"); ?>"></div>
				</div>

				<p><?php echo _("There are two basic kinds of energy that are defined by an object's motion or location. <span class='key'>Kinetic energy</span> is the energy of a moving object. The amount of kinetic energy of a moving object has depends on how big the object is and how fast it is moving. The faster something is moving or the bigger a moving object is, the more energy it has and the more work it can do."); ?></p>

				<p><?php echo _("Objects that are not moving can have stored energy called <span class='key'>potential energy</span>. For example, when you are sitting at the top of a slide in the playground, your body has potential energy that will allow you to ride down the slide when it is your turn to go. The potential energy you have sitting at the top of the slide has the potential to do work. That potential energy is changed into kinetic energy as you go down the slide."); ?></p>
			</div>

			<div id="screen3">
				<img src="images/4/rollercoaster.gif" height="" alt="<?php echo _("Roller Coaster"); ?>">
				<p><?php echo _("When a roller coaster ascends (goes up), it builds up potential energy. As it descends (comes down), it releases kinetic energy."); ?></p>
				<p><?php echo _("Potential energy can be stored in different ways. The food we eat, the fuel we burn in our cars, fireplace or furnaces and the batteries in our flashlights and cell phones all have potential energy. They can all do some kind of work."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Blowing balloons..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/cycle.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		more = $('a.readmore'),

		screen1 = $('#screen1'),
		screen2 = $('#screen2'),
		screen3 = $('#screen3');

		screen1.find('.images').cycle({ fx: 'fade', timeout: 2000 });

		$('a.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {				
				$('h1').fadeOut();
				
				$('#screen1').fadeOut( function(){								
					$('a.readmore-toggle').parent().attr('href','#screen3');
					$('a.back-toggle').parent().attr('href','#screen1');
					window.location.hash = '#screen2';
					$('#screen2').fadeIn();
				});
			} else if ( $('#screen2').is(':visible') ) {
			$('#screen2').fadeOut(function(){													
					$('a.back-toggle').parent().attr('href','#screen2');
					window.location.hash = '#screen3';
					$('#screen3').fadeIn();
				});				
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			} 
		});

		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "3.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();	
					$('#instruction').fadeIn();
					$('#screen1').fadeIn();					
					$('a.back-toggle').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen2'); 
					$('a.back-toggle').parent().attr('href','3.php#');
				});
				$('a.back-toggle-screen').fadeOut();
			} else if($('#screen3').is(':visible')) {
				
				$('#screen3').fadeOut(function(){
					window.location.hash = '#screen2';
					$('#screen2').fadeIn();
				});	
				$('a.next-toggle').fadeOut( function(){ 
					$('a.readmore-toggle').fadeIn();
				});
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#screen3") != -1 || oldURL.indexOf("5.php") != -1) {
			screen1.fadeOut();
			screen3.fadeIn();
			back.fadeIn();
			more.fadeOut();
			next.fadeIn();
			removeHash();
			window.location.hash = '#screen3';
			back.parent().attr('href', '#screen2');
		} else if (curURL.indexOf("#screen2") != -1) {
			screen1.fadeOut(function() { 
				screen2.fadeIn();
				back.fadeIn();
				more.parent().attr('href','#screen3');
			});
			window.location.hash = '#screen2';
		}
	</script>
</body>
</html>
