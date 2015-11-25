<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'air-around-us-qc2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("The Air Around Us"); ?></title>

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
		h1 { color: #fe8a17; }
		h2 { color: #00a49d; line-height: 22px;font-size: 22px;}
		.wrap > .bg { overflow: hidden !important; }
		.wrap { border-color: #78DFFE; }
		.bg { background-image: url(assets/5/bg.jpg); }

		#buttons .next { display: none; }
		
		#answers p { margin: 5px 0; }
		
		#sortable1 { width: 100%; padding: 10px 0; }
		#sortable1 li { background-color: #F2EA3F; text-align: center; padding: 5px 0; color: black; margin-bottom: 4px; border-radius: 5px; cursor: move; border: dashed #f28f00; }
		#sortable1 li:last-child { margin-bottom: 0; }

		#sortable2 { width: 100%; padding: 10px 0; }
		#sortable2 li { background-color: #8DCFF5; text-align: center; padding: 0; color: black; margin-bottom: 4px; border-radius: 5px; cursor: move; border: dashed #0080ff; }
		#sortable2 li img {margin: 0; height: 60px; }
		#sortable2 li:last-child { margin-bottom: 0; }
		
		#answer1 .answer, #answer2 .answer { margin: 10px 0; }
		#answer1 .answer li, #answer2 .answer li { background-color: #F2EA3F; list-style: none; text-align: center; color: #000; margin-bottom: 4px; border-radius: 5px; }
		#answer2 .answer li img { margin: 0;}
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>

						<div class="grid_12" id="question1">
							<h2><?php echo _("Higher temperatures in gas cause lower density. Put the following sentences in order by dragging them up and down to explain how higher temperatures in gas cause lower density."); ?></h2>
			
							<div id="sortable-container1" class="grid_6 prefix_3 suffix_3">
								<ul id="sortable1">
									<li id="a1"><?php echo _("Gas particles move more quickly"); ?></li>
									<li id="b1"><?php echo _("So the same mass takes up more space"); ?></li>
									<li id="c1"><?php echo _("Causing more space between molecules"); ?></li>
									<li id="d1"><?php echo _("Causing the gas to have lower density"); ?></li>
									<li id="e1"><?php echo _("As gas temperature increases"); ?></li>
								</ul>
							</div>

						</div>			
					</div>
					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Higher temperatures in gas cause lower density. Put the following sentences in order by dragging them up and down to explain how higher temperatures in gas cause lower density."); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>

							<ul class="answer grid_10 prefix_1 suffix_1"></ul>

							<div class="feedback grid_12"></div>
						</div>				
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying air molecules..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = ''
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('#sortable1').html());

			answer1 = $('#a1').index().toString() + $('#b1').index().toString() + $('#c1').index().toString() + $('#d1').index().toString() + $('#e1').index().toString();
			
			if (answer1 == '13240') {
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That’s right! As gas temperature increases, gas particles move more quickly causing more space between molecules. That way, the same mass takes up more space causing the gas to have lower density."); ?></p>");
			} else {
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! As gas temperature increases, gas particles move more quickly causing more space between molecules. That way, the same mass takes up more space causing the gas to have lower density."); ?></p>");
			} 

			console.log(answer1);

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

			$('#questions').fadeOut(function() { 

				save();

				$('#answers').fadeIn();

				window.location.hash = '#answer';
			}); 

		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "6.php#screen2";
			} else if ($('#answers').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});

		$("#sortable1").sortable({ scroll: false, containment: "#sortable-container1" });
	</script>

	<script src="js/jpreloader.js"></script>
	

	<?php include 'setlocale.php'; ?>
</body>
</html>
