<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'basic-cells';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
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

	<!-- When using the grid and animated checkbox, use this condition for rtl support -->
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
		
		.wrap { border-color: #A23763; } /* Change border-color */
		.bg { background-image: url(assets/9/bg.jpg);overflow: hidden; }

		#question1 input[type="radio"] { display: none; }
		#question1 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question1 input[type="radio"]:checked + label img { border: 4px solid #A23763; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; } /* Change border-color */
		#question1 input[type="radio"]:checked + label span { color: #A23763; } /* Change color */ 
		#question1 span { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; } /* Change color */
		#question2 li { padding-top: 5px;}
		.ac-custom input[type="radio"]:checked + label { color: #A23763; } /* Change color */ 
		.ac-custom label { color: #000; padding-left: 49px; } /* Change color */
		.ac-custom label::before { border: 2px solid #A23763; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		.ac-custom svg path { stroke: #61009e; } /* Change stroke-color */
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #A23763; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; /* for Safari */ }

		#answer1 p { text-align: left; }

		html[dir=rtl] #answer1 p { text-align: right; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A.  Which of the following structures is found in cell membranes?"); ?></h2>

							<div class="grid_3">
								<input type="radio" id="a1" name="q1">
								<label for="a1"><img src="assets/9/chlorophyll.jpg"><span><?php echo _("Chlorophyll"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b1" name="q1">
								<label for="b1"><img src="assets/9/nucleus.jpg"><span><?php echo _("Nucleus"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="c1" name="q1">
								<label for="c1"><img src="assets/9/ribosomes.jpg"><span><?php echo _("Ribosomes"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d1" name="q1">
								<label for="d1"><img src="assets/9/carrier_protein.jpg"><span><?php echo _("Carrier Protein"); ?></span></label>
							</div>

							<div class="clear"></div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. What is the major difference between passive and active transport?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Passive transport requires energy; active transport does not."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Active transport requires energy, passive transport does not."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Passive transport always moves material out of the cell."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("Active transport always moves material out of the cell."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A.  Which of the following structures is found in cell membranes?"); ?></h2>

							<div class="grid_2 image"></div>

							<div class="grid_10">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. What is the major difference between passive and active transport?"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="grid_12 answer"></p>

							<div class="grid_12 feedback"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Passive and active transport?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				image = $(this).parent().find('img').clone(),
				text = $(this).parent().find('span').text();

			if (id == 'a1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Chlorophyll is found in chloroplasts."); ?></p>");

				answer1 = 'A';
			}

			if (id == 'b1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not this one. The nucleus is in the center of the cell."); ?></p>");

				answer1 = 'B';
			}

			if (id == 'c1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry, ribosomes make proteins but not in the membrane."); ?></p>");

				answer1 = 'C';
			}

			if (id == 'd1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That’s right! Carrier proteins help control what enters or leaves the cell."); ?></p>");

				answer1 = 'D';
			}

			if (id == 'a2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Active transport requires energy. Passive transport does not."); ?></p>");

				answer2 = 'A';
			}

			if (id == 'b2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Right! Active transport requires energy. Passive transport does not."); ?></p>");

				answer2 = 'B';
			}

			if (id == 'c2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Active or passive transport may move materials into or out of the cell."); ?></p>");

				answer2 = 'C';
			}

			if (id == 'd2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not this one. Active or passive transport may move materials into or out of the cell."); ?></p>");

				answer2 = 'D';
			}
		});

		function save() {
			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1);
				saveAnswer('module-qc#-b', answer2);

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('.checkanswer').fadeOut(function() { $('.next').fadeIn(); });

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();
					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "8.php#screen2";
			} else if ($('#answers').is(':visible')) {
				$('.next').fadeOut(function() { $('.checkanswer').fadeIn(); });

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
