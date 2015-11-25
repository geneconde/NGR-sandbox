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
		.bg { background-image: url(assets/21/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #ec6666; } /* Change color */
		.ac-custom label { color: #000; padding-left: 49px; } /* Change color */
		.ac-custom label::before { border: 2px solid #ec6666; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		.ac-custom svg path { stroke: #ec6666; } /* Change stroke-color */
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #ec6666; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; /* for Safari */ }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px ){
			.bg{ 	background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; 
					overflow: hidden;
			}
		}
		@media (max-width: 960px){ #buttons { background-color: #468853; } }
		@media only screen and (orientation: landscape) and (min-device-width : 768px) and (max-device-width : 1024px){
			#buttons { background-color: #468853 !important; }
		}
		@media only screen and (orientation: portrait) and (min-device-width : 768px) and (max-device-width : 1024px){
			#buttons { background-color: #468853 !important; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?></h1>
						<h2><?php echo _("Sperm cells differ from egg cells in that...."); ?></h2>

						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" type="radio" value="A" name="g1"><label for="a"><span><?php echo _("Sperm cells form in female ovaries; egg cells in male testes."); ?></span></label></li>
								<li><input id="b" type="radio" value="B" name="g1"><label for="b"><span><?php echo _("Sperm cells have complete sets of chromosomes; egg cells do not."); ?></span></label></li>
								<li><input id="c" type="radio" value="C" name="g1"><label for="c"><span><?php echo _("Sperm cells have half sets of chromosomes; egg cells do not."); ?></span></label></li>
								<li><input id="d" type="radio" value="D" name="g1"><label for="d"><span><?php echo _("Sperm cells are formed in male testes; egg cells in female ovaries."); ?></span></label></li>
							</ol>
						</form>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="22.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Differentiating cells..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('input[type=radio]').each(function() {
				if ($(this).is(':checked')) {
					$('.answer').append("<p>" + $(this).parent().find('span').text() + "</p>");

					answer += $(this).val();
				}
			});

			if (answer == 'A') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect. Sperm cells form in testes; egg cells form in ovaries."); ?></p>");
			}if (answer == 'B') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Both types of cells have half sets of chromosomes."); ?></p>");
			}if (answer == 'C') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Both types of cells have half sets of chromosomes."); ?></p>");
			}if (answer == 'D') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! Sperm cells form in testes; egg cells form in ovaries."); ?></p>");
			}else if (answer.length > 1 ){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('specialized-cells-qq4-a', answer); // Correct answer: ABCD
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
				document.location.href = "20.php";
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
