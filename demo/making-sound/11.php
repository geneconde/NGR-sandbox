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

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/nlform_rtl.css">
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/nlform.css">
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #005a8f; }
		h2 { color: #128575;}
		.bg { background-image: url(assets/qq-and-qc-bg.jpg); }

		#nl-form {}
		#nl-form a { border-bottom: 0; padding: 0 8px; color: #ff9931; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #279D67; }
		.nl-field li { color: #ff9931; font-size: 28px; }
		.nl-dd ul li.nl-dd-checked { background-color: #279D67; color: #ff9931; }

		#n2-form {}
		#n2-form a { border-bottom: 0; background-color: #279D67; padding: 0 8px; color: #ff9931; text-align: center; border-radius: 5px; }
		.n2-field ul { background-color: #279D67; }
		.n2-field li { color: #fff; font-size: 28px; }
		.n2-dd ul li.nl-dd-checked { background-color: #279D67; color: #ff9931; }

		#answer p.answer { text-align: left !important;}

		#buttons .next { display: none; }
		.nl-overlay { background: none; }
		div.nl-field.nl-dd:first-of-type a { margin-right: -13px; }
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

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>
						<h2 class="grid_12"><?php echo _("Use the pull down menu to select the word that will make the sentence correct."); ?></h2>

						<div class="grid_12">												
							<form id="nl-form" class="nl-form">
							
								<?php echo _("Musical instruments produce different notes by creating sound waves of different"); ?>
								<select class="a">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="speeds"><?php echo _("speeds"); ?></option>
									<option value="amplitude"><?php echo _("amplitude"); ?></option>
									<option value="frequency"><?php echo _("frequency"); ?></option>
								</select> 
								<?php echo _(".<br/>"); ?>
							
								<?php echo _("The "); ?>
								<select class="b">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="woodwind"><?php echo _("woodwind"); ?></option>
									<option value="brass"><?php echo _("brass"); ?></option>
									<option value="string"><?php echo _("string"); ?></option>
								</select>
								<?php echo _(" instruments include violin, and cello.") . "<br/>"; ?>
							<?php echo _("The "); ?>
								<select class="a">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="woodwind"><?php echo _("woodwind"); ?></option>
									<option value="brass"><?php echo _("brass"); ?></option>
									<option value="string"><?php echo _("string"); ?></option>
								</select>
								<?php echo _(" instruments produce sound by vibrating a thin, wooden reed.") . "<br/>"; ?>
							<?php echo _("The combination of sound waves of different "); ?>
								<select class="b">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="speeds"><?php echo _("speeds"); ?></option>
									<option value="amplitudes"><?php echo _("amplitudes"); ?></option>
									<option value="frequencies"><?php echo _("frequencies"); ?></option>
								</select>
								<?php echo _(" are the key to creating realistic imitations of musical instruments with computers."); ?>

								<div class="nl-overlay"></div>
							</form>
							
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2 class="grid_12"><?php echo _("Use the pull down menu to select the word that will make the sentence correct."); ?></h2>

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
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/nlform.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			
			answer = '';

			$('select option:selected').each( function(){
				answer += $(this).val() + " ";
			});

			answer = answer.trim();

			if (answer == 'frequency string woodwind frequencies') {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('You\'ve got it! The pitch of a musical note, as well as the distinctive sound produced by each instrument, are due to the frequencies of the sound waves they produce. Violins and cellos are string instruments, while woodwinds like the clarinet, produce sound by vibrating a wooden reed.'); ?></p>");
			} else{
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Not quite! The pitch of a musical note, as well as the distinctive sound produced by each instrument, are due to the frequencies of the sound waves they produce. Violins and cellos are string instruments, while woodwinds like the clarinet, produce sound by vibrating a wooden reed.'); ?></p>");
			}

			$('.answer').html($('#question div.grid_12').html());

			console.log(answer);

			if (answered == 0) {
				saveAnswer('making-sound-qc4-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		function allIsAnswered(){
			$('select')

		}

		$('.checkanswer').click(function() {
			var noAnswer = false;



			$('#nl-form').find('select').each(function() {
				if ($(this).val() == '') noAnswer = true;
			});

			if (noAnswer) {
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
				document.location.href = "10.php#screen2";
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
