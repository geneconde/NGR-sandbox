<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(15, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq2-a');
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
		<link rel="stylesheet" href="css/nlform_rtl.css">
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/nlform.css">
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #8200d4; }
		h2 { color: #008fff; font-size: 24px;}
		
		.wrap { border-color: #00C2FF; }
		.bg { background-image: url(assets/17/bg.jpg); }

		.nl-form { display: table-cell; vertical-align: middle; }
		.nl-form select { display: block; margin: 0 auto; }
		.nl-form a { border-bottom: 0; background-color: #000; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #000; }
		.nl-field li { color: #fff; font-size: 28px; }
		.nl-dd ul li.nl-dd-checked { background-color: #000; color: #fff; }

		#question p {font-size: 24px;}
		#question ul li { height: 160px; display: table; background: #c9c3ff; border-radius: 10px; margin-bottom: 5px; }
		#question ul li img { width: 90%; display: block; margin-top: 17px; }
		#question ul li span { display: table-cell; vertical-align: middle; padding: 10px;font-size: 24px;}
		
		#answer b { color: #b14943; font-size: 30px; }
		#answer p {font-size: 24px;}
		#buttons .next { display: none; }
		@media screen and (max-width: 1250px){
			#question ul li span{ font-size: 20px;}
			#question ul li{height: 130px;}
			#question ul li img { width: 73%;}
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#question ul li { height: 150px; }
		}
		#question ul li img {
		    width: 75% !important;
		    height: 80% !important;
		}
		<?php if ($language == 'es_ES') { ?>
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
				.grid_6 ul.grid_6 { margin-left: 0px; }
				.grid_2 { margin-left: -15px; margin-right: 30px; }
				.grid_4 { width: 31% !important; }
			}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #2"); ?></h1>
						<h2><?php echo _("Compare the two forces mentioned for the following situations. Use >, = or < signs to show how the forces compare to each other."); ?></h2>

						<div class="grid_6 bgs">
							<ul class="grid_6" >
								<li class="grid_12" >
									<img src="assets/17/17a.jpg" alt="Images">
									
								</li>
								<li class="grid_12">
									<img src="assets/17/17b.jpg" alt="Images">
									
								</li>
								<li class="grid_12">
									<img src="assets/17/17c.jpg" alt="Images">
									
								</li>
							</ul>
							<ul class="grid_6" id = "ul_li">
								<li class="grid_12">
									<span><?php echo _("The force the hammer puts on the nail."); ?></span>
								</li>
								<li class="grid_12">
									<span><?php echo _("The force of the hand on the valleyball."); ?></span>
								</li>
								<li class="grid_12">
									<span><?php echo _("The force of the feet on the diving board."); ?></span>
								</li>
							</ul>
						</div>
						<div class="grid_2" id = "ul_li">
							<ul class="grid_12 bgs">
								<li class="grid_12">
									<form id="nl-form1" class="nl-form">
										<select name="select[]" id="select1">
											<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
											<option value="="><?php echo _("="); ?></option>
											<option value="<"><?php echo _("<"); ?></option>
											<option value=">"><?php echo _(">"); ?></option>
										</select>
										<div class="nl-overlay"></div>
									</form>
								</li>
								<li class="grid_12">
									<form id="nl-form2" class="nl-form">
										<select name="select[]" id="select2">
											<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
											<option value="="><?php echo _("="); ?></option>
											<option value="<"><?php echo _("<"); ?></option>
											<option value=">"><?php echo _(">"); ?></option>
										</select>
										<div class="nl-overlay"></div>
									</form>
								</li>
								<li class="grid_12">
									<form id="nl-form3" class="nl-form">
										<select name="select[]" id="select3">
											<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
											<option value="="><?php echo _("="); ?></option>
											<option value="<"><?php echo _("<"); ?></option>
											<option value=">"><?php echo _(">"); ?></option>
										</select>
										<div class="nl-overlay"></div>
									</form>
								</li>
							</ul>
						</div>
						<div class="grid_4">
							<ul class="grid_12 bgs">
								<li class="grid_12">
									<span><?php echo _("The force the nail puts on the hammer."); ?></span>
								</li>
								<li class="grid_12">
									<span><?php echo _("The force the volleyball puts on the hand."); ?></span>
								</li>
								<li class="grid_12">
									<span><?php echo _("The force of the diving board on the feet."); ?></span>
								</li>
							</ul>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<ul class="grid_12">
							<li class="grid_12">
								<p><?php echo _("The force the hammer puts on the nail."); ?> <b class="answer1"></b> <?php echo _("The force the nail puts on the hammer."); ?></p>
							</li>
							<li class="grid_12">
								<p><?php echo _("The force of the hand on the valleyball."); ?> <b class="answer2"></b> <?php echo _("The force the volleyball puts on the hand."); ?></p>
							</li>
							<li class="grid_12">
								<p><?php echo _("The force of the feet on the diving board."); ?> <b class="answer3"></b> <?php echo _("The force of the diving board on the feet."); ?></p>
							</li>
						</ul>
						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="18.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Comparing forces..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/nlform.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {

			var results = [];
			    $("select[name='select[]']").each(function(){
			        var val = $(this).val();
			        if(val !== '') results.push(val);  
			    });
			
			if (results == '=,=,=') {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You've got it. Forces are always paired, so in all of the interactions shown, both objects experience the same amount of force."); ?></p>"); //'
			} else {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. Any time two objects interact, the forces that they exert on each other will be equal in size."); ?></p>");
			}



			$('.answer1').html($('#select1 option:selected').text());
			$('.answer2').html($('#select2 option:selected').text());
			$('.answer3').html($('#select3 option:selected').text());

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
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

				$('#question').fadeOut(function() { 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "16.php";
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

		var nlform = new NLForm(document.getElementById('nl-form'));
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
