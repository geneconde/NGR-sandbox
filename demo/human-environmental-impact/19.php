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

	<title><?php echo _("Human Environmental Impact"); ?></title>

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
		h1 { color: #00A7D4; }
		h2 { color: #F84D82; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/19/bg.jpg); }

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;
			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #00a18b;
			border-radius: 10px;
			-webkit-transition: all .3s ease;
			transition: all .3s ease;
			backface-visibility: hidden;
		}

		#question div span {
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}

		#question input[type="radio"]:checked + label span { color: #00a18b; }

		#buttons .next { display: none; }

		.image {text-align: center;}
		.image img { width: 80%; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #4"); ?></h1>
						<h2 class="grid_12"><?php echo _("Which of the following activities you do every day has the <span class='blink'>least</span> negative effect on the environment?"); ?></h2>

						<div class="grid_3">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><img src="assets/19/a.jpg"><span><?php echo _("Sleeping"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><img src="assets/19/b.jpg"><span><?php echo _("Going to school"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><img src="assets/19/c.jpg"><span><?php echo _("Eating breakfast"); ?></span></label>
						</div>

						<div class="grid_3">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><img src="assets/19/d.jpg"><span><?php echo _("Watching TV"); ?></span></label>
						</div>

						<div class="clear"></div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="image grid_4 prefix_4 suffix_4"></div>

						<p class="answer grid_12"></p>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Eliminating pollution..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct - Sleeping has very little effect on the environment - except if you're sleeping in a comfortable heated or air conditioned house because it impacts the environment to build, heat and air-condition the house. So even sleep has some impact."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - Going to school impacts the environment because the school is a big building that is built using resources from the environment and is heated and cooled as well. And, if you drive or take a bus to school, that takes resources from the environment - resources to build and power the car or bus."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - Eating breakfast means that a farm probably was necessary to provide your food, and farms impact the environment as well."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - Watching TV impacts the environment because it requires electricity that comes from coal, nuclear or hydroelectric power plants."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
				answered = 1;
			}
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
				document.location.href = "18.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {
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
