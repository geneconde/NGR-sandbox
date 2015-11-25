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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
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
		.wrap { border-color: #FCF8ED;
			border-left: 1px dashed #F593FF;
			border-right: 1px dashed #F593FF; 
		}
		.bg { background-image: url(assets/5/bg.jpg); overflow: hidden; }

		#question1 input[type="radio"], #question2 input[type="radio"] { display: none; }
		#question1 input[type="radio"] + label img, #question2 input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}
		#question1 input[type="radio"]:checked + label img, #question2 input[type="radio"]:checked + label img {
			border: 4px solid #31b573;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}
		#question1 span, #question2 span {
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}
		#question1 input[type="radio"]:checked + label span, #question2 input[type="radio"]:checked + label span { color: #31b573; }
		#buttons .next { display: none; }
		.ac-custom input[type="radio"]:checked + label { color: #777; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #777; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		.margin0 { margin: 0px;}

		<?php if ($language == 'es_ES') : ?>

			.image img {margin: 0;}

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
					<div id="question1">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>
						<h2 class="grid_12"><?php echo _("Question A. Which food is a whole grain product?"); ?></h2>

						<div class="grid_3">
							<input type="radio" id="a1" name="q1" value="Mushroom">
							<label for="a1"><img src="assets/5/shrooms.jpg"><span><?php echo _("Mushroom"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="b1" name="q1" value="Oatmeal">
							<label for="b1"><img src="assets/5/oatmeal.jpg"><span><?php echo _("Oatmeal"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="c1" name="q1" value="White Bread">
							<label for="c1"><img src="assets/5/bread.jpg"><span><?php echo _("White Bread"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="d1" name="q1" value="White Rice">
							<label for="d1"><img src="assets/5/rice.jpg"><span><?php echo _("White Rice"); ?></span></label>
						</div>

						<div class="clear"></div>
					</div>
					<div id="question2">
						<h2 class="grid_12"><?php echo _("Question B. Which food group is our body's best source of energy?"); ?></h2>

						<div class="grid_3">
							<input type="radio" id="a2" name="q2" value="Meat and Beans group">
							<label for="a2"><img src="assets/5/meats.jpg"><span><?php echo _("Meat and Beans group"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="b2" name="q2" value="Milk group">
							<label for="b2"><img src="assets/5/milk-group.jpg"><span><?php echo _("Milk group"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="c2" name="q2" value="Grain group">
							<label for="c2"><img src="assets/5/grain.jpg"><span><?php echo _("Grain group"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="d2" name="q2" value="Vegetable group">
							<label for="d2"><img src="assets/5/vegetable.jpg"><span><?php echo _("Vegetable group"); ?></span></label>
						</div>

						<div class="clear"></div>
					</div>
				</div>
						<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Which food is a whole grain product?"); ?></h2>
							<div class="grid_12">
								<p class="margin0"><?php echo _("You answered..."); ?></p>
								<div class="image grid_2 prefix_5 suffix_5 margin0"></div>
								<p class="answer margin0"></p>

								<div class="feedback margin0"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Which food group is our body's best source of energy?"); ?></h2>
							<div class="grid_12">
								<p class="margin0"><?php echo _("You answered..."); ?></p>
								<div class="image grid_2 prefix_5 suffix_5 margin0"></div>
								<p class="answer grid_12 margin0"></p>

								<div class="feedback grid_12 margin0"></div>
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
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

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
			$('#answer2 .image').html($('#question2 input:radio:checked').parent().find('img').clone());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'Mushroom')
				$('#answer1 .feedback').html("<p class='red margin0'><img src='assets/wrong.png'><?php echo _('No, mushrooms are not part of the grain food group. Oatmeal is a whole grain product.'); ?></p>");

			if (answer1 == 'Oatmeal')
				$('#answer1 .feedback').html("<p class='green margin0'><img src='assets/correct.png'><?php echo _('Correct, oatmeal is a whole grain product.'); ?></p>");

			if (answer1 == 'White Bread')
				$('#answer1 .feedback').html("<p class='red margin0'><img src='assets/wrong.png'><?php echo _('Not quite, white bread is part of the grain food group, but it is not whole grain.'); ?></p>");

			if (answer1 == 'White Rice')
				$('#answer1 .feedback').html("<p class='red margin0'><img src='assets/wrong.png'><?php echo _('Not quite, white rice is part of the grain food group, but it is not whole grain.'); ?></p>");

			if (answer2 == 'Meat and Beans group')
				$('#answer2 .feedback').html("<p class='red margin0'><img src='assets/wrong.png'><?php echo _('No, meat and beans are an important source for your body to build protein.'); ?></p>");

			if (answer2 == 'Milk group')
				$('#answer2 .feedback').html("<p class='red margin0'><img src='assets/wrong.png'><?php echo _('Milk is a good source of vitamins and minerals, and helps the body build protein.'); ?></p>");

			if (answer2 == 'Grain group')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Correct. We get the most energy from grains.'); ?></p>");

			if (answer2 == 'Vegetable group')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Vegetables offer the body different kinds of vitamins and minerals, but we get the most energy from grains.'); ?></p>");

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
				document.location.href = "4.php#screen3";
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
