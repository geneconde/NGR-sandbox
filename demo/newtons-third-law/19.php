<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(17, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq4-a');
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
		.bg { background-image: url(assets/19/bg.jpg); }

		#sortable { width: 97%; padding: 10px 0; display: block; }
		#sortable li { background-color: #ffb1dd; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; cursor: move; height: 350px; width: 22.5%; border:2px dashed #114B81; }
		#sortable li:last-child { margin-bottom: 0; }
		#sortable li span { font-size: 24px; color: #272727; }
		#sortable li img { width: 95%; }

		.nl-form {}
		.nl-form a { border-bottom: 0; background-color: #000; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #000; }
		.nl-field li { color: #fff; font-size: 28px; }
		.nl-dd ul li.nl-dd-checked { background-color: #000; color: #fff; }
		.nl-form select { background: #ffff00; border: 0; border-radius: 5px; }

		#letters li { text-align: center; }
		#letters li span { background: #a59fe0; border-radius: 10px; /*border: 2px dashed #662d91;*/ }
		#letters .grid_2 { width: 16.6675%; }
		#letters li span:nth-child(3), #letters li span:nth-child(5) { margin: 0 20px; }

		#answer p {font-size: 24px;}
		#question p {font-size: 24px;}
		#answer .answer { margin: 10px 0; font-size: 24px; margin-left:7px;}
		#answer .answer li { background-color: #ffb1dd; list-style: none; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; height: 270px; }
		#answer .answer li span { font-size: 24px; color: #272727; float: left; }
		#answer li img { width: 95%; }
		#question li{margin-left: 1.5%; margin-right: 0;}
		#buttons .next { display: none; }
	
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #4"); ?></h1>
						<h2 class="grid_12"><?php echo _("Rank these situations based on how quickly the wagon’s motion would change from rest. Arrange the images left to right from the greatest to the least movement."); ?></h2>
						<div id="sortable-container" class="grid_12">
							<ul id="sortable" class="grid_12">
								<li id="1" class="grid_3">
									<img src="assets/19/19a.jpg" alt="Images">
									<span><?php echo _("A) A wagon with one dog is pulled by one boy"); ?></span>
								</li>
								<li id="2" class="grid_3">
									<img src="assets/19/19b.jpg" alt="Images">
									<span><?php echo _("B) A wagon with two dogs is pulled by one boy"); ?></span>
								</li>
								<li id="3" class="grid_3">
									<img src="assets/19/19c.jpg" alt="Images">
									<span><?php echo _("C) A wagon with one dog is pulled by two boys"); ?></span>
								</li>
								<li id="4" class="grid_3">
									<img src="assets/19/19d.jpg" alt="Images">
									<span><?php echo _("D) An empty wagon  is pulled by two boys"); ?></span>
								</li>
							</ul>
							<!-- <div id="letters" class="grid_12">
								<ul class="grid_10 prefix_1 suffix_1">
									<li class="grid_12">
										<span class="grid_1">A</span>
										<form id="nl-form1" class="nl-form grid_2">
											<select name="select" id="select1">
												<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
												<option value="E"><?php echo _("="); ?></option>
												<option value="G"><?php echo _(">"); ?></option>
												<option value="L"><?php echo _("<"); ?></option>
											</select>
											<div class="nl-overlay"></div>
										</form>
										<span class="grid_1">B</span>
										<form id="nl-form2" class="nl-form grid_2">
											<select name="select" id="select2">
												<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
												<option value="E"><?php echo _("="); ?></option>
												<option value="G"><?php echo _(">"); ?></option>
												<option value="L"><?php echo _("<"); ?></option>
											</select>
											<div class="nl-overlay"></div>
										</form>
										<span class="grid_1">C</span>
										<form id="nl-form3" class="nl-form grid_2">
											<select name="select" id="select3">
												<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
												<option value="E"><?php echo _("="); ?></option>
												<option value="G"><?php echo _(">"); ?></option>
												<option value="L"><?php echo _("<"); ?></option>
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

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer grid_12"></div>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Pulling a wagon..."); ?></strong></section></section>

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

			//alert(answer);

			//if (answer == '1302' || answer == '2301' && fanswer == "GEG" ) {
			if (answer == '2310') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it! The combined forces of the two boys will cause a large change in motion for one dog. The boy trying to accelerate two dogs on his own will have the least change in motion."); ?></p>");
				//'
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. The combined forces of two boys pulling will be greater than the force of one boy pulling on his own, but the mass of two dogs in the wagon will resist the change in motion greater than the mass of one dog in the wagon, and an empty wagon will provide the least resistance to a change in motion."); ?></p>");
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
				document.location.href = "18.php";
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
