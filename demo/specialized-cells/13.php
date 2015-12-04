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

	<title><?php echo _("Specialized Cells"); ?></title>

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
		h1 {color:#660066;} 
		h2 { color: #469c96; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/13/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #ec6666; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom svg path { stroke: #ec6666; }
		.ac-custom li { padding: 7px 0; }

		#question1 .ac-custom label::before { background-color: #ec6666; height: 20px; width: 20px; margin-top: -11px; }
		#question1 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		#question2 .ac-custom label::before { border: 2px solid #ec6666; height: 34px; width: 34px; margin-top: -18px; }
		#question2 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question1 .ac-custom label::after { background-color: #ec6666; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 3px; left: 98%; }

		html[dir=rtl] #question2 .ac-custom label::after { border: 2px solid #ec6666; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question2 .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px ){
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; overflow: hidden; }
			.ac-custom li { padding: 4px 0; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #5"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A.") . " " . _("What is a key feature sperm and egg cells have in common?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("Both types of cells are very large."); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("Both types of cells have half sets of chromosomes."); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("Both types of cells have tails."); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("Both types of cells are produced by males."); ?></span></label></li>
									</ol>
								</form>
							</div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. Choose the correct statement."); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("Egg cells have complete sets of chromosomes; sperm cells have none."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("Sperm cells and egg cells are both made by female parents."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Sperm cells are male gametes and egg cells are female gametes."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("Gametes differ very little from other types of cells."); ?></span></label></li>
									</ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A.") . " " . _("What is a key feature sperm and egg cells have in common?"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Choose the correct statement."); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());
			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Egg cells are quite large but sperm cells are very small."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! Both types of cells only have half sets of chromosomes."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Only sperm cells have tails."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Sperm cells are male gametes."); ?></p>");
//question2
			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Both types of cells have half sets of chromosomes."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect. Sperm are made by males; eggs are made by females"); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('That\'s right! Sperm are made by males; eggs are made by females.'); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really. Gametes are highly specialized cells."); ?></p>");

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('specialized-cells-qc5-a', answer1); // Correct answer: A
				saveAnswer('specialized-cells-qc5-b', answer2); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "12.php#screen2";
			} else if ($('#answers').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			} 
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
