<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(16, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Newton's Third Law"); ?></title>

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
		h1 { color: #8200d4; }
		h2 { color: #008fff; }
		
		.wrap { border-color: #00C2FF; }
		.bg { background-image: url(assets/18/bg.jpg); }
		#question p {font-size: 24px;}
		#answer p {font-size: 24px;}
		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			border: 4px solid #0C9DA3;
			border-radius: 10px;
			cursor: pointer;
			padding: 5px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #C067D6;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question span {
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}

		#question input[type="radio"]:checked + label span { color: #777; }

		#question .illus { width: 40%; display: block; }

		#qa img, #qb img, #answer .image img { width: auto; }
		#answer .image img { padding: 0 10px; }
		#answer .image { text-align: center; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px){
			#question .illus { width: 35%;}
			#question input[type="radio"] + label img{ width: 80%; }
			#question p,#question h2{margin-bottom: 2px;margin-top: 2px;}
	
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?></h1>
						<h2><?php echo _("Choose the arrow of the appropriate size and direction to represent the following forces in this situation."); ?></h2>

						<img src="assets/18/18a.jpg" alt="Illustration" class="illus">
						
						<div id="qa">
							<p class="grid_12">A. <?php echo _("The force of the man pushing on the car:"); ?></p>
							<div class="grid_4">
								<input type="radio" id="a1" name="qa" value="A">
								<label for="a1"><img src="assets/18/18c1.png"></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b1" name="qa" value="B">
								<label for="b1"><img src="assets/18/18c2.png"></label>
							</div>

							<div class="grid_2">
								<input type="radio" id="c1" name="qa" value="C">
								<label for="c1"><img src="assets/18/18c3.png"></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d1" name="qa" value="D">
								<label for="d1"><img src="assets/18/18c4.png"></label>
							</div>
						</div>

						<div class="clear"></div>

						<div id="qb">
							<p class="grid_12">B. <?php echo _("The force of the car pushing back on the man:"); ?></p>
							<div class="grid_4">
								<input type="radio" id="a2" name="qb" value="A">
								<label for="a2"><img src="assets/18/18c1b.png"></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b2" name="qb" value="B">
								<label for="b2"><img src="assets/18/18c2b.png"></label>
							</div>

							<div class="grid_2">
								<input type="radio" id="c2" name="qb" value="C">
								<label for="c2"><img src="assets/18/18c3b.png"></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d2" name="qb" value="D">
								<label for="d2"><img src="assets/18/18c4b.png"></label>
							</div>
						</div>
						
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Aiming arrow..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '',
			answer2 = '';

		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('#qa input:radio:checked').val();
			answer2 = $('#qb input:radio:checked').val();

			if (answer == 'B' && answer2 == 'B' || answer == 'C' && answer2 == 'C') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You've got it! Anytime two objects put forces on each other, those forces are the same size and opposite in direction."); ?></p>"); //'
			
			} else if (answer == 'A' && answer2 == 'A' || answer == 'D' && answer2 == 'D'){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The forces are equal in size and opposite in direction, but the man puts a force on the car that is towards the left, and the car puts a force on the man which is towards the right."); ?></p>");
			
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  Even though the man and car are quite different in size, the forces that they put on each other will be equal in size, and opposite in direction."); ?></p>");
				
			}



			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
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
				document.location.href = "17.php";
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
