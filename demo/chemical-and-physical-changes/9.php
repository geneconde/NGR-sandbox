<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'chemical-and-physical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'chemical-and-physical-changes-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

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
		h1 { color: #916D5D }
		h2 { color: #93648D; }
		
		.wrap { border-color: #FFE0CE; }
		.bg { background-image: url(assets/9/bg.jpg); overflow: hidden;background-size: 100% 100% !important;}

		#question1 input[type="radio"] { display: none; }
		#question1 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question1 input[type="radio"]:checked + label img { border: 4px solid #EB6966; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; }
		#question1 input[type="radio"]:checked + label span { color: #EB6966; }
		#question1 div span { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; font-size: 20px;}
		#question1 h2, #question2 h2 {font-size: 22px;}

		.ac-custom input[type="radio"]:checked + label { color: #EB6966; }
		<?php if ($language == 'es_ES') : ?>
			.ac-custom label { color: #000; padding-left: 49px; font-size: 21px;}
		<?php else : ?>
			.ac-custom label { color: #000; padding-left: 49px; font-size: 24px;}
		<?php endif; ?>
		.ac-custom label::before { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #EB6966; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -5px; }
		.ac-custom li { padding-bottom: 15px; font-size: 19px;}
		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer1 p { text-align: left; }

		html[dir=rtl] #answer1 p { text-align: right; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px){
			.ac-custom li { padding-bottom: 10px; font-size: 17px;}
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			#question1 h2, #question2 h2 {font-size: 20px;}
			.ac-custom label{font-size: 19px;}

		}
		@media screen and (max-width: 960px){
			.ac-custom li { padding-bottom: 10px; font-size: 17px;}
			#question1 div span {font-size: 18px;}
			#question1 h2, #question2 h2 {font-size: 18px;}
			.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
			.ac-custom label{font-size: 17px;}
		}
		@media screen and (max-width: 720px){
			.ac-custom li { padding-bottom: 5px; font-size: 16px;}
			#question1 div span {font-size: 16px;}
			#question1 h2, #question2 h2 {font-size: 16px;}
			.ac-custom label{font-size: 16px;}
		}

		<?php if ($language == 'zh_CN') : ?>
			@media screen and (max-width: 960px){
				.ac-custom li { padding-bottom: 15px; font-size: 17px;}				
			}
			@media screen and (max-width: 720px){
				.ac-custom li { padding-bottom: 15px; font-size: 16px;}				
			}
		<?php endif; ?>
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
							<h2 class="grid_12"><?php echo _("Question A. Which of the following cake ingredients is <span class='blink'>not</span> a chemical compound?"); ?></h2>

							<div class="grid_3">
								<input type="radio" id="a1" name="q1" value="A">
								<label for="a1"><img src="assets/9/a.jpg"><span><?php echo _("Egg"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b1" name="q1" value="B">
								<label for="b1"><img src="assets/9/b.jpg"><span><?php echo _("Sugar"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="c1" name="q1" value="C">
								<label for="c1"><img src="assets/9/c.jpg"><span><?php echo _("Baking soda"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d1" name="q1" value="D">
								<label for="d1"><img src="assets/9/d.jpg"><span><?php echo _("None of the above"); ?></span></label>
							</div>

							<div class="clear"></div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. Which of the following statements are <span class='blink'>false</span> about chemical compounds?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li class="ac-custom ac-custom-s"><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("All chemicals are bad for you so never eat or go near any chemical compounds."); ?></span></label></li>
										<li class="ac-custom ac-custom-s"><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("Almost everything in the universe is made up of chemical compounds – some of them are bad for you and some of them are good."); ?></span></label></li>
										<li class="ac-custom ac-custom-s"><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Some chemical compounds are necessary for your everyday survival."); ?></span></label></li>
										<li class="ac-custom ac-custom-s"><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("It's important to understand ideas about chemicals so you know which are bad for you and which are good."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following cake ingredients is <span class='blink'>not</span> a chemical compound?"); ?></h2>

							<div class="image grid_2"></div>

							<div class="grid_10">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Which of the following statements are <span class='blink'>false</span> about chemical compounds?"); ?></h2>

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
		<a href="10.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Sorting cake ingredients..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '',
			ans = '';

		function save() {
			ans = $('#question1 input:radio:checked').parent().find('span').text();
			$('#answer1 .answer').html(ans);
			$('#answer1 .image').html($('#question1 input:radio:checked').parent().find('img').clone());

			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – Eggs are made from very complicated chemical compounds."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – Sugar is the chemical C<sub>6</sub>H<sub>12</sub>O<sub>6</sub>  which means it's made up from the elements carbon, hydrogen, and oxygen."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – baking soda is Sodium bicarbonate - NaHCO<sub>3</sub>. Even though it's a chemical it's totally safe to have in your cake."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes – all of the ingredients your mom puts in your birthday cake are really chemicals."); ?></p>");

			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes – This is a false statement. Not all chemical compounds are bad for you. In fact some are critical to life – like water – which is the chemical compound H<sub>2</sub>O – is critical for your survival."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – This is a true statement - Almost everything in the universe is made up from chemical compounds. Some of them are bad for you and some of them are good."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not Quite - This is a true statement. Some chemical compounds are necessary for your everyday survival – like water – which is the chemical compound H<sub>2</sub>O is critical for your survival."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – This is a true statement - It's important to understand ideas about chemicals so you know which are bad for you and which are good."); ?></p>");

			console.log(ans.toLowerCase());
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('chemical-and-physical-changes-qc3-a', ans.toLowerCase()); // Correct answer: A
				saveAnswer('chemical-and-physical-changes-qc3-b', answer2); // Correct answer: A

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
				document.location.href = "8.php#screen2";
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
