<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$smc->updateStudentLastscreen(17, $_SESSION['smid']);
		$sa = $sac->getStudentAnswer($_SESSION['smid'], 'staying-alive-qq2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/svgcomponent.css" />
	<link rel="stylesheet" type="text/css" href="css/responsiveslides.css" />

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<script src="js/jquery.blink.min.js"></script>
	<script src="js/global.js"></script>
	<script src="js/save-answer.js"></script>
	<script src="js/responsiveslides.js"></script>
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #3986C9; }
		.bg { background-image: url(assets/17/bg.jpg); }

		#question li { padding: 8px 0; }
		.ac-custom { width: 400px; float: left; padding: 0 !important; margin-left: 40px; }
		.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
		.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
		.ac-custom input[type="radio"]:checked + label { color: #780046; }
		.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
		.ac-custom label::before { border: 2px solid #780046; }
		.ac-custom svg path { stroke: #780046; }
		.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
		.slider { width: 300px; float: right; margin-right: 40px; }

		#answer { display: none; }
		#answer p { text-align: center; }
		#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

		.image img { width: 300px; }
		.answer span { display: block; }
		.feedback { font-size: 24px; text-align: center; }
		.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

		#buttons .next { display: none; }

		html[dir="rtl"] .ac-custom { width: 485px; margin-left: 0; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			.ac-custom {width: 100%;}
			.slider { float: none; display: block; margin: 0 auto; }
		}
		@media screen and (max-width: 845px) {
			.slider { width: 35% !important; }
		}
		@media screen and (max-width: 780px) {
			.slider { clear: both; float: none !important; margin: 0 auto !important; }
			.ac-swirl label { font-size: 18px !important; }
		}
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1><?php echo _("Quiz Question #2"); ?></h1>

						<h2><?php echo _("Based on what happened at Yellowstone Park, we know that predators like wolves should best be viewed as..."); ?></h2>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ul>
								<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("Significant parts of natural systems"); ?></label></li>
								<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("Angry killers without mercy"); ?></label></li>
								<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("Playful, friendly animals"); ?></label></li>
								<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("Wild animals best taken out of nature's cycle"); ?></label></li>
							</ul>
						</form>
						
						<ul class="rslides slider">
							<li> <img src="assets/4/s1a.jpg"> </li>
							<li> <img src="assets/4/s1b.jpg"> </li>
							<li> <img src="assets/4/s1c.jpg"> </li>
						</ul>
					</div>

					<div id="answer">
						<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="18.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Hunting for food..."); ?></strong></section></section>

	<script>
		$(".slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});

		var back = $('.back'),
			next = $('.next'),
			check = $('.checkanswer'),
			question = $('#question'),
			answer = $('#answer'),
			ans = '',
			checkAnswer = 0,
			answered = 1;

			question.find('input[type=radio]').on('click', function() {
				var radio = $(this);

				if (radio.attr('id') == 'a') {
					answer.find('.image').html('<img src="assets/17/a.png">');
					answer.find('.answer').html('<?php echo _("Significant parts of natural systems"); ?>');
					answer.find('.feedback').html('<p class="green"><img src="assets/correct.png"><?php echo _("Correct. Wolves are top predators in many ecosystems."); ?></p>');
					ans = 'A';
				}

				if (radio.attr('id') == 'b') {
					answer.find('.image').html('<img src="assets/17/b.png">');
					answer.find('.answer').html('<?php echo _("Angry killers without mercy"); ?>');
					answer.find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Hardly. Wolves have tender relationships with other wolves."); ?></p>');
					ans = 'B';
				}

				if (radio.attr('id') == 'c') {
					answer.find('.image').html('<img src="assets/17/c.png">');
					answer.find('.answer').html('<?php echo _("Playful, friendly animals"); ?>');
					answer.find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Um... no. Wolves, even puppies, are very dangerous."); ?></p>');
					ans = 'C';
				}

				if (radio.attr('id') == 'd') {
					answer.find('.image').html('<img src="assets/17/d.png">');
					answer.find('.answer').html("<?php echo _('Wild animals best taken out of nature\'s cycle'); ?>");
					answer.find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Sorry. It\'s important to have wild wolves and taking them out of the ecosystem has negative effects on plants and animals.'); ?></p>");
					ans = 'D';
				}
			});

			function save() {
				if (answered == 0) {
					saveAnswer('staying-alive-qq2-a', ans);
				}
			}

			back.click(function() {
				if (question.is(':visible')) {
					document.location.href = "16.php";
				} else if (answer.is(':visible')) {
					next.fadeOut(function() { check.fadeIn(); });
					answer.fadeOut(function(){
						question.fadeIn();
						window.location.hash = '';
					}); 
				}
			});
			
			check.click(function() { 
				checkAnswer = $('input:radio:checked').length;

				if (checkAnswer == 0) {
					alert('<?php echo _("Please select your answer."); ?>');
				} else {
					check.fadeOut(function() { next.fadeIn(); });
					question.fadeOut(function(){
						answer.fadeIn();
						save();
						window.location.hash = '#answer';
					}); 
				}
			});
	</script>

	<script src="js/svgcheckbx.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
