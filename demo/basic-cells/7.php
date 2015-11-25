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

	<title><?php echo _("Basic Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/hexaflip.css">
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
		h1 { color: #61009e; }
		h2 { color: #008fff; }
		
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/7/bg.jpg); overflow: hidden;}

		#box p { font-size: 20px; text-align: center; }
		#hexaflip { margin: auto; }

		.ac-custom input[type="radio"]:checked + label { color: #A23763; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #A23763; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #008fff; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		.ac-custom li { padding: .4em 0;}

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #A23763; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer2 p { text-align: left; }

		html[dir=rtl] #answer1 p, html[dir=rtl] #answer2 p { text-align: right; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
		}
		.hexaflip-cube .hexaflip-side {
		  width: 115% !important;
		  height: 101% !important;
		}

		.hexaflip-cube .hexaflip-side-left{
			transform: none !important;
			display: none;
		}
		.hexaflip-cube .hexaflip-side-right{
			transform: none !important;
			display: none;
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
							<h2 class="grid_12"><?php echo _("Question A. The cell nucleus is important because..."); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("It absorbs energy from sunlight."); ?></span></label></li>
										<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("It releases energy from food."); ?></span></label></li>
										<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("It carries information to control the cell."); ?></span></label></li>
										<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("It controls what enters or leaves the cell."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
						
						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. Both plant and animal cells contain mitochondria because:"); ?></h2>

							<ul class="grid_7">						
								<li>A. <?php echo _("All cells must use energy to stay alive."); ?></li>
								<li>B. <?php echo _("Only animal cells absorb energy from the sun."); ?></li>
								<li>C. <?php echo _("All cells must absorb solar energy."); ?></li>
								<li>D. <?php echo _("Mitochondria contain chlorophyll."); ?></li>
							</ul>

							<div id="box" class="grid_5">
								<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

								<div id="hexaflip"></div>
							</div>

							<div class="clear"></div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. The cell nucleus is important because..."); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>
						
						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Both plant and animal cells contain mitochondria because:"); ?></h2>

							<div class="image grid_2 prefix_2"></div>

							<div class="grid_8">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying nucleus..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';


		function save() {
			$('#answer1 .answer').html($('input:radio:checked').parent().find('span').text());

			answer1 = $('input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Chloroplasts absorb energy."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Mitochondria release energy."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! The nucleus carries information."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Membranes control what enters or leaves cells."); ?></p>");
				
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('#answer2 .image').html("<img src='assets/a.png'>");
				$('#answer2 .answer').html("<?php echo _("A. All cells must use energy to stay alive."); ?>");
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That’s right! All cells must use energy."); ?></p>");

				answer2 = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('#answer2 .image').html("<img src='assets/b.png'>");
				$('#answer2 .answer').html("<?php echo _("B. Only animal cells absorb energy from the sun."); ?>");
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Chloroplasts absorb solar energy."); ?></p>");

				answer2 = 'B';
			}

			if (hexaValue == './assets/c.png') {
				$('#answer2 .image').html("<img src='assets/c.png'>");
				$('#answer2 .answer').html("<?php echo _("C. All cells must absorb solar energy."); ?>");
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Only plant cells absorb solar energy."); ?></p>");

				answer2 = 'C';
			}

			if (hexaValue == './assets/d.png') {
				$('#answer2 .image').html("<img src='assets/d.png'>");
				$('#answer2 .answer').html("<?php echo _("D. Mitochondria contain chlorophyll."); ?>");
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Chloroplasts contain chlorophyll."); ?></p>");

				answer2 = 'D';
			}

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
