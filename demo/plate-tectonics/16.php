<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'plate-tectonics-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Plate Tectonics"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/hexaflip.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #9A663E; }
		h2 { color: #196B92; }
		.wrap { border-color: #C58F70; }
		.bg { background-image: url(assets/16/bg.jpg); overflow: hidden;}
		.fa, .lang-menu a { color: #1AA257; }
		#hexaflip { margin: 0 auto auto auto; }
		#box { text-align: center; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }
		#buttons .next { display: none; }
		#question ul li { margin: 8px 0; }
		
		.map { text-align: center; }
		.map p { font-size: 21px; }
		.map img { cursor: pointer; }
		#larger { position: absolute; background: rgba(0, 0, 0, .8); width: 100%; height: 100%; margin: 0; z-index: 1000; display: none; }
		#larger img { margin: 2% 4%; width: 92%; }
		#larger div { z-index: 1001; text-align: center; cursor: pointer; }
		#larger span { background: white; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; padding: 5px; }
		.close { margin-top: -10px; text-align: center; }

		@media only screen and (max-width: 1250px) {
			#question img{ width: 80% }
			#box p{ float: left; width:68%; }	
			#hexaflip{ float: left; padding-left: 28px; }
		}

		@media (max-width: 1250px){
		  .container_12 .lmap {
		    width: 70% !important;
		    height: 75%;
		    margin-left: 15% !important;
		    margin-top: 4% !important;
		  }
		}

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			.container_12 .lmap { width: 88% !important; margin-left: 5% !important; margin-top: 7% !important; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			.container_12 .lmap { height: auto; width: 90% !important; margin-left: 4% !important; margin-top: 12% !important; }
		}
		
	<?php if ($language == 'es_ES') : ?>
		p {font-size: 22px; margin: 0px 0}
		h2 {margin-top: 0px; }
		li {font-size: 22px;}
		.map p{font-size: 18px; margin-top: -10px;}
		img {margin-top: 0px;}

		#larger img {margin:2% 6%; width:88%;}
	<?php endif; ?>
	<?php if ($language == 'ar_EG') : ?>
		#larger img {margin: 2% 6%; width:88%;}
	<?php endif; ?>
	<?php if ($language == 'zh_CN') : ?>
		#larger img {margin: 2% 6%; width:88%;}
	<?php endif; ?>

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12" id="larger">
				<img class="grid_12 lmap" src="assets/16/large_map.jpg" />
				<div class="grid_2 prefix_5 close"><span><?php echo _("Close me!"); ?></span></div>
			</div>
					
			<div class="container_12 clearfix">
				<div class="grid_12">
					
					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?></h1>
						<h2><?php echo _("From this map of the plates that make up the Earth's crust, which of the following statements is <span class='blink'>not</span> true?"); ?></h2>

						<ul class="grid_8">						
							<li>A. <?php echo _("The Pacific Plate is almost all ocean."); ?></li>
							<li>B. <?php echo _("The North American plate is part land and part ocean."); ?></li>
							<li>C. <?php echo _("The African Plate is all land."); ?></li>
							<li>D. <?php echo _("The Caribbean Islands are part of their own little plate."); ?></li>
						</ul>
						
						<div class="grid_4 map">
							<p><?php echo _("Click on the image to enlarge it."); ?></p>
							<img src="assets/16/map.jpg" />
						</div>
						<div class="clear"></div>

						<div id="box">
							<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

							<div id="hexaflip"></div>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="17.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Playing with jigsaw puzzles..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>
	
		$('.map img').click(function() {
			$('#larger').fadeIn();
		});
		$('.close').click(function() {
			$('#larger').fadeOut();
		});
	
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/c.png') {
				$('.answer').html("<img src='assets/c.png'><span><?php echo _("The African Plate is all land."); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - This is NOT a TRUE statement. The African plate is a combination of the continent of Africa and part of the Atlantic Ocean."); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/a.png') {
				$('.answer').html("<img src='assets/a.png'><span><?php echo _("The Pacific Plate is almost all ocean."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - This is a TRUE statement. The Pacific plate is almost all ocean, with the exception of some small islands in the middle."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('.answer').html("<img src='assets/b.png'><span><?php echo _("The North American plate is part land and part ocean."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - This is a TRUE statement. The North American Plate is part land - the continent of North America - and part ocean - the eastern half of the Atlantic Ocean."); ?></p>");

				answer = 'B';
			}

			if (hexaValue == './assets/d.png') {
				$('.answer').html("<img src='assets/d.png'><span><?php echo _("The Caribbean Islands are part of their own little plate."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - This is a TRUE statement. The Caribbean Islands are on their own little plate."); ?></p>");

				answer = 'D';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('plate-tectonics-qq3-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {

			$('.back').fadeOut();

			$('.checkanswer').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});

			$('#question').fadeOut(function(){ 

				save();

				$('#answer').fadeIn();

				window.location.hash = '#answer';
			}); 
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "15.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();

				});

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});

		var hexa, images = [
			'./assets/a.png',
			'./assets/b.png',
			'./assets/c.png',
			'./assets/d.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
