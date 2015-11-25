<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$smc->updateStudentLastscreen(20, $_SESSION['smid']);
		$sa = $sac->getStudentAnswer($_SESSION['smid'], 'staying-alive-qq5-a');
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

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<script src="js/save-answer.js"></script>

	<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
		<link rel="stylesheet" href="css/hexaflip2.css" />
	<?php } else { ?>
		<link rel="stylesheet" href="css/hexaflip.css" />
	<?php } ?>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #3986C9; }
		h3 { color: #336666; font-weight: normal; font-size: 24px; }
		.bg { background-image: url(assets/20/bg.jpg); overflow: hidden; }

		#question li { padding: 8px 0; }

		#answer { display: none; }
		#answer p { text-align: center; }
		#question1 { width:850px; }
		#question1 h3 { color: #E151B7; text-align: center; }
		#question1 h3:first-of-type { color: #395BB2; margin-top: 40px; }
		#choices1 { margin: 20px auto; }
		#hexaflip { margin: 20px auto;  }
		#answer p { margin: 2% 0; } 
		#answer img { width: auto; }
		#imganswer1 { margin: 0 auto; display: block; }
		.feedback img { padding-right: 10px; }
		#buttons .next { display: none; }

		html[dir="rtl"] #choices1 { margin-right: 5%; }
		.green { color: green; }
		@media screen and (max-width: 900px) {
		  #question p { line-height: 20px; }
		  #question #choices1 { margin: -5px auto !important; }
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
						<h1><?php echo _("Quiz Question #5"); ?></h1>

						<h2><?php echo _("Which of the following is not an important reason to preserve biodiversity?"); ?></h2>
						<div id="choices1">
							<p>A. <?php echo _("Most human food sources have wild ancestors and relatives."); ?></p>
							<p>B. <?php echo _("Many useful medications were first discovered in the wild."); ?></p>
							<p>C. <?php echo _("Humans have limited understandings of most ecosystems worldwide."); ?></p>
							<p>D. <?php echo _("Extinction has little impact on surviving species."); ?></p>
						</div>
						
						<h3><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></h3>
						<div id="hexaflip"></div>
					</div>

					<div id="answer">
						<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<div id="answer1">
							<img id="imganswer1" />
							<p id="selected_answer1"> </p>
							<p class="feedback"><img src="assets/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
						</div>
						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="21.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preserving biodiversity..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			console.log(answer);

			if (answered == 0) {
				saveAnswer('staying-alive-qq5-a', answer); // Correct answer: 
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			var hexavalue1 = hexa.getValue(); //answer for question A
			if (hexavalue1 == './assets/a.png') answer1 = "A";
			if (hexavalue1 == './assets/b.png') answer1 = "B";
			if (hexavalue1 == './assets/c.png') answer1 = "C";
			if (hexavalue1 == './assets/d.png') answer1 = "D";
			
			//check question A
			if(answer1 == "D") {
				textstr1 = "<?php echo _('That\'s the one. Extinction has a big impact, even if we don\'t see it right away.'); ?>";
				$('#selected_answer1').text('<?php echo _("Extinction has little impact on surviving species."); ?>');
				$('#imganswer1').attr("src","assets/d.png");
				$('#answer-icon1').attr("src", "assets/correct.png");
				$('#feedback1').addClass('green');
			} else {
				textstr1 = '';
				if(answer1 == "A") {
					textstr1 = "<?php echo _('Nope. All human food sources have origins in nature.'); ?>";
					$('#selected_answer1').text('<?php echo _("Most human food sources have wild ancestors and relatives."); ?>');
					$('#imganswer1').attr("src","assets/a.png");
				} else if (answer1 == "B") {
					textstr1 = "<?php echo _('Sorry. Many medications were first found in plants, fungi, or microbes.'); ?>";
					$('#selected_answer1').text('<?php echo _("Many useful medications were first discovered in the wild."); ?>');
					$('#imganswer1').attr("src","assets/b.png");
				} else if (answer1 == "C") {
					textstr1 = "<?php echo _('While this is true, it\'s actually a reason to preserve biodiversity.'); ?>";
					$('#selected_answer1').text('<?php echo _("Humans have limited understandings of most ecosystems worldwide."); ?>');
					$('#imganswer1').attr("src","assets/c.png");
				}
				$('#answer-icon1').attr("src", "assets/wrong.png");
				$('#feedback1').addClass('red');
			}
			$('#feedback1').text(textstr1);

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
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "19.php";
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
	<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<script src="js/hexaflip2.js"></script>
	<?php } else { ?>
	<script src="js/hexaflip.js"></script>
	<?php } ?>
	<script>
		var hexa, images = [
			'./assets/a.png',
			'./assets/b.png',
			'./assets/c.png',
			'./assets/d.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
    </script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
