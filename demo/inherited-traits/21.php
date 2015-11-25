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
		.bg { background-image: url(assets/21/bg.jpg); }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { .bg { background-size: cover !important; } }

		.ac-custom li {padding: .2em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #00A7D4; }
		.ac-custom label { color: #000; padding-left: 49px; line-height: 26px; }
		.ac-custom svg path { stroke: #00A7D4; }

		#question .ac-custom label::before { background-color: #00A7D4; height: 20px; width: 20px; margin-top: -11px; }
		#question .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -25px; }
		#question .ac-custom label::after { background-color: #00A7D4; }
		#answer { display: none; }
		#answer p { text-align: center; }
		.answer { text-align: center; }

		#buttons .next { display: none; }

		#figure_container { margin: 20px 0; }
		img, video {
			width: 32px 25px !important; 
		}

		.container_12 .prefix_4 {
		  padding-left: 17.333% !important;
		}

		h2{
			position: absolute !important;
			bottom: -25px !important;
		}

		.ac-custom ul, .ac-custom ol {
			position: absolute !important;
			bottom: -190px !important;
		}

		#chart{
			width: 200% !important;
		}

		.labelA { position: absolute !important; top: 150px; left: 231px; }
		.labelB { position: absolute !important; top: 150px; left: 380px; }
		.labelC { position: absolute !important; top: 150px; left: 598px; }



		@media only screen and (max-device-width: 1024px) and (min-device-width: 768px) and (orientation: landscape){
			.labelA { position: absolute !important; top: 173px; left: 256px; }
			.labelB { position: absolute !important; top: 173px; left: 427px; }
			.labelC { position: absolute !important; top: 173px; left: 678px; }
		}

		@media (max-width: 769px) and (max-height: 667px) and (orientation: landscape){
			.labelA { position: absolute !important; top: 130px; left: 192px; }
			.labelB { position: absolute !important; top: 130px; left: 321px; }
			.labelC { position: absolute !important; top: 130px; left: 511px; }
		}

		@media (max-width: 769px) and (orientation: portrait){
			.labelA { position: absolute !important; top: 127px; left: 200px; }
			.labelB { position: absolute !important; top: 127px; left: 319px; }
			.labelC { position: absolute !important; top: 127px; left: 513px; }
			.ac-custom ul, .ac-custom ol {
			  position: absolute !important;
			  bottom: -185px !important;
			}
		}
		@media screen and (max-width: 1250px){ .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
		
		@media only screen and (max-width: 1250px) and (max-height: 667px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
		}
		

		@media only screen and (max-width: 1250px) and (max-height: 606px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }

 			#chart { width: 135% !important; }
			.labelA { position: absolute !important; top: 110px; left: 283px; }
			.labelB { position: absolute !important; top: 110px; left: 380px; }
			.labelC { position: absolute !important; top: 110px; left: 524px; }
			.container_12 .prefix_4 { padding-left: 26.333% !important; }

			.ac-custom ul, .ac-custom ol {
			  position: absolute !important;
			  bottom: -141px !important;
			}

			p {
			  margin: -6px 0 !important;
			}

			h2 {
			  position: absolute !important;
			  bottom: -12px !important;
			}
		}

		@media only screen and (max-width: 900px) and (max-height: 623px){
			#chart {
			  width: 157% !important;
			}
			.ac-custom ul, .ac-custom ol {
			  position: absolute !important;
			  bottom: -196px !important;
			}
			h2 {
			  position: absolute !important;
			  bottom: -38px !important;
			}
			#figure_container {
			  margin: -2px 0;
			}
			.container_12 .prefix_4 {
			  padding-left: 23.333% !important;
			}
			.labelA {
			  position: absolute !important;
			  top: 110px;
			  left: 264px;
			}
			.labelB {
			  position: absolute !important;
			  top: 110px;
			  left: 374px;
			}
			.labelC {
			  position: absolute !important;
			  top: 110px;
			  left: 545px;
			}
		}
		<?php if($language == 'ar_EG'){ ?>
		#chart { margin-right: -50%; }
		.labelA { left: 9% !important; }
		.labelB { left: 35% !important; }
		.labelC { left: 67% !important; }
		label span { margin-right: 55px; }
		.ac-circle svg { right: 1px !important; margin-top: -30px !important; }
		.ac-circle label::after { width: 20px; height: 20px; }
		@media (max-width: 1250px) {
			#figure_container { width: 25%; margin-top: 0px !important;
			}
			#figure_container .labelA { left: 12% !important; top: 55%;
			}
			#figure_container .labelB { left: 30% !important; top: 55%;
			}
			#figure_container .labelC { left: 57% !important; top: 55%;
			}
		}
		<?php } else { ?>
		@media (max-width: 1250px) {
			#figure_container { width: 25%; margin-top: 0px !important;
			}
			#figure_container .labelA { left: 29% !important; top: 55%;
			}
			#figure_container .labelB { left: 47% !important; top: 55%;
			}
			#figure_container .labelC { left: 74% !important; top: 55%;
			}
		}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?></h1>
						<p><?php echo _("Consider the following pedigree of a human family. The color red indicates the dominant gene for curly hair. Blue indicates the recessive straight hair gene."); ?></p>

						<div class="grid_4 prefix_4 suffix_4" id="figure_container">
							<img id="chart" src="assets/21/figure1.jpg" alt="img1" />
							<p class="labelA"><?php echo _("A"); ?></p>
							<p class="labelB"><?php echo _("B"); ?></p>
							<p class="labelC"><?php echo _("C"); ?></p>
						</div>
						<br>
						<h2><?php echo _("Which of the following statements is true?"); ?></h2>

						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a" name="q1" type="radio" value="A"><label for="a"><span><?php echo _("The B parents could have a curly-haired child."); ?></span></label></li>
								<li><input id="b" name="q1" type="radio" value="B"><label for="b"><span><?php echo _("The A parents could have a curly-haired child."); ?></span></label></li>
								<li><input id="c" name="q1" type="radio" value="C"><label for="c"><span><?php echo _("The C parents could not have a curly-haired child."); ?></span></label></li>
								<li><input id="d" name="q1" type="radio" value="D"><label for="d"><span><?php echo _("The A parents could not have a straight-haired child."); ?></span></label></li>
							<ol>
						</form>

					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

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
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Curly is dominant. If the gene were present in the parents, they would be curly."); ?></p>");
			
			} else if (answer == 'B'){
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! In fact, the A parents do have a curly-haired child."); ?></p>");

			} else if(answer == 'C'){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. The C parents do have curly-haired children."); ?></p>");

			} else {
			
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The A parents do have a straight-haired child."); ?></p>");
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('inherited-traits-qq6-a', answer); // Correct answer: D
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
