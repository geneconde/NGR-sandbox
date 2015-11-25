<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qc3-a');
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
		.bg { background-image: url(assets/9/bg.jpg); }

		#sortable { width: 97%; padding: 10px 0; display: block; }
		#sortable li { background-color: #ffda2f; width: 22.5%; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; cursor: move; height: 335px; border:2px dashed #114B81; }
		#sortable li:last-child { margin-bottom: 0; }
		#sortable li span { font-size: 20px; color: #272727; }
		#sortable li img { width: 90%; }
		

		.nl-form {}
		.nl-form a { border-bottom: 0; background-color: #000; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #000; }
		.nl-field li { color: #fff; font-size: 28px; }
		.nl-dd ul li.nl-dd-checked { background-color: #000; color: #fff; }
		.nl-form select { background: #bd8cbf; border: 0; border-radius: 5px; }

		#letters li { text-align: center; }
		#letters li span { background: #10B2B3; border-radius: 10px; /*border: 2px dashed #007236;*/ }
		#letters .grid_2 { width: 16.6675%; }
		#letters li span:nth-child(3), #letters li span:nth-child(5) { margin: 0 20px; }
		/*#letters li select { text-indent: 40px; }*/
		#question li{margin-left: 1.5%; margin-right: 0;}
		#answer .answer { margin: 10px 0; }
		<?php if($language == 'es_ES'){ ?>
			#answer p { margin: 0 1%; line-height: 1.2; font-size: 22px;}
			#answer h2{line-height: 1.2; font-size: 22px;}
		<?php }else{ ?>
			#answer p { margin: 0 1%; line-height: 1.3;font-size: 23px;}
			#answer h2{line-height: 1.3;font-size: 23px;}
		<?php } ?>
	
		#answer .answer li { background-color: #ffda2f; list-style: none; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; height: 240px; }
		#answer .answer li span { font-size: 20px; color: #272727; float: left; padding: 0 10px; }
		#answer li{ margin-left: 2%; margin-right: 0;}
		#answer li img { width: 50%; }

		#buttons .next { display: none; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#question li { height: 335px !important; }
		}
		@media screen and (max-width: 1250px){
			#answer .auto { width: 40%; height: auto; }
			#question li{height: 305px;}
			#answer li {height: 220px;}
			#answer li span {font-size: 17px;}
			<?php if($language == 'es_ES'){?>
				#answer p , #answer .answer li span{ margin: 3px 0 ; font-size: 19px; line-height: 1.2;}
				#answer h2{ margin-top: 3px;margin-bottom: 3px; font-size: 19px; line-height: 1.2;}
				#answer h1{font-size: 26px;}
			<?php }else{ ?>
				#answer p , #answer .answer li span{ margin: 3px 0 ; font-size: 19px; line-height: 1.3;}
				#answer h2{ margin-top: 3px;margin-bottom: 3px; font-size: 19px; line-height: 1.3;}

			<?php } ?>
		}
		@media screen and (max-width: 720px){
			<?php if($language == 'zh_CN'){?>
				#answer .answer li span {font-size: 17px;}
			<?php }else{ ?>
				#answer .answer li span {font-size: 20px;}
			<?php } ?>
		}
	
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?></h1>
						<h2 class="grid_12"><?php echo _("A person jumping into the water from a boat notices that the boat moves in the opposite direction when she jumps from the front of it.  Rank the following situations based on the size of the acceleration, or change in motion, that the boat would experience.  Arrange the images left to right from the greatest to the least movement."); ?></h2>
						<div id="sortable-container" class="grid_12">
							<ul id="sortable" class="grid_12">
								<li id="1" class="grid_3">
									<img src="assets/9/9a.jpg" alt="Images">
									<span><?php echo _("A) One boater jumps off the front, while the other boater remains seated."); ?></span>
								</li>
								<li id="2" class="grid_3">
									<img src="assets/9/9b.jpg" alt="Images">
									<span><?php echo _("B) Both boaters jump off the front of the boat."); ?></span>
								</li>
								<li id="3" class="grid_3">
									<img src="assets/9/9c.jpg" alt="Images">
									<span><?php echo _("C) One boater jumps off of an empty boat."); ?></span>
								</li>
								<li id="4" class="grid_3">
									<img src="assets/9/9d.jpg" alt="Images">
									<span><?php echo _("D) One boater jumps off the front, while the other boater jumps off the back at the same time."); ?></span>
								</li>
							</ul>
<!-- 							<div id="letters" class="grid_12">
								<ul class="grid_10 prefix_1 suffix_1">
									<li class="grid_12"><span class="grid_1">A</span>
										<form id="nl-form1" class="nl-form grid_2">
											<select name="select" id="select1">
												<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
												<option value="E"><?php echo _("="); ?></option>
												<option value="G"><?php echo _(">"); ?></option>
											</select>
											<div class="nl-overlay"></div>
										</form>
										<span class="grid_1">B</span>
										<form id="nl-form2" class="nl-form grid_2">
											<select name="select" id="select2">
												<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
												<option value="E"><?php echo _("="); ?></option>
												<option value="G"><?php echo _(">"); ?></option>
											</select>
											<div class="nl-overlay"></div>
										</form>
										<span class="grid_1">C</span>
										<form id="nl-form3" class="nl-form grid_2">
											<select name="select" id="select3">
												<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
												<option value="E"><?php echo _("="); ?></option>
												<option value="G"><?php echo _(">"); ?></option>
											</select>
											<div class="nl-overlay"></div>
										</form>
										<span class="grid_1">D</span>
									</li>
								</ul>
							</div> -->
						</div>	
					</div>
				</div>
				<div class="grid_12">
					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2 class="grid_12"><?php echo _("A person jumping into the water from a boat notices that the boat moves in the opposite direction when she jumps from the front of it.  Rank the following situations based on the size of the acceleration, or change in motion, that the boat would experience.  Arrange the images left to right from the greatest to the least movement."); ?></h2>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer grid_12"></div>

						<div class="feedback grid_12"></div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the water..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';	

		function save() {

		// var	ans1 = $('#select1 option:selected').val();
		// var	ans2 = $('#select2 option:selected').val();
		// var	ans3 = $('#select3 option:selected').val();

			$('.answer').html($('#sortable').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString();

			//var fanswer = ans1+ans2+ans3;

			// alert(answer + fanswer);
			//if (answer == '2013' && fanswer == "EGG" || answer == '2103' && fanswer == 'EGG' ) {
			if (answer == '2013') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it!  With both boaters jumping in the same direction, the greatest amount of force will be combining to act on the boat.  When the boaters jump in opposite directions, their forces cancel, resulting in no change in motion for the boat."); ?></p>");
				//'
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  When the two boaters jump in the same direction, their forces will combine to result in a large change in motion for the empty boat.  With only one person jumping off the boat, the change in motion would be less, and in the situation where the boaters jump in opposite directions, their forces would cancel and the boat wouldn’t move."); ?></p>");
			} 

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			if ($('#select1 option:selected').val() == "" || $('#select2 option:selected').val() == "" || $('#select3 option:selected').val() == "") {
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
				document.location.href = "8.php#screen2";
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
