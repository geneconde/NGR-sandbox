<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'our-solar-system-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

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
		h1 { color: #735c00; }
		h2 { color: #5949a8; }
		
		.wrap { border-color: #D16824; }
		.bg { background-image: url(assets/5/bg.jpg); overflow: hidden;}

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #32058D;
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
			font-size: 20px;
		}

		#question input[type="radio"]:checked + label span { color: #32058D; }

		#buttons .next { display: none; }

		#question img { width: auto; display: block; }
		@media only screen and (max-width: 1250px){
				.grid_6 img {
				    margin-left: auto !important;
				    margin-right: auto !important;
				}
				.container_12 .grid_6 {
				    width: 48% !important;
				}
				.grid_6 img {
				    width: 35% !important;
				}
		}
		.image.grid_4.prefix_4.suffix_4 img {
		    width: 80%;
		    margin-left: auto !important;
		    margin-right: auto !important;
		    display: block;
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>
						<h2 class="grid_12"><?php echo _("What factor do you think is associated most closely with whether a planet is likely to be placed in the Rocky or Gaseous category?"); ?></h2>

						<div class="grid_6">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><img src="assets/5/distance.png"><span><?php echo _("Distance from Sun"); ?></span></label>
						</div>

						<div class="grid_6">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><img src="assets/5/formation.png"><span><?php echo _("Age of Formation"); ?></span></label>
						</div>

						<div class="grid_6">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><img src="assets/5/rotational.png"><span><?php echo _("Rotational Speed"); ?></span></label>
						</div>

						<div class="grid_6">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><img src="assets/5/moons.png"><span><?php echo _("Number of Moons"); ?></span></label>
						</div>

						<div class="clear"></div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2 class="grid_12"><?php echo _("What factor do you think is associated most closely with whether a planet is likely to be placed in the Rocky or Gaseous category?"); ?></h2>

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
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

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
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! The planets closest to the Sun are all rocky planets."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Try again. It's thought that the ages of the planets are approximately the same."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. The factor most closely associated with the type of planet is distance from the Sun."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Try again. Both types of planets can have one or more moons."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('our-solar-system-qc1-a', answer); // Correct answer: A
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
				document.location.href = "4.php#screen2";
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
