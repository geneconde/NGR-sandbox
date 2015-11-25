<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'ous-solar-system-qc5-a');
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
		.bg { background-image: url(assets/13/bg.jpg); overflow: hidden;}

		#sortable { width: 100%; padding: 10px 0; }
		#sortable li, .table:first-child li { text-align: center; color: #272727; margin-bottom: 4px; border-radius: 5px; cursor: move; }
		#sortable li:last-child, .table:first-child li:last-child { margin-bottom: 0; }

		#answer .answer { margin: 10px 0; }
		#answer .answer li { background: #afebff; list-style: none; text-align: center; color: #272727; margin-bottom: 4px; border-radius: 5px; }
		.answer li img { width: auto; left: -30px; position: relative; }
		.answer_image {
			width: 30%;
			height: 192px;
			margin-bottom: -250px;
			margin-left: 150px;
		}
		#answer #not-sortable {display: none;}
		#answer #sortable-container span {display: none;}
		#answer #sortable-container .bounds {width: 250px;}
		#answer .table {background: none;}

		#question .feedbackImg { display: none; }
		
		#buttons .next { display: none; }

		.table { background: #9ebde9; text-align: center; }
		.table ul li { background: #afebff; }
		.table:first-child ul { padding: 10px 0; }
		span.q1-labels { position: absolute; font-size: 20px; }
		span.q1-labels:nth-child(2) { top: 100px; left: -7px; transform: rotate(-69deg); }
		span.q1-labels:nth-child(3) { top: 48px; left: 19px; transform: rotate(-43deg); }
		span.q1-labels:nth-child(4) {
		    top: 9px;
		    left: 73px;
		    transform: rotate(-31deg);
		}
		span.q1-labels:nth-child(5) { top: 20px; right: 10px; font-size: 25px; }
		span.q1-labels:nth-child(6) { top: 100px; right: 50px; font-size: 26px; }
		span.q1-labels:nth-child(7) {
		    bottom: 23px;
		    right: 185px;
		    transform: rotate(-35deg);
		}
		span.q1-labels:nth-child(8) {
		    bottom: 65px;
		    right: 135px;
		    transform: rotate(-55deg);
		}
		span.q1-labels:nth-child(9) {
		    bottom: 120px;
		    right: 107px;
		    transform: rotate(-73deg);
		}
		span.q1-labels:nth-child(10) { bottom: 135px; left: 165px; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			span.q1-labels:nth-child(10) { bottom: 160px; left: 187px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			.grid_7 span { font-size: 16px !important; }
			span.q1-labels:nth-child(10) { bottom: 118px; left: 137px; }
			span.q1-labels:nth-child(6) { top: 205px; right: 44px; }
			span.q1-labels:nth-child(4) { top: 16px; left: 65px; transform: rotate(-26deg); }
			span.q1-labels:nth-child(7) { bottom: 26px; right: 167px; transform: rotate(-35deg); }
			span.q1-labels:nth-child(8) { bottom: 58px; right: 122px; transform: rotate(-54deg); }
			span.q1-labels:nth-child(9) { bottom: 106px; right: 93px; transform: rotate(-61deg); }
		}

		<?php if ($language == 'es_ES') : ?>
			span.q1-labels:nth-child(2) {
			    top: 121px;
			    left: -15px;
			    transform: rotate(-78deg);
			    font-size: 17px !important;
			}
			span.q1-labels:nth-child(3) {
			    top: 55px;
			    left: 13px;
			    transform: rotate(-52deg);
			    font-size: 16px !important;
			}
			span.q1-labels:nth-child(4) {
			    top: 12px;
			    left: 73px;
			    transform: rotate(-27deg);
			    font-size: 15px !important;
			}
			span.q1-labels:nth-child(3) {
			    top: 56px;
			    left: 11px;
			    transform: rotate(-49deg);
			    font-size: 16px !important;
			}
			span.q1-labels:nth-child(7) {
			    bottom: 18px;
			    right: 181px;
			    transform: rotate(-31deg);
			    font-size: 18px !important;
			}
			span.q1-labels:nth-child(8) {
			    bottom: 69px;
			    right: 119px;
			    transform: rotate(-54deg);
			    font-size: 17px !important;
			}
			span.q1-labels:nth-child(9) {
			    bottom: 155px;
			    right: 79px;
			    transform: rotate(-83deg);
			    font-size: 18px;
			}
		<?php endif; ?>
		<?php if ($language == 'es_ES') : ?>
			p.grid_12 {
			    margin: 0;
			}
		<?php endif; ?>

		<?php if ($language == 'es_ES') : ?>
			@media only screen and (max-width: 960px){
				span.q1-labels:nth-child(2) {
				    top: 91px;
				    left: -17px;
				    transform: rotate(-88deg);
				    font-size: 15px !important;
				}
				span.q1-labels:nth-child(3) {
				    top: 34px;
				    left: 10px;
				    transform: rotate(-49deg);
				    font-size: 15px !important;
				}
				span.q1-labels:nth-child(4) {
				    top: 1px;
				    left: 75px;
				    transform: rotate(-2deg);
				    font-size: 15px !important;
				}
				span.q1-labels:nth-child(7) {
				    bottom: 18px;
				    right: 157px;
				    transform: rotate(-2deg);
				    font-size: 15px !important;
				}
				span.q1-labels:nth-child(8) {
				    bottom: 53px;
				    right: 99px;
				    transform: rotate(-54deg);
				    font-size: 15px !important;
				}
				span.q1-labels:nth-child(9) {
				    bottom: 134px;
				    right: 70px;
				    transform: rotate(-90deg);
				    font-size: 15px;
				}
			}
		<?php endif; ?>
	<?php if ($language == 'en_US') : ?>
	@media only screen and (max-width: 960px){
		span.q1-labels:nth-child(2) {
		    top: 87px;
		    left: -17px;
		    transform: rotate(-90deg);
		}
		span.q1-labels:nth-child(3) {
		    top: 30px;
		    left: 0px;
		    transform: rotate(-43deg);
		}
		span.q1-labels:nth-child(4) {
		    top: 1px;
		    left: 62px;
		    transform: rotate(-2deg);
		}
		span.q1-labels:nth-child(7) {
		    bottom: 10px;
		    right: 180px;
		    transform: rotate(-3deg);
		}
		span.q1-labels:nth-child(8) {
		    bottom: 38px;
		    right: 119px;
		    transform: rotate(-45deg);
		}
		span.q1-labels:nth-child(9) {
		    bottom: 97px;
		    right: 92px;
		    transform: rotate(-90deg);
		}
	}
	<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #5"); ?></h1>
						<h2 class="grid_12"><?php echo _("Look at the image below and match the labels to the correct phase in the table below by dragging the letters on the right column up or down."); ?></h2>
						<div class="grid_7">
							<img src="assets/13/q1.png" />
							<span class="q1-labels"><p><?php echo _("Waxing"); ?></p></span>
							<span class="q1-labels"><p><?php echo _("(getting"); ?></p></span>
							<span class="q1-labels"><p><?php echo _(" bigger)");?></p></span>
							<span class="q1-labels"><p><?php echo _("Phases of the Moon"); ?></p></span>
							<span class="q1-labels"><p><?php echo _("Sun"); ?></p></span>
							<span class="q1-labels"><p><?php echo _("Waning"); ?></p></span>
							<span class="q1-labels"><p><?php echo _("(getting"); ?></p></span>
							<span class="q1-labels"><p><?php echo _("smaller)"); ?></p></span>
							<span class="q1-labels"><p><?php echo _("Earth"); ?></p></span>
						</div>
						<div id="sort" class="grid_5">
							<div id="not-sortable" class="grid_6 table">
								<span><?php echo _("Moon Phase"); ?></span>
								<ul>
									<li><?php echo _("Full Moon"); ?></li>
									<li><?php echo _("1st Quarter"); ?></li>
									<li><?php echo _("3rd Quarter"); ?></li>
									<li><?php echo _("New Moon"); ?></li>
								</ul>
							</div>
							<div class="grid_6 table">
								<div id="sortable-container">
									<span><?php echo _("Label"); ?></span>
									<div class="bounds">
										<ul id="sortable">
											<li id="1"><?php echo _("A"); ?></li>
											<li id="2"><?php echo _("B"); ?></li>
											<li id="3"><?php echo _("C"); ?></li>
											<li id="4"><?php echo _("D"); ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #5"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2 class="grid_12"><?php echo _("Look at the image below and match the labels to the correct phase in the table below by dragging the letters on the right column up or down."); ?></h2>
						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<img src='assets/13/q1.png' class='answer_image' />

						<div class="answer grid_4 prefix_6 suffix_2">					
							<!-- <ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul> -->
						</div>

						<div class="feedback grid_12">
							
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

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
			
			if (answer == '3102') {
				$('.feedbackImg').remove();
				$('#sortable li').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! You've correctly matched each Moon phase with its relative position in the Earth/Moon/Sun system."); ?></p>");
			}
			else {
				//<p class='red'><img src='assets/wrong.png'><?php echo _("Look again."); ?></p>
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("All phases of the Moon need to be matched to its correct relative position in the Earth/Moon/Sun system. The correct order is C, B, D and A."); ?></p>");
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

				$('.feedbackImg').remove();
				if($('#1').index().toString() == 3){
					$('#1').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#1').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#2').index().toString() == 1){
					$('#2').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#2').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#3').index().toString() == 0){
					$('#3').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#3').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#4').index().toString() == 2){
					$('#4').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#4').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}

				save();

				$('#answer').fadeIn();

				window.location.hash = '#answer';
			}); 
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "12.php";
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

