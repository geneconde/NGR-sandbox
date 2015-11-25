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
		.bg { background-image: url(assets/11/bg.jpg); }

		#h1f {font-size: 23px}
		#h2f {font-size: 23px; margin-top:;}

		#question1 input[type="radio"] { display: none; }

		#question1 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question1 input[type="radio"]:checked + label img { border: 4px solid #00A7D4; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; }
		#question1 input[type="radio"]:checked + label span { color: #00A7D4; }
		#question1 .text { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; margin-top: -7px;}
		#question1 .grid_3 {width: 160px; margin-left: 35px }
		
		#question2 span {font-size: 23px; }

		.ac-custom li {padding: .2em 0}
		.ac-custom input[type="radio"]:checked + label { color: #00A7D4; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #00A7D4; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		#questions {margin: 1px}
		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }
		
		#sidepic {width: 350px; margin-top: -170px; margin-left: 400px;} 

		#answer1 p, #answer2 p { text-align: center; }
		.answer { text-align: center; }
	
		html[dir=rtl] #answer1 p { text-align: right; }
		.text-center { text-align: center !important;}
		#buttons .next { display: none; }
		@media only screen and (max-width: 960px){
			#question1 .grid_3 {
			  width: 130px;
			  margin-left: 35px;
			}

			#sidepic {
			  width: 309px;
			  margin-top: -170px;
			  margin-left: 400px;
			}
		}
		@media only screen and (max-width: 1250px){
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }

				#h2f {
				    font-size: 20px !important;
				    margin-top: ;
				}
				#h1f {
				    font-size: 20px !important; 
				}
				#question2 span {
				    font-size: 20px !important;
				}
				.container_12 .grid_3 {
				    width: 17% !important;
				}
		}

		<?php if ($language == 'ar_EG') { ?>
		div#sidepic { margin-right: 30%; }
		@media screen and (max-width: 1250px){
			.ac-custom ul, .ac-custom ol { margin-left: -25px; }
		}
		<?php } ?>
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
							<!--<h2 class="grid_12"><?php echo _("Question A."); ?></h2>-->
							
							<h2 class="grid_12" id = "h1f"><?php echo _("Question A. Two brown-eyed parents had one brown-eyed child and one blue-eyed child. Choose the Punnett square that best represents this situation."); ?></h2>
							

							<div class="grid_3">
								<input type="radio" id="a1" name="q1" value="A">
								<label for="a1"><img src="assets/11/A.jpg"><span class="text"><?php echo _("A"); ?></span></label>
							</div>
							
							<div class="grid_3">
								<input type="radio" id="b1" name="q1" value="B">
								<label for="b1"><img src="assets/11/B.jpg"><span class="text"><?php echo _("B"); ?></span></label>
							</div>
							
							<div class="grid_3">
								<input type="radio" id="c1" name="q1" value="C">
								<label for="c1"><img src="assets/11/C.jpg"><span class="text"><?php echo _("C"); ?></span></label>
							</div>
							
							<div class="grid_3">
								<input type="radio" id="d1" name="q1" value="D">
								<label for="d1"><img src="assets/11/D.jpg"><span class="text"><?php echo _("D"); ?></span></label>
							</div>
							
							<div class="clear"></div>
					
						</div>

						<div id="question2">
							<h2 class="grid_12" id = "h2f"><?php echo _("Question B. House cats born without tails are called manx. The manx characteristic is controlled by a dominant gene. The Punnett square for a mating between two manx cats is shown below. If the litter resulted in eight kittens, which of the choices is most likely to occur?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("8 manx kittens"); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("8 kittens with tails"); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("6 kittens with tails; 2 manx"); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("6 manx; 2 kittens with tails"); ?></span></label></li>
									<ol>
								</form> 

							<div id="sidepic">
									<img src="assets/11/sidepic.jpg">
							</div>
							</div>
	
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Two brown-eyed parents had one brown-eyed child and one blue-eyed child. Choose the Punnett square that best represents this situation."); ?></h2>
							
							<div class="image grid_3"></div>
							
							<div class="grid_9">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>
							
								<div class="feedback"></div>
							</div>
							
							<div class="clear"></div>
											</div>
							
					
					<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. House cats born without tails are called manx. The manx characteristic is controlled by a dominant gene. The Punnett square for a mating between two manx cats is shown below. If the litter resulted in eight kittens, which of the choices is most likely to occur?"); ?></h2>
							
							<p class="grid_12 text-center"><?php echo _("You answered..."); ?></p>
							<p class="text-center grid_12 answer"></p>
							
							<div class="feedback grid_12"></div>
													</div>
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
			$('#answer1 .image').html($('#question1 input:radio:checked').parent().find('img').clone());

			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect. None of the offspring would be blue-eyed (bb)."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That's right! These parents can produce both brown and blue-eyed offspring."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Neither parent is brown-eyed."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Only one parent has brown eyes."); ?></p>");

			
			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Probably not. It’s very unlikely that all offspring would be manx."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not likely. Kittens with tails should be rare from these parents."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Possible, but the table predicts about 3/4 of the kittens should be manx."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! The table predicts about 3/4 of the kittens should be manx."); ?></p>");

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1); // Correct answer: B
				saveAnswer('module-qc#-b', answer2); // Correct answer: D

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
				alert("<?php echo _("Please select your answers."); ?>");
				console.log("Answer not found");
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
				document.location.href = "10.php#screen3";
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
