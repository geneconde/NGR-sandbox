<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'built-to-survive-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Built to Survive"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">
	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/hexaflip.css" />
	<style>
		body { overflow: hidden; }
		h1 { color: #4F8AD3; }
		.bg { background-image: url(images/18/bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
		img.back-toggle-answer, #buttons .next { display: none; }
		#hexaflip { margin: 10px auto 0; }
		
		#question ul { list-style: none; }
		#question li { font-size: 24px; padding: 5px 0px; }
		#answer { display: none; text-align: center; }
		
		#answer .feedback { overflow: hidden; }
		#answer .answer img { display: inline-block; }
		#answer p span { display: block; }
		
		.blink { text-transform: uppercase; }
		.info { color: #055D79; }
		
		#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
		html[dir="rtl"] #answer p { text-align: center; }
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Which of the following would <span class='blink red'>NOT</span> be a useful adaptation of fish or sea mammals?"); ?></h2>
				<ul>
					<li><?php echo _("A. Having lungs that use oxygen more efficiently."); ?></li>
					<li><?php echo _("B. Having blubber or thick underfur for insulation."); ?></li>
					<li><?php echo _("C. Having sharp senses to communicate underwater with sound."); ?></li>
					<li><?php echo _("D. Having survival skills that only work with light."); ?></li>
				</ul>
				<p class="info"><?php echo _("Rotate or flip the 3D box below either up or down to set your answer."); ?></p>
				
				<div id="hexaflip"></div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="answer"></div>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Catching fishes..."); ?></strong></section></section>
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jquery.blink.min.js"></script>
	<script src="scripts/hexaflip.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/save-answer.js"></script>
	<script>
		var back = $('a.back-toggle'),
			next = $('a.next-toggle'),
			check = $('a.check-toggle'),
			question = $('#question'),
			answer = $('#answer'),
			answered = <?php echo $answered; ?>;
		function save() {
			var ans,
				hexaValue = hexa.getValue();
			if (hexaValue == './images/others/a.png') {
				ans = 'A';
				answer.find('.answer').html('<img src="images/others/a.png" alt="A" /><p><?php echo _("Having lungs that use oxygen more efficiently."); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png" id="answer-icon" alt="Wrong" class="img-align" /><?php echo _("No, using oxygen efficiently is important. The lungs of many sea mammals are proportionately smaller than the lungs of humans, but they fill their lungs and are able to exchange 90% of their air in each breath."); ?></p>');
			}
			if (hexaValue == './images/others/b.png') {
				ans = 'B';
				answer.find('.answer').html('<img src="images/others/b.png" alt="B" /><p><?php echo _("Having blubber or thick underfur for insulation."); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png" id="answer-icon" alt="Wrong" class="img-align" /><?php echo _("No, the ability to stay warm and not lose body heat is a very useful adaptation."); ?></p>');
			}
			if (hexaValue == './images/others/c.png') {
				ans = 'C';
				answer.find('.answer').html('<img src="images/others/c.png" alt="C" /><p><?php echo _("Having sharp senses to communicate underwater with sound."); ?></p>');
				answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png' id='answer-icon' alt='Wrong' class='img-align' /><?php echo _("No, sharp hearing is needed to find prey underwater and to make sure you are not a larger animal's prey either."); ?></p>");
			}
			if (hexaValue == './images/others/d.png') {
				ans = 'D';
				answer.find('.answer').html('<img src="images/others/d.png" alt="D" /><p><?php echo _("Having survival skills that only work with light."); ?></p>');
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png" id="answer-icon" alt="Correct" /><?php echo _("Correct. This would not be the best adaptation because many sea animals live deep in the oceans and do not have access to much sunlight."); ?></p>');
			}
			if (answered == 0) {
				saveAnswer('built-to-survive-qq3-a', ans);
				answered = 1;
			}
		}
		check.on('click', function() {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function() {
				save();
				answer.fadeIn();
			});
		});
		
		back.on('click', function() {
			if($('#question').is(':visible')) {
				document.location.href = "17.php";
			} else if ($('#answer').is(':visible')) {
		
				next.fadeOut(function() { check.fadeIn(); });
				answer.fadeOut(function() {
					question.fadeIn();
				});
			}
		});

		$(window).resize(function() {
			makeHexa();
		});
	</script>
    <script>
		var set1 = ['./images/others/a.png','./images/others/b.png','./images/others/c.png','./images/others/d.png'];
		var hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set1 }, { size: 200 });
    </script>
	<?php include("setlocale.php"); ?>
</body>
</html>
