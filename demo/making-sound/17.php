<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	//require_once "../tempsession.php";
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
		#question img {}

		.ac-custom input[type="radio"]:checked + label span{ color: #ff9931 !important; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #ff9931; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #ff9931; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #A23763; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		ol li span:first-child { color: #128575; }
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
						<h1><?php echo _("Quiz Question #2"); ?></h1>
						<h2><?php echo _("Your friend makes the claim that sound waves travel faster during the day time because sound travels slower in the dark. Which of the following observations do not support your friend's argument?"); ?></h2>
						<div class="grid_8" >
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _('A) '); ?></span><span><?php echo _("The echo in the school gymnasium takes the same time with the lights on as it does with the lights off."); ?></span></label></li>
									<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _('B) '); ?></span><span><?php echo _("The temperature of the air is usually cooler at night than it is during the day."); ?></span></label></li>
									<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _('C) '); ?></span><span><?php echo _("Sound travels at different speeds in different materials."); ?></span></label></li>
									<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _('D) '); ?></span><span><?php echo _("A and B, but not C"); ?></span></label></li>
								<ol>
							</form>
						</div>
						<img class="grid_4" src="assets/19/19a.jpg"/>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Day or night?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Close! This certainly does not support your friend\'s claim, but there were other observations that also disagreed with them.'); ?></p>");

			else if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Close! Temperature is another variable that impacts the speed of sound, but there were other observations that disagreed with your friend\'s claim.'); ?></p>");

			else if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Nope. Your friend is making a claim about the speed of sound in one material, air, being different during the day and night.'); ?></p>");
			else
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Yes! Both A and B are observations that do not support your friend\'s claim.'); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('making-sound-qq2-a', answer); // Correct answer: A
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
