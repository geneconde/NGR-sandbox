<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'how-light-behaves-qc2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("How Light Behaves"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #31C1B7; }
		h2 { color: #EB6966; }
		
		.wrap { border-color: #9EF5FF; }
		.bg { background-image: url(assets/5/bg.jpg); }
		
		#sortable { width: 100%; padding: 10px 0; }
		#sortable li { background: #8AD55E; text-align: center; color: #000; margin: 20px; border-radius: 5px; cursor: move; border: dashed #3C89F3; }
		#sortable li:last-child { margin-bottom: 0; }
		
		#buttons .next { display: none; }

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>
						<h2 class="grid_12"><?php echo _("Arrange the sequence to show how light has to travel for the person on the bottom of the bunk bed to see the cat sitting on the top of the bunk bed in the mirror."); ?></h2>
						<div id="sort">	
							<div class="grid_6" id="not-sortable">
								<img src="assets/7/1.jpg" />
							</div>
							
							<div id="sortable-container" class="grid_5">
								<ul id="sortable">
									<li id="2"><span><?php echo _("Cat on top of bunk bed"); ?></span></li>
									<li id="1"><span><?php echo _("Lamp beside the mirror"); ?></span></li>
									<li id="4"><span><?php echo _("Man on bottom of bunk bed"); ?></span></li>
									<li id="3"><span><?php echo _("Mirror facing the bunk bed "); ?></span></li>
								</ul>
							</div>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<h2 class="grid_12"><?php echo _("Arrange the sequence to show how light has to travel for the person on the bottom of the bunk bed to see the cat sitting on the top of the bunk bed in the mirror."); ?></h2>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer"></div>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the cat..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	
	<script>
	
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('#sort').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString();

			if (answer == '0123') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Great! Light rays first have to reflect (bounce) off the cat, travel to the mirror, and reflect (bounce) off the mirror to person's eye."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! The light rays have to first shine on the cat, then bounce off the cat, travel to the mirror and bounce off the mirror to the person's eye."); ?></p>");
			} 

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {

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
				document.location.href = "6.php#screen2";
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

		$("#sortable").sortable({ scroll: false, containment: "#sortable-container" });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
