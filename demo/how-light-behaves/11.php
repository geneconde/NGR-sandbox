<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
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
		<link rel="stylesheet" href="css/nlform_rtl.css">
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/nlform.css">
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #31C1B7; }
		h2 { color: #EB6966; }
		
		.wrap { border-color: #9EF5FF; }
		.bg { background-image: url(assets/11/bg.jpg); }

		.nl-field { width: 100%; }
		#nl-form1 a, #nl-form2 a, #nl-form3 a { 
			border-bottom: 0; background-color: #31C1B7; color: #FFEF9F; 
			text-align: center; border-radius: 5px; width: 80%; margin: 0 10%;
		}
		.answer1, .answer2, .answer3 { background-color: #31C1B7; color: #FFEF9F; text-align: center; }
		.nl-field ul { background-color: #8AD55E; }
		.nl-field li { color: #fff; font-size: 28px; }
		.nl-dd ul li.nl-dd-checked { background-color: #31C1B7; color: #495455; }

		#buttons .next { display: none; }
		
		#question p { text-align: center; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>
						<h2 class="grid_12"><?php echo _("How would you describe the things below in how well they transmit light?"); ?></h2>

						<div class="grid_4"><img src="assets/11/a.jpg" /><p><?php echo _("Clean lake"); ?></p></div>
						<div class="grid_4"><img src="assets/11/b.jpg" /><p><?php echo _("Foggy morning"); ?></p></div>
						<div class="grid_4"><img src="assets/11/c.jpg" /><p><?php echo _("Wooden door"); ?></p></div>

						<div class="grid_4">
							<form id="nl-form1" class="nl-form">
								<select name="select">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="A"><?php echo _("transparent"); ?></option>
									<option value="B"><?php echo _("translucent"); ?></option>
									<option value="C"><?php echo _("opaque"); ?></option>

								</select>
																	
								<div class="nl-overlay"></div>
							</form>
						</div>
						
						<div class="grid_4">
							<form id="nl-form2" class="nl-form">
								<select name="select">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="A"><?php echo _("transparent"); ?></option>
									<option value="B"><?php echo _("translucent"); ?></option>
									<option value="C"><?php echo _("opaque"); ?></option>
								</select>

								<div class="nl-overlay"></div>
							</form>
						</div>
						
						<div class="grid_4">
							<form id="nl-form3" class="nl-form">
								<select name="select">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="A"><?php echo _("transparent"); ?></option>
									<option value="B"><?php echo _("translucent"); ?></option>
									<option value="C"><?php echo _("opaque"); ?></option>
								</select>

								<div class="nl-overlay"></div>
							</form>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2 class="grid_12"><?php echo _("How would you describe the things below in how well they transmit light?"); ?></h2>
						
					
						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						
						<div class="grid_4"><img src="assets/11/a.jpg" /><p><?php echo _("Clean lake"); ?></p></div>
						<div class="grid_4"><img src="assets/11/b.jpg" /><p><?php echo _("Foggy morning"); ?></p></div>
						<div class="grid_4"><img src="assets/11/c.jpg" /><p><?php echo _("Wooden door"); ?></p></div>

						<p class="answer1 grid_4"></p>
						<p class="answer2 grid_4"></p>
						<p class="answer3 grid_4"></p>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Different transmission..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/nlform.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer1 = '',answer2 = '',answer3 = '';

		function save() {

			answer1 = $('#nl-form1').find('select').val();
			answer2 = $('#nl-form2').find('select').val();
			answer3 = $('#nl-form3').find('select').val();
						
			if (answer1 == 'A' && answer2 == 'B' && answer3 == 'C') {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Way to go! Water in a clean lake is transparent, allowing all light to pass through it; a morning fog is translucent, allowing only some light through; you can't see anything through a wooden door because it is opaque, the door doesn't allow any light to pass through it."); ?></p>");
			} else $('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. Water in a clean lake is transparent, allowing all light to pass through it; a morning fog is translucent, allowing only some light through; you can't see anything through a wooden door because it is opaque, the door doesn't allow any light to pass through it."); ?></p>");

			$('.answer1').html($('#nl-form1').find('select option:selected').text());
			$('.answer2').html($('#nl-form2').find('select option:selected').text());
			$('.answer3').html($('#nl-form3').find('select option:selected').text());

			console.log(answer1+" "+answer2 +" "+answer3);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer1); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			if ($('select').val() == "") {
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
				document.location.href = "10.php";
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

		var nlform1 = new NLForm(document.getElementById('nl-form1'));
		var nlform2 = new NLForm(document.getElementById('nl-form2'));
		var nlform3 = new NLForm(document.getElementById('nl-form3'));
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
