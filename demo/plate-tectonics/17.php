<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'plate-tectonics-qq4-a');
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
		h2 { color: #196B92; margin: 0px;}
		
		.wrap { border-color: #C58F70; }
		.bg { background-image: url(assets/16/bg.jpg);overflow: hidden; }
		.fa, .lang-menu a { color: #1AA257; }

		#hexaflip { margin: 0 auto auto auto; }
		#box { text-align: center;margin: -5px; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }
		
		#question ul li { margin: 8px 0; }
		
		.map { text-align: center; }
		.map p { font-size: 21px; }
		.map img { cursor: pointer;margin:-5px; }
		#larger { position: absolute; background: rgba(0, 0, 0, .8); width: 100%; height: 100%; margin: 0; z-index: 1000; display: none; }
		#larger img { margin: 2% 4%; width: 92%; }
		#larger div { z-index: 1001; text-align: center; cursor: pointer; }
		#larger span { background: white; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; padding: 5px; }

		@media (max-width: 1250px){
		  .container_12 .lmap {
		    width: 70% !important;
		    height: 75%;
		    margin-left: 15% !important;
		    margin-top: 4% !important;
		  }
		}

		
	<?php if ($language == 'es_ES') : ?>
		h2 {margin-top: 0px;  font-size: 22px;}
		p {font-size: 22px; margin: 0px 0}
		.map p{font-size: 18px; margin-top: -10px;}
		li {font-size: 20px;}
		img {margin-top: 0px;}
		#larger img {margin:2% 6%; width:88%;}
	<?php endif; ?>
	<?php if ($language == 'ar_EG') : ?>
		#larger img {margin:2% 6%; width:88%;}
	<?php endif; ?>
	<?php if ($language == 'zh_CN') : ?>
		#larger img {margin: 2% 6%; width:88%;}
	<?php endif; ?>
	<?php if ($language == 'en_US') : ?>
		#larger img {margin: 2% 6%; width:88%;}
	<?php endif; ?>

		@media (max-width: 900px) and (max-height: 623px){
			body, h2 { font-size: 18px !important; }
		}
		
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			.container_12 .lmap { width: 88% !important; margin-left: 5% !important; margin-top: 7% !important; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			.container_12 .lmap { height: auto; width: 90% !important; margin-left: 4% !important; margin-top: 12% !important; }
		}
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
						<h1><?php echo _("Quiz Question #4"); ?></h1>
						<h2><?php echo _("The map below shows the major plates that make up the earth's surface, and the arrows show the relative directions of each of the plates as they move relative to each other. From this map the following can be said to be true."); ?></h2>

						<ul class="grid_8">						
							<li>A. <?php echo _("The Caribbean Plate is moving towards Africa."); ?></li>
							<li>B. <?php echo _("The Australian Plate is moving away from the Philippine plate."); ?></li>
							<li>C. <?php echo _("The Arabian plate is moving towards the Indian plate."); ?></li>
							<li>D. <?php echo _("The African Plate is moving away from the South American plate."); ?></li>
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
						<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="18.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Clicking to see the image..."); ?></strong></section></section>

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

			if (hexaValue == './assets/d.png') {
				$('.answer').html("<img src='assets/d.png'><span><?php echo _("The African Plate is moving away from the South American plate."); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - the South American and African plates are moving away from each other."); ?></p>");

				answer = 'D';
			}

			if (hexaValue == './assets/a.png') {
				$('.answer').html("<img src='assets/a.png'><span><?php echo _("The Caribbean Plate is moving towards Africa."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - The Caribbean plate is moving away from Africa."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/c.png') {
				$('.answer').html("<img src='assets/c.png'><span><?php echo _("The Arabian plate is moving towards the Indian plate."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - The Arabian plate and the Indian plate are both moving in the same direction."); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/b.png') {
				$('.answer').html("<img src='assets/b.png'><span><?php echo _("The Australian Plate is moving away from the Philippine plate."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - The Australian plate is moving towards the Philippine plate."); ?></p>");

				answer = 'B';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('plate-tectonics-qq4-a', answer); // Correct answer: A
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
				document.location.href = "16.php";
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
