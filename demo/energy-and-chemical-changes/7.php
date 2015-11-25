<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = energy-and-chemical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'energy-and-chemical-changes-qc2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/hexaflip.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/captionHoverEffects.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #F9BCAF; }
		h2 { color: #9CB6E9; font-size: 22px; }
		
		.wrap { border-color: #868ABA; }
		.bg { background-image: url(assets/5/bg.jpg); }

		#buttons .next { display: none; }
		
		#not-sortable img { /*width: 82%;*/ width: 78%; margin: 0; }
		#not-sortable li { margin: 4px auto; }
		
		#sortable { width: 97%; padding: 0; }
		#sortable li { background: #FAFFAB; color: #000; margin: 4px 0;height:59px;  border-radius: 5px; cursor: move; border: dashed #F59681; line-height: 60px; }
		#sortable li:last-child { margin-bottom: 0; }

		#answer #sortable li { height: 44px; } #answer p {margin: 0px 0px;}
		#answer #not-sortable li { text-align: center; }
		#answer #not-sortable { margin-right: 0; }
		#answer #sortable-container { margin-left: 0; }
		#answer #not-sortable img { width: 60%; } 
		
		#answer > p { color: #fff; }

		@media only screen and (max-width: 1250px) {#sortable li {height: auto; line-height: 49px; } #not-sortable img {width: 83px;} 
		#answer #not-sortable img {  width: 66px;} #answer #sortable li {  height: auto;   line-height: 38px;}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
				.container_12 .grid_12 {  width: 97.5%;}
			}	
		}
		figcaption { margin-top: -50%; padding: 5px; background-color: #FFEBB5; height: auto; color: black; position: absolute; height: auto !important; width: auto !important; }
		figcaption span { font-size: 20px; }
		figure { margin: 0 !important; }
		#question .feedbackImg { display: none; }
		.feedbackImg { width: auto; margin-top: -5px; padding: 0 5px; }

			<?php if ($language == 'es_ES') : ?>
				.feedbackImg { margin-top: 11px !important; }
				#question ul#sortable span {
				    font-size: 20.5px !important;
				}
				#answer ul#sortable span {
				    font-size: 19.5px !important;
				}
				@media only screen and (max-width: 1250px){
					.container_12 .grid_12 {
					    line-height: 21px !important;
					}
					h1.grid_12 {
					    margin-top: 20px !important;
					}
				}
				@media only screen and (max-width: 800px){
					div#not-sortable {
					    padding-right: 0 !important;
					    margin-right: 0 !important;
					    width: 90px !important;
					}
					#sortable { width: 100%; }
					.container_12 .grid_10 { width: 83.333%; }
				}
				@media only screen and (max-width: 960px){
					#question ul#sortable span {
					    font-size: 17.5px !important;
					}
					#sortable li {
					    line-height: 48px;
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
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>
						<h2 class="grid_12"><?php echo _("Drag the statements up and down to best describe the kind of energy the picture represents. How do we stay healthy?"); ?></h2>
						<div id="sort">	
							<div class="grid_2 cs-style-1" id="not-sortable">
								<ul>
									<li>
										<figure>
											<img src="assets/7/g.jpg">
											<figcaption>
												<span><?php echo _("Light"); ?></span>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img src="assets/7/f.jpg">
											<figcaption>
												<span><?php echo _("Sound"); ?></span>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img src="assets/7/e.jpg">
											<figcaption>
												<span><?php echo _("Biological"); ?></span>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img src="assets/7/d.jpg">
											<figcaption>
												<span><?php echo _("Chemical"); ?></span>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img src="assets/7/c.jpg">
											<figcaption>
												<span><?php echo _("Kinetic"); ?></span>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img src="assets/7/b.jpg">
											<figcaption>
												<span><?php echo _("Heat"); ?></span>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img src="assets/7/a.jpg">
											<figcaption>
												<span><?php echo _("Electrical"); ?></span>
											</figcaption>
										</figure>
									</li>
								</ul>
							</div>
							
							<div id="sortable-container" class="grid_10">
								<ul id="sortable">
									<li id="1"><span><?php echo _("Energy used by your body to do all the things that make us alive."); ?></span></li>
									<li id="2"><span><?php echo _("Energy that keeps everything warm."); ?></span></li>
									<li id="3"><span><?php echo _("Energy that makes objects visible to us."); ?></span></li>
									<li id="4"><span><?php echo _("Energy that uses vibration of air or other molecules."); ?></span></li>
									<li id="5"><span><?php echo _("Energy of electrons going through wires."); ?></span></li>
									<li id="6"><span><?php echo _("Energy that is usually stored in food."); ?></span></li>
									<li id="7"><span><?php echo _("Energy of motion."); ?></span></li>
								</ul>
							</div>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<h2 class="grid_12"><?php echo _("Drag the statements up and down to best describe the kind of energy the picture represents. How do we stay healthy?"); ?></h2>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Describing kinds of energy..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	
	<script>
	
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('#sort').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString() + $('#5').index().toString() + $('#6').index().toString() + $('#7').index().toString();
			
			if (answer == '2501634') {
				$('.feedbackImg').remove();
				$('#sortable li').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Well done!"); ?></p>");
			}
			else {
				//<p class='red'><img src='assets/wrong.png'><?php echo _("Look again."); ?></p>
				$('.feedback').html("<p></p>");
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
				if($('#1').index().toString() == 2){
					$('#1').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#1').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#2').index().toString() == 5){
					$('#2').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#2').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#3').index().toString() == 0){
					$('#3').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#3').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#4').index().toString() == 1){
					$('#4').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#4').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#5').index().toString() == 6){
					$('#5').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#5').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#6').index().toString() == 3){
					$('#6').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#6').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
				if($('#7').index().toString() == 4){
					$('#7').prepend("<img class='feedbackImg' src='assets/correct.png'>");
				} else {
					$('#7').prepend("<img class='feedbackImg' src='assets/wrong.png'>");
				}
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
