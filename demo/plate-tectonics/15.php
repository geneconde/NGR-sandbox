<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'plate-tectonics-qq2-a');
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
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #9A663E; }
		h2 { color: #196B92; }
		
		.wrap { border-color: #C58F70; }
		.bg { background-image: url(assets/15/bg.jpg); overflow: hidden;}
		.fa, .lang-menu a { color: #1AA257; }

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #B5381F;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question div span {
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}
		#md_adjustments {}
		#question input[type="radio"]:checked + label span { color: #B5381F; }

	<?php if ($language == 'es_ES') : ?>
		#question div span {font-size: 22px; margin-top: -9px;}
		.container_12 .suffix_2 {margin-top:-18px;}
		.container_12 .grid_4 {margin-top:-18px;}
		#md_botfix {margin-top: -8px;}
		h2 {margin-top: 0px;}
	<?php endif; ?>

		#buttons .next { display: none; }
		
		@media (max-width: 1000px){
		  .grid_4 img {
		    width: 75%;
		    margin-left: 12%;
		  }
		}
		@media (max-width: 1250px){
		  .grid_4 img {
		    width: 65%;
		    margin-left: 17%;
		  }
		}
		@media (min-width: 1110px) and  (max-width: 1250px){
		  .grid_4 img {
		    width: 58%;
		    margin-left: 21%;
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
						<h1 class="grid_12"><?php echo _("Quiz Question #2"); ?></h1>
						<h2 class="grid_12"><?php echo _("Which of the following maps would be <span class='blink'>best</span> for planning a cross-country road trip route?"); ?></h2>

						<div class="grid_4 prefix_1 suffix_2">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><img src="assets/15/a.jpg"><span><?php echo _("Daily weather map"); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><img src="assets/15/b.jpg"><span><?php echo _("City map of Manhattan, Kansas"); ?></span></label>
						</div>

						<div class="grid_4 prefix_1 suffix_2" id = "md_botfix">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><img src="assets/15/c.jpg"><span><?php echo _("Hardiness zones for planting flowers map"); ?></span></label>
						</div>

						<div class="grid_4" id = "md_botfix">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><img src="assets/15/d.jpg"><span><?php echo _("National Highway map"); ?></span></label>
						</div>
						<div class="clear"></div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="image grid_4 prefix_4 suffix_4"></div>

						<p class="answer grid_12"></p>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="16.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Packing for road-trip..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - A weather map can be helpful in planning a cross-country road trip to help you avoid bad weather, but is there an even better map to help you plan your trip?"); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - A city Map of Manhattan Kansas might help a little if you happen to be going through Kansas as part of your trip but wouldn't help in planning the whole cross country trip."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - A hardiness map for planting flowers would be of no help in planning a cross-country road trip."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - A highway map of the United States would definitely be the best map to help in planning a cross-country road trip."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('plate-tectonics-qq2-a', answer); // Correct answer: A
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

				$('#question').fadeOut(function() { 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "14.php";
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
