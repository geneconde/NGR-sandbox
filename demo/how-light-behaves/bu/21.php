<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'human-impact-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Human Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #00A7D4; }
		h2 { color: #F84D82; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/21/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #00A7D4; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #00A7D4; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">

			<div class="container_12 clearfix">
				<div class="grid_12">
					
					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?></h1>
						<h2><?php echo _("What is the best statement about the relationships between humans, wild animals, and the environment?"); ?></h2>

						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("Humans are more important than wild animals and the environment is there to make us comfortable."); ?></span></label></li>
								<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("Wild animals take just what they need from the environment to survive but humans take more than they need just to survive so they impact the environment more than wild animals."); ?></span></label></li>
								<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("Humans are smarter than wild animals so they impact the environment less."); ?></span></label></li>
								<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("Wild animals and humans are all part of the global environment and impact the natural environment equally."); ?></span></label></li>
							<ol>
						</form>
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

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
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - As far as nature and the environment are concerned humans and other animals are all equal parts of the environment."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct - Wild animals take just what they need from the environment to survive but humans take more than they need just to survive so they impact the environment more than wild animals."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - Actually, it's almost the opposite. Humans are smarter than other animals and they use that intelligence to use the environment to make themselves comfortable which impacts the environment more than other animals."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - Humans use the environment to make themselves comfortable which impacts the environment more than other animals."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
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
				document.location.href = "20.php";
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
