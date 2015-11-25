<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'our-solar-system-qc3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		span#sphereLabelA {
		    position: relative !important;
		    top: 20px !important;
		}
		span#sphereLabelB {
		    position: relative !important;
		    top: -28px !important;
		}
		    
		h1 { color: #735c00; }
		h2 { color: #5949a8; }
		
		.wrap { border-color: #D16824; }
		.bg { background-image: url(assets/9/bg.jpg); overflow: hidden;}

		img { margin: 0; }
		#questions img { cursor: pointer; }
		#questions input[type="radio"] { display: none; }

		#questions input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#questions input[type="radio"]:checked + label img {
			border: 4px solid #777;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question1 ul li:nth-child(1) label img { margin-top: 20px; }
		#question1 ul li:nth-child(2) label img { margin-top: -32px; }
		#question1 ul li:nth-child(3) label img { margin-top: -71px; }
		#question1 ul li:nth-child(4) label img { margin-top: -73px; }
		#question1 ul li:nth-child(5) label img { margin-top: -63px; }
		#question1 ul li:nth-child(6) label img { margin-top: -37px; }

		#questions span { text-align: center; display: block; }

		#question2 ul li:nth-child(1) label img { margin-top: 20px; }
		#question2 ul li:nth-child(2) label img { margin-top: -21px; }
		#question2 ul li:nth-child(3) label img { margin-top: -16px; }
		#question2 ul li:nth-child(4) label img { margin-top: -33px; }
		#question2 ul li:nth-child(5) label img { margin-top: -73px; }
		#question2 ul li:nth-child(6) label img { margin-top: -101px; }
		
		.border { border: 1px solid black; }
		.feedback2 img { width: auto; }
		#buttons .next { display: none; }
		
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#question1 ul li:nth-child(2) label img { margin-top: -30px; }
			#question1 ul li:nth-child(3) label img { margin-top: -66px; }
			#question1 ul li:nth-child(4) label img { margin-top: -60px; }
			#question1 ul li:nth-child(5) label img { margin-top: -39px; }
			#question1 ul li:nth-child(6) label img { margin-top: -23px; }

			#question2 ul li:nth-child(4) label img { margin-top: -31px; }
			#question2 ul li:nth-child(5) label img { margin-top: -68px; }
			#question2 ul li:nth-child(6) label img { margin-top: -91px; }
		}

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#question1 ul li:nth-child(2) label img { margin-top: -33px; }
			#question1 ul li:nth-child(3) label img { margin-top: -76px; }
			#question1 ul li:nth-child(4) label img { margin-top: -88px; }
			#question1 ul li:nth-child(5) label img { margin-top: -89px; }
			#question1 ul li:nth-child(6) label img { margin-top: -64px; }

			#question2 ul li:nth-child(2) label img { margin-top: -24px; }
			#question2 ul li:nth-child(3) label img { margin-top: -27px; }
			#question2 ul li:nth-child(4) label img { margin-top: -36px; }
			#question2 ul li:nth-child(5) label img { margin-top: -80px; }
			#question2 ul li:nth-child(6) label img { margin-top: -114px; }
		}

		@media only screen and (max-width: 1250px){
			h2 {
			    line-height: 20px;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1><?php echo _("Quick Check #3"); ?></h1>
						<h2><?php echo _("The figures below represent the amount of radiation received on Earth’s surface from the Sun during the summer and winter in the southern hemisphere. Red represents the most, then green and yellow, and blue is the least."); ?></h2>
						<div id="question1" class="grid_6">
							<h2><?php echo _("Question A. Click on the area in Figure A where the days are longer than other parts of the world."); ?></h2>
							<span><?php echo _("Figure A"); ?></span>							
							<ul>
								<li>
									<input type="radio" id="a" name="f1" value="A">
									<label for="a"><img src="assets/9/figa_01.png"></label>
								</li>
								<li>
									<input type="radio" id="b" name="f1" value="B">
									<label for="b"><img src="assets/9/figa_02.png"></label>
								</li>
								<li>
									<input type="radio" id="c" name="f1" value="C">
									<label for="c"><img src="assets/9/figa_03.png"></label>
								</li>
								<li>
									<input type="radio" id="d" name="f1" value="D">
									<label for="d"><img src="assets/9/figa_04.png"></label>
								</li>
								<li>
									<input type="radio" id="e" name="f1" value="E">
									<label for="e"><img src="assets/9/figa_05.png"></label>
								</li>
								<li>
									<input type="radio" id="f" name="f1" value="F">
									<label for="f"><img src="assets/9/figa_06.png"></label>
								</li>
							</ul>	
						<span id="sphereLabelA"><?php echo _("Summer in the Southern Hemisphere"); ?></span>
						</div>
						<div id="question2" class="grid_6">
							<h2><?php echo _("Question B. Click on the area in Figure B where the days are shorter than other parts of the world."); ?></h2>
							<span><?php echo _("Figure B"); ?></span>
							<ul>
								<li>
									<input type="radio" id="a1" name="f2" value="A">
									<label for="a1"><img src="assets/9/figb_01.png"></label>
								</li>
								<li>
									<input type="radio" id="b2" name="f2" value="B">
									<label for="b2"><img src="assets/9/figb_02.png"></label>
								</li>
								<li>
									<input type="radio" id="c3" name="f2" value="C">
									<label for="c3"><img src="assets/9/figb_03.png"></label>
								</li>
								<li>
									<input type="radio" id="d4" name="f2" value="D">
									<label for="d4"><img src="assets/9/figb_04.png"></label>
								</li>
								<li>
									<input type="radio" id="e5" name="f2" value="E">
									<label for="e5"><img src="assets/9/figb_05.png"></label>
								</li>
								<li>
									<input type="radio" id="f6" name="f2" value="F">
									<label for="f6"><img src="assets/9/figb_06.png"></label>
								</li>
							</ul>
						<span id="sphereLabelB"><?php echo _("Winter in the Southern Hemisphere"); ?></span>
						</div>

					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2><?php echo _("The figures below represent the amount of radiation received on Earth’s surface from the Sun during the summer and winter in the southern hemisphere. Red represents the most, then green and yellow, and blue is the least."); ?></h2>
						<div id="answer1" class="grid_12">
							<h2><?php echo _("Question A. Click on the area in Figure A where the days are longer than other parts of the world."); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>

							<div class="feedback"></div>
						</div>
						<div id="answer2" class="grid_12">
							<h2><?php echo _("Question B. Click on the area in Figure B where the days are shorter than other parts of the world."); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer2"></p>

							<div class="feedback2"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Summer or winter?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

			
		
		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();

			if (answer1 == 'F') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! The area shaded red has a longer period of daylight than other areas on Earth."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! The area shaded red has a longer period of daylight than other areas on Earth."); ?></p>");
			}

			answer2 = $('#question2 input:radio:checked').val();

			if (answer2 == 'E' || answer2 == 'D') {
				$('.feedback2').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! The area shaded blue and light blue has a shorter period of daylight than other areas on Earth."); ?></p>");
			} else {
				$('.feedback2').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! The area shaded blue and light blue has a shorter period of daylight than other areas on Earth."); ?></p>");
			}


			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('our-solar-system-qc3-a', answer1); // Correct answer: 
				saveAnswer('our-solar-system-qc3-b', answer2); // Correct answer:  

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('#question1 input:radio:checked').length;
			checkAnswer2 = $('#question2 input:radio:checked').length;
			var checkAnswers = checkAnswer + checkAnswer2;

			if (checkAnswer == 0 || checkAnswer2 == 0) {
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
				document.location.href = "8.php";
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
