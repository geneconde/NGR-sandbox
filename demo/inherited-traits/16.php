<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(20, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'gravity-in-action-qq5-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Inherited Traits"); ?></title>

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
		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #f36d90; }
		h2 { color: #926948; }
		
		.wrap { border-color: #e5dd6f; }
		.bg { background-image: url(assets/16/bg.jpg); }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { .bg { background-size: cover !important; } }

		.ac-custom li {padding: .5em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #00A7D4; }
		.ac-custom label { color: #000; padding-left: 49px; line-height: 26px; }
		.ac-custom svg path { stroke: #00A7D4; }

		#question .ac-custom label::before { background-color: #00A7D4; height: 20px; width: 20px; margin-top: -11px; }
		#question .ac-custom label::after { background-color: #00A7D4; }
		#question .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -25px; }
		#answer { display: none; }
		#answer p { text-align: center; }
		.answer { text-align: center; }

		#buttons .next { display: none; }
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
		}
		<?php if($language == 'ar_EG') { ?>
			label span { margin-right: 60px; }
			.ac-circle svg { right: 1px; }
			.ac-circle label::after { width: 20px; height: 20px; }
		<?php } ?>
		@media screen and (max-width: 1250px){ .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?></h1>
						<h2><?php echo _("Choose the <span class='blink'>correct</span> statement from the following."); ?></h2>

						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a" name="q1" type="radio" value="A"><label for="a"><span><?php echo _("Males inherit most of their genes from their fathers."); ?></span></label></li>
								<li><input id="b" name="q1" type="radio" value="B"><label for="b"><span><?php echo _("Females inherit most of their genes from their mothers."); ?></span></label></li>
								<li><input id="c" name="q1" type="radio" value="C"><label for="c"><span><?php echo _("All offspring inherit most of their genes from their fathers."); ?></span></label></li>
								<li><input id="d" name="q1" type="radio" value="D"><label for="d"><span><?php echo _("All offspring inherit genes equally from both parents."); ?></span></label></li>
							<ol>
						</form>

					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>

						<div class="answer"></div>
						<div class="feedback"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is…"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('#answer .answer').html($('#question input:radio:checked').parent().find('span').text());
			answer = $('#question input:radio:checked').val();

			if (answer == 'A') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Genes are inherited equally from both sexes."); ?></p>");
			
			} else if (answer == 'B'){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Genes are inherited equally from both sexes."); ?></p>");

			} else if(answer == 'C'){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not this one. Genes are inherited equally from both sexes."); ?></p>");

			} else {
			
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! Both parents contribute equally."); ?></p>");
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('inherited-traits-qq1-a', answer); // Correct answer: D
				answered = 1;
			}
		}

		function clear() {
			$('.answer').html('');
			$('.feedback').html('');

			answer = '';
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

					clear();

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
