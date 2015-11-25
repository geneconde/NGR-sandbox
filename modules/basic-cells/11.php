<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */


	require_once "../../session.php";
	$_SESSION['cmodule'] = 'basic-cells';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(11, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'basic-cells-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
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
		.bg { background-image: url(assets/11/bg.jpg); overflow: hidden;}
		#questions h2{ margin: 5px 0 }
		#question1 input[type="radio"] { display: none; }
		#question1 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question1 input[type="radio"]:checked + label img { border: 4px solid #A23763; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; }
		#question1 input[type="radio"]:checked + label span { color: #A23763; }
		#question1 .text { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; }
		#question2 li { padding-top: 5px;}
		.ac-custom input[type="radio"]:checked + label { color: #61009e; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #A23763; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #61009e; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #A23763; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer1 p, #answer2 p { text-align: center; }

		html[dir=rtl] #answer1 p { text-align: right; }

		#buttons .next { display: none; }
		.text-center { text-align: center !important;}
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
			#questions h1{ font-size: 25px;}
			#questions h2{ font-size:  19px;}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. Chloroplasts are <span class='blink'>most often</span> found in what types of cells?"); ?></h2>

							<div class="grid_3">
								<input type="radio" id="a1" name="q1" value="A">
								<label for="a1"><img src="assets/11/animal_cells.jpg"><span class="text"><?php echo _("Animal Cells"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b1" name="q1" value="B">
								<label for="b1"><img src="assets/11/prokaryotes.jpg"><span class="text"><?php echo _("Prokaryotes"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="c1" name="q1" value="C">
								<label for="c1"><img src="assets/11/fungi.jpg"><span class="text"><?php echo _("Fungi"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d1" name="q1" value="D">
								<label for="d1"><img src="assets/11/plant_cells.jpg"><span class="text"><?php echo _("Plant Cells"); ?></span></label>
							</div>

							<div class="clear"></div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. Which structures are found in plant cells but <span class='blink'>not</span> in animal cells?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("Cell walls and cell membranes"); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("Chloroplasts and cell walls"); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Mitochondria and cell membranes"); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("Mitochondria and chloroplasts"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Chloroplasts are <span class='blink'>most often</span> found in what types of cells?"); ?></h2>

							<div class="image grid_2"></div>

							<div class="grid_10">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Which structures are found in plant cells but <span class='blink'>not</span> in animal cells?"); ?></h2>

							<p class="grid_12 text-center"><?php echo _("You answered..."); ?></p>
							<p class="text-center grid_12 answer"></p>

							<div class="feedback grid_12"></div>
						</div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at different cells..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());
			$('#answer1 .image').html($('#question1 input:radio:checked').parent().find('img').clone());

			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry, animal cells can’t make their own food."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Prokaryotes have no organelles."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not these. Fungi depend on other organisms for food."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That’s right! Chloroplasts are found in green plant cells."); ?></p>");

			
			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. All cells have membranes."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='green '><img src='assets/correct.png'><?php echo _("Yes! Chloroplasts and cell walls are found only in plants."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Most eukaryotes have mitochondria and cell membranes."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("All complex cells have mitochondria, but only plant cells have chloroplasts."); ?></p>");

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
				document.location.href = "10.php";
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
