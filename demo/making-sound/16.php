<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	//require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'air-around-us-qq5-a');
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
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #005a8f; }
		h2 { color: #128575;}
		.bg { background-image: url(assets/qq-and-qc-bg.jpg); }

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #ff9931;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question div span {
			line-height: 24px;
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}

		#question input[type="radio"]:checked + label span { color: #ff9931; }

		#buttons .next { display: none; }
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?></h1>
						<h2><?php echo _("Which of the following does not produce sound waves?"); ?></h2>
		
						<div class="grid_4 prefix_1 suffix_2">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><img src="assets/18/18a.jpg"><span><?php echo _("Church bell ringing"); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><img src="assets/18/18b.jpg"><span><?php echo _("Cell phone ringing"); ?></span></label>
						</div>

						<div class="grid_4 prefix_1 suffix_2">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><img src="assets/18/18c.jpg"><span><?php echo _("Window blinds in the wind"); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><img src="assets/18/18d.jpg"><span><?php echo _("A statue in the park"); ?></span></label>
						</div>

						<div class="clear"></div>
						
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="image grid_6 prefix_3 suffix_3"></div>

						<p class="answer grid_12"></p>

						<div class="feedback grid_12"></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="17.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	
	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A'){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. A ringing bell definitely produces sound waves."); ?></p>");
			} 
			else if (answer == 'B') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. You hear a cell phone ringing because of the sound waves it produces."); ?></p>");
			}
			else if (answer == 'C') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Window blinds flapping in the wind will vibrate, and that makes sound waves."); ?></p>");
			}
			else if (answer == 'D') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Yes. A statue in the park doesn\'t vibrate, so it doesn\'t produce any sound waves.'); ?></p>");
			}
			
			console.log(answer);

			if (answered == 0) {
				saveAnswer('making-sound-qq1-a', answer); // Correct answer: A
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
	</script>
	
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
