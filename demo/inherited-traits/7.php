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

	<title><?php echo _("Inherited Traits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
		<link rel="stylesheet" href="css/hexaflip2.css" />
	<?php } else { ?>
		<link rel="stylesheet" href="css/hexaflip.css" />
	<?php } ?>

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
		
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/7/bg.jpg); }

		#box p { font-size: 20px; text-align: center; }
		#hexaflip { margin: auto; }

		.ac-custom input[type="radio"]:checked + label { color: #00A7D4; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #00A7D4; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		.ac-custom li { padding: .4em 0;}

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
		}
		@media screen and (max-width: 1250px){
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. Genetic traits that never skip generations are said to be:"); ?></h2>
							
							<ul class="grid_6 prefix_1">						
								<li>A. <?php echo _("Recessive"); ?></li>
								<li>B. <?php echo _("Flexible"); ?></li>
								<li>C. <?php echo _("Dominant"); ?></li>
								<li>D. <?php echo _("Denatured"); ?></li>
							</ul>
							
							<div id="box" class="grid_4 suffix_1">
								<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

								<div id="hexaflip"></div>
							</div>
						</div>
						
						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. Dominant traits are more likely to be inherited from..."); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("male parents, because males are usually bigger than females."); ?></span></label></li>
										<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("female parents, because mothers often spend more time with their children."); ?></span></label></li>
										<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("either parent, because dominant traits are never inherited."); ?></span></label></li>
										<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("either parent, because both are equally likely to pass on traits."); ?></span></label></li>
									<ol>
								</form>
							</div>

							

							<div class="clear"></div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Genetic traits that never skip generations are said to be:"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>
						
						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Dominant traits are more likely to be inherited from..."); ?></h2>

							<div class="image grid_2 prefix_2"></div>

							<div class="grid_12">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer grid_12"></p>

								<div class="feedback grid_12"></div>
							</div>

							<div class="clear"></div>
						</div>

						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Inheriting dominant traits..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<script src="js/hexaflip2.js"></script>
	<?php } else { ?>
	<script src="js/hexaflip.js"></script>
	<?php } ?>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';


		function save() {
			$('#answer2 .answer').html($('input:radio:checked').parent().find('span').text());
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('#answer1 .image').html("<img src='assets/a.png'>");
				$('#answer1 .answer').html('A. <?php echo _("Recessive"); ?>');
				$('#answer1 .feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Sorry. Recessive traits do skip generations."); ?></p>');

				answer1 = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('#answer1 .image').html("<img src='assets/b.png'>");
				$('#answer1 .answer').html('B. <?php echo _("Flexible"); ?>');
				$('#answer1 .feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Nope. Traits are not referred to as flexible."); ?></p>');

				answer1 = 'B';
			}

			if (hexaValue == './assets/c.png') {
				$('#answer1 .image').html("<img src='assets/c.png'>");
				$('#answer1 .answer').html('C. <?php echo _("Dominant"); ?>');
				$('#answer1 .feedback').html('<p class="green"><img src="assets/correct.png"><?php echo _("Correct. Dominant traits never skip generations."); ?></p>');

				answer1 = 'C';
			}

			if (hexaValue == './assets/d.png') {
				$('#answer1 .image').html("<img src='assets/d.png'>");
				$('#answer1 .answer').html('D. <?php echo _("Denatured"); ?>');
				$('#answer1 .feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("No. Traits aren’t referred to as denatured."); ?></p>');

				answer1 = 'D';
			}


			answer2 = $('input:radio:checked').val();

			if (answer2 == 'A')
				$('#answer2 .feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Sorry. A parent’s size isn’t related to what traits they can pass on."); ?></p>');

			if (answer2 == 'B')
				$('#answer2 .feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Nope. Time spent with children is long after traits are passed."); ?></p>');

			if (answer2 == 'C')
				$('#answer2 .feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("No. Dominant traits are passed along as often as recessive."); ?></p>');

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('That\'s right! Either parent can pass along either gene for any trait.'); ?></p>");
				

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1); // Correct answer: A
				saveAnswer('module-qc#-b', answer2); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
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
				document.location.href = "6.php#screen2";
			} else if ($('#answers').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '#';
				});
			}
		});

		var hexa, images = [
			'./assets/a.png',
			'./assets/b.png',
			'./assets/c.png',
			'./assets/d.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 140 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
