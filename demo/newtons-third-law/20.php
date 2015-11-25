<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq5-a');
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
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #8200d4; }
		h2 { color: #008fff; }
		
		.wrap { border-color: #00C2FF; }
		.bg { background-image: url(assets/18/bg.jpg); }

		/*#question input[type="radio"] { display: none; }

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
		}*/

/*		#question input[type="radio"]:checked + label span { color: #777; }

		#question .illus { width: 100%; display: block; }
		#question img { width: auto;}
		#qa p, #qb p { padding-top: 5%; }*/
		#answer img { text-align: center; }
		#answer img { width: auto !important; }

		#buttons .next { display: none; }
		.ta-center{text-align:center;}
		.image-fix img{width: 5.5%;}
		.image-fix .img1{margin-left: 110px;}
		.image-fix .img2{margin-left: 190px;}
		.ac-custom input[type="radio"]:checked + label { color: #1765A3; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #1765A3; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #1765A3; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #1765A3; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		@media screen and (max-width: 635px ){
				.image-fix .img1 {margin-top: 38px; margin-left: 50%; width: 15%;}
				.image-fix .img2 {margin-top: -75px; margin-left: 184%; width: 15%;}
				.ac-custom li {margin-bottom: -50px;}
			}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?></h1>

						<h2><?php echo _("Select the arrow of the appropriate size and direction to represent the following forces in this situation."); ?></h2>

						<div class="grid_8">
							<span class="grid_5 prefix_1 ta-center"><?php echo _("Force of the hammer on the nail"); ?></span>
							<span class="grid_5 ta-center"><?php echo _("Force of the nail on the hammer"); ?></span>

							<div class="clear"></div>

							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li>
										<input id="a" name="q" type="radio" value="A">
										<label class="image-fix" for="a"><img class="img1" src="assets/20/20b.png"><img class="img2" src="assets/20/20d.png"></label>
										<div class="clear"></div>
									</li>
									<li>
										<input id="b" name="q" type="radio" value="B">
										<label class="image-fix" for="b"><img class="img1" src="assets/20/20e.png"><img class="img2" src="assets/20/20b.png"></label>
									</li>
									<li>
										<input id="c" name="q" type="radio" value="C">
										<label class="image-fix" for="c"><img class="img1" src="assets/20/20d.png"><img class="img2" src="assets/20/20b.png"></label>
									</li>
									<li>
										<input id="d" name="q" type="radio" value="D">
										<label class="image-fix" for="d"><img class="img1" src="assets/20/20d.png"><img class="img2" src="assets/20/20d.png"></label>
									</li>
								</ol>
							</form>
						</div>
						<div class="grid_4">
							<img src="assets/20/20a.jpg" alt="Image Illustation" class="illus">
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<p class="answer grid_12"></p>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying forces..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '',
			answer2 = '';

		function save() {

			//$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('img').clone());

			answer = $('input:radio:checked').val();

			if (answer == 'A') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  The forces are equal in size and opposite in direction, but the hammer puts a force on the nail in a downward direction, and the nail puts a force on the hammer in an upward direction."); ?></p>");
			} 

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Even though we tend to focus on the force of the hammer hitting the nail, the nail also puts a force on the hammer. That's the force that stops the motion of the hammer. Without that force, you’d have to use the muscles in your arm to stop the hammer with every swing. You'd wear yourself out pretty quickly, if that was the case."); ?></p>");

			if (answer == 'C') 
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You got it! Anytime two objects put forces on each other, those forces are the same size and opposite in direction."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Even though we tend to focus on the force of the hammer hitting the nail, the nail also puts a force on the hammer. That's the force that stops the motion of the hammer. Without that force, you’d have to use the muscles in your arm to stop the hammer with every swing. You'd wear yourself out pretty quickly, if that was the case."); ?></p>");
			//'

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 1) {
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
