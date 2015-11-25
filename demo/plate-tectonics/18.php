<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'plate-tectonics-qq5-a');
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
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #9A663E; }
		h2 { color: #196B92; }
		
		.wrap { border-color: #C58F70; }
		.bg { background-image: url(assets/18/bg.jpg); overflow: hidden;}
		.fa, .lang-menu a { color: #1AA257; }

		.ac-custom input[type="radio"]:checked + label { color: #B5381F; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #B5381F; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #B5381F; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #B5381F; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		
		.map { text-align: center; }
		.map p { font-size: 21px; }
		.map img { cursor: pointer; }
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
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			.container_12 .lmap { width: 88% !important; margin-left: 5% !important; margin-top: 7% !important; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			.container_12 .lmap { height: auto; width: 90% !important; margin-left: 4% !important; margin-top: 12% !important; }
		}
		
	<?php if ($language == 'es_ES') : ?>
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
						<h1><?php echo _("Quiz Question #5"); ?></h1>
						<h2><?php echo _("The diagram below illustrates an oceanic plate crashing into and going under a continental plate, forming a subduction zone that causes volcanoes. From the map below, which of the following plate boundaries would most likely form a subduction zone like this?"); ?></h2>
						
						<div class="grid_8">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("South American and African"); ?></span></label></li>
									<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("Pacific and North American"); ?></span></label></li>
									<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("Nazca and South American"); ?></span></label></li>
									<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("North American and Eurasian"); ?></span></label></li>
								<ol>
							</form>
						</div>
									
						<div class="grid_4 map">
							<p><?php echo _("Click on the image to enlarge it."); ?></p>
							<img src="assets/16/map.jpg" />
						</div>
						
						
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Going under a continental plate..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
	
		$('.map img').click(function() {
			$('#larger').fadeIn();
		});
		$('.close').click(function() {
			$('#larger').fadeOut();
		});
	
	
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - the South American and African plates are moving away from each other, which couldn't form a subduction zone."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - The Pacific and North American plates are sliding sideways past each other."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - the South American and Nazca plates are moving towards each other, which could form a subduction zone."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - The North American and Eurasian plates are moving away from each other."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('plate-tectonics-qq5-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

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
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "17.php";
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
