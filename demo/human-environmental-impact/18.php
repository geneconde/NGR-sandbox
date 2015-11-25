<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'human-impact-qq3-a');
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
		h1 { color: #00A7D4; }
		h2 { color: #F84D82; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/18/bg.jpg); }

		#hexaflip { margin: 0 auto auto auto; }
		#box { text-align: center; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }

		.ac-custom input[type="radio"]:checked + label { color: #00a18b; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #00a18b; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #00a18b; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }
		
		/*.ac-custom input[type="checkbox"]:checked + label { color: #31b573; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #31b573; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }*/
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					
					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?></h1>
						<h2><?php echo _("Which of the following statements about humans and the environment is <span class='blink'>NOT true</span>?"); ?></h2>
						
						<div class=" grid_12">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("Human activities can have both a positive and a negative impact on the environment."); ?></span></label></li>
									<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("Not everything humans put into the environment is a pollutant."); ?></span></label></li>
									<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("The purpose of the environment is to provide resources to make people's lives more comfortable and productive."); ?></span></label></li>
									<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("Humans are part of the environment so anything we do to impact the environment impacts us too."); ?></span></label></li>
								<ol>
							</form>
						</div>
									
						<div class="clear"></div>
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Interacting with environment..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - This is a TRUE statement. Human activities can have a negative impact on the environment when pollution occurs but humans can also have a positive impact on the environment when they clean up pollution or change their activities so that they don't pollute."); ?></p>");//'

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - This is a TRUE statement. Not everything humans put into the environment is a pollutant. For instance, when we compost our waste food to create organic fertilizer, it actually helps the plants in the environment rather than hurting them."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct. This is NOT a TRUE statement. The environment is part of nature. It is neither there to help or hurt humans. Its purpose is not to make our lives more comfortable. We are part of nature and the environment and we should live in harmony with it to best ensure our long-term survival."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - This is a TRUE statement. Humans are part of the environment like all of the other animals on earth. But human activities impact the environment much greater than all the other animals so we have to be very careful about what we do because anything we do to the environment can come back to affect us too. For instance, if we have millions of people in a city flushing their toilets into a lake, like in the old days, people using the lake for drinking water and fishing would get sick."); ?></p>");

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

				$('#question').fadeOut(function(){ 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "17.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answer').fadeOut(function() {
					
					$('.answer').html('');
					$('.feedback').html('');
		
					answer = '';
					
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
