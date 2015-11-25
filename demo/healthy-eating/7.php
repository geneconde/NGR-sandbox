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

	<title><?php echo _("Healthy Eating"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #8a0085; }
		h2 { color: #ff9a23;}
		.wrap { border-color: #FFFBEF;
			border-left: 1px dashed #F593FF;
			border-right: 1px dashed #F593FF; }
		.bg { background-image: url(assets/7/bg.jpg); overflow: hidden; }

		#question2 input[type="radio"] { display: none; }
		#question2 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question2 input[type="radio"]:checked + label img { border: 4px solid #31b573; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; }
		#question2 input[type="radio"]:checked + label span { color: #31b573; }
		/*#question2 span { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; }*/

		.ac-custom input[type="radio"]:checked + label { color: #31b573; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #31b573; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		.ac-custom li { padding: 0.3em 0; }
		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		
		.margin0 { margin: 0px; }

		#buttons .next { display: none; }
		.dblock {display: inline-block; text-align: center;}

		<?php if ($language == 'es_ES') : ?>

			p, h2, .ac-custom label { line-height: 29px; }

			@media only screen and (max-width: 865px) {
				
				#answers p { line-height: 28px; margin-top: 0; margin-bottom: 0; }

			}

			@media only screen and (max-width: 845px) {
				#question2 input[type="radio"] + label img {width: 74% ; margin: 10px 13%; }

			}

			@media only screen and (max-width: 800px) {
				p { line-height: 28px; }
				.chocolate {font-size: 17px; }
			}

		<?php endif; ?>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
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
							<h2 class="grid_12"><?php echo _("Question A. Choose the <span class='blink'>best</span> answer to the following question. How do we stay healthy?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("Exercising every day for half an hour is being healthy."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("Eating food from all the food groups is all you need to be healthy."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Not eating a lot of sugar or salt is healthy eating."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("Eating from all food groups and exercising is healthy living."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
						
						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. It's an hour before your big game and you're feeling hungry. What's the <span class='blink'>best</span> thing to eat?"); ?></h2>

							<div class="grid_3">
								<input type="radio" id="a1" name="q1" value="A">
								<label for="a1"><img src="assets/7/coke-float.jpg"><span class="dblock"><?php echo _("An ice cream float"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b1" name="q1" value="B">
								<label for="b1"><img src="assets/7/apple-and-muffin.jpg"><span class="dblock"><?php echo _("An apple and a muffin"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="c1" name="q1" value="C">
								<label for="c1"><img src="assets/7/spaghetti-with-meatballs.jpg"><span class="dblock"><?php echo _("Spaghetti and Meatballs"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d1" name="q1" value="D">
								<label for="d1"><img src="assets/7/burger-fries.jpg"><span class="dblock"><?php echo _("A cheeseburger and fries"); ?></span></label>
							</div>

							<div class="clear"></div>
						</div>

					
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Choose the <span class='blink'>best</span> answer to the following question. How do we stay healthy?"); ?></h2>

							<p class="grid_12 "><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12 "></p>

							<div class="feedback grid_12"></div>
						</div>
						
						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. It's an hour before your big game and you're feeling hungry. What's the <span class='blink'>best</span> thing to eat?"); ?></h2>
							<div class="grid_12">
								<p class="margin0"><?php echo _("You answered..."); ?></p>
								<div class="margin0 image grid_2 prefix_5 suffix_5"></div><div class="clear"></div>
								<p class="answer margin0"></p>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Eating healthy foods..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());
			$('#answer2 .image').html($('#question2 input:radio:checked').parent().find('img').clone());

			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Not quite, while exercising is necessary, eating a variety of foods is also needed to stay healthy.'); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Not quite, while eating a variety of foods is necessary, exercising is also needed to stay healthy.'); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Not quite, not having a lot of sugar or salt is a good eating habit, but regular exercise and eating a variety of foods is also needed for a healthy lifestyle.'); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Correct, daily exercise and healthy food choices will lead to healthy living.'); ?></p>");

			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, processed sugars will release energy very quickly and will not give you energy throughout the game.'); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Correct. An apple and muffin will give you the energy that you need over time.'); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, spaghetti and meatballs is a good combination of grains and protein, but a snack would be better before a game - such as an apple and a muffin.'); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, cheeseburger and fries has a lot of oil and is not nearly as healthy as an apple and muffin.'); ?></p>");

			// console.log(answer1);
			// console.log(answer2);

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

					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
