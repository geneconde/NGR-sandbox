<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Healthy Eating"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/nlform_rtl.css">
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/nlform.css">
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #8a0085; }
		h2 { color: #ff9a23;}
		.wrap { border-color: #FCF8ED; 
				border-left: 1px dashed #F593FF;
				border-right: 1px dashed #F593FF; 
		}
		.bg { background-image: url(assets/14/bg.jpg); }

		#nl-form {}
		#nl-form a { border-bottom: 0; background-color: #76C3BD; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #76C3BD; }
		.nl-field li { color: #fff; font-size: 28px; }\
		
		.nl-dd ul li.nl-dd-checked { background-color: #000; color: #fff; }
		.image { text-align: center; margin-top: 20px;}
		#buttons .next { display: none; }
		<?php if ($language == 'ar_EG') : ?>
			.nl-field ul { position: absolute; left: -4.5em;}
		<?php endif; ?>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?></h1>
						<h2 class="grid_12"><?php echo _("Which word completes this basic rule of healthy eating?"); ?></h2>

						<div class="grid_12">
							<form id="nl-form" class="nl-form">
								<?php echo _("Eat a");?>
								<select name="select">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="A"><?php echo _("lot"); ?></option>
									<option value="B"><?php echo _("variety"); ?></option>
									<option value="C"><?php echo _("calorie"); ?></option>
									<option value="D"><?php echo _("mouthful"); ?></option>
								</select>
								<?php echo _("of Food!");?>
								<div class="nl-overlay"></div>
							</form>
						</div>
						<div class="grid_12 image">
							<div class="grid_8 prefix_2 suffix_2 "><img src="assets/14/friends-eating-happily.jpg"/></div>
						</div>	
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<p class="answer grid_12"></p>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="15.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/nlform.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {

			answer = $('select').val();
						
			if (answer == 'A') {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, the amount of food you eat should be based on how much your body needs.'); ?></p>");
			}

			if (answer == 'B') {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Correct. Your body needs a variety of food to stay healthy.'); ?></p>");
			}

			if (answer == 'C') {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, calories are just a way of measuring the energy each food gives off. There should be a balance between the amount of calories you take in and the amount of exercise you do each day.'); ?></p>");
			}

			if (answer == 'D') {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, your body needs a variety of food to stay healthy.'); ?></p>");
			}

			$('.answer').html($('select option:selected').text());

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			if ($('select').val() == "") {
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
				document.location.href = "13.php";
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

		var nlform = new NLForm(document.getElementById('nl-form'));
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
