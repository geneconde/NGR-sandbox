<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(17, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'gravity-in-action-qq2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/hexaflip.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #b85252; }
		
		.bg { background-image: url(assets/bg-qq-qc.jpg); }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { .bg { background-size: cover !important; } }

		
		#answer { display: none; }
		#answer p { text-align: center; }

		label img {border: 4px solid #fff; width: 100%; margin:auto; margin: 30px 0;}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #c16202; 
			border-radius: 10px;
			
			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		input[type='radio'] { display:none;}

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?></h1>

						<h2 class="grid_12"><?php echo _("Which of the following diagrams shows the accurate movement of the <span class='blink'>current</span>, the <span class='blink'>yellow arrows</span>, through the circuit?"); ?></h2>

						<div class="grid_3 prefix_2 suffix_1">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><img src="assets/20/A.png" /></label>
						</div>
						<div class="grid_3 prefix_1 suffix_2">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><img src="assets/20/B.png" /></label>
						</div>
						<div class="grid_3 prefix_2 suffix_1">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><img src="assets/20/C.png" /></label>
						</div>
						<div class="grid_3 prefix_1 suffix_2">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><img src="assets/20/D.png" /></label>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer grid_4 prefix_4 suffix_4"></div>

						<div class="feedback grid_12"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the arrows..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			answer = $('input:radio:checked').val();
			$('#answer .answer').html($('input:radio:checked + label').html());

			if (answer == 'A') {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not exactly – Current in a complete light bulb circuit moves from one end of the battery through the filament and back to the other end of the battery. In this case the current looks like it’s just coming out of one end of the battery and hitting the filament from two different directions."); ?></p>");
			} else if (answer == 'B'){
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct – Current in a complete light bulb circuit moves from one end of the battery through the filament and back to the other end of the battery. In this case the current is coming from the positive end of the battery through the filament and back to the negative end of the battery."); ?></p>");
			}else if (answer == 'C'){
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not exactly – Current in a complete light bulb circuit moves from one end of the battery through the filament and back to the other end of the battery. In this case the current looks like it’s just coming out of both ends of the battery and hitting the filament from opposite directions."); ?></p>");
			} else{
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not exactly – Current in a complete light bulb circuit moves from one end of the battery through the filament and back to the other end of the battery. In this case the current looks like it’s just coming out of both ends of the battery and hitting the filament from two different directions."); ?></p>");
			}
			

			console.log(answer);

			if (answered == 0) {
				saveAnswer('electrical-circuit-qq5-a', answer); // Correct answer: A
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

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
