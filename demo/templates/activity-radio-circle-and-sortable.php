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

	<title><?php echo _("Module"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<!-- When using the grid and the animated checkbox activity, use this condition for rtl support -->
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #000; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/#/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #777; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { background: #777; height: 20px; width: 20px; margin-top: -11px; }
		.ac-custom svg path { stroke: #777; }
		.ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] .ac-custom label::after { background: #777; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] .ac-custom svg { right: 3px; left: 98% /* for Safari */ }

		#sortable { width: 100%; padding: 10px 0; }
		#sortable li { background: #000; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; cursor: move; }
		#sortable li:last-child { margin-bottom: 0; }

		#answer2 .answer { margin: 10px 0; }
		#answer2 .answer li { background: #000; list-style: none; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; }

		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. The European languages are members of the same family."); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("Option1"); ?></span></label></li>
										<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("Option2"); ?></span></label></li>
										<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("Option3"); ?></span></label></li>
										<li><input id="d" name="q" type="radio"><label for="d"><span><?php echo _("Option4"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. The European languages are members of the same family."); ?></h2>

							<div id="sortable-container" class="grid_4 prefix_4 suffix_4">
								<ul id="sortable">
									<li id="1"><?php echo _("Option1"); ?></li>
									<li id="2"><?php echo _("Option2"); ?></li>
									<li id="3"><?php echo _("Option3"); ?></li>
								</ul>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. The European languages are members of the same family."); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="grid_12 answer"></p>

							<div class="grid_12 feedback"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question A. The European languages are members of the same family."); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>

							<div class="grid_4 prefix_4 suffix_4 answer"></div>

							<div class="grid_12 feedback"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		$('#question1').find('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

			if (id == 'a') {
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct"); ?></p>");

				answer1 = 'A';
			}

			if (id == 'b') {
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
				
				answer1 = 'B';
			}

			if (id == 'c') {
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

				answer1 = 'C';
			}

			if (id == 'd') {
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

				answer1 = 'D';
			}
		});

		function save() {
			if ($('#1').index() == 2 && 
				$('#2').index() == 1 &&
				$('#3').index() == 0) {
					$('#answer2').find('.answer').html("<li><?php echo _("Option3"); ?></li><li><?php echo _("Option2"); ?></li><li><?php echo _("Option1"); ?></li>");
					$('#answer2').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Feedback"); ?></p>");

					answer2 = '210';
			} 
			
			if ($('#1').index() == 0 && 
				$('#2').index() == 2 &&
				$('#3').index() == 1) {
					$('#answer2').find('.answer').html("<li><?php echo _("Option1"); ?></li><li><?php echo _("Option3"); ?></li><li><?php echo _("Option2"); ?></li>");
					$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

					answer2 = '021';
			}
			
			if ($('#1').index() == 2 && 
				$('#2').index() == 0 &&
				$('#3').index() == 1) {
					$('#answer2').find('.answer').html("<li><?php echo _("Option2"); ?></li><li><?php echo _("Option3"); ?></li><li><?php echo _("Option1"); ?></li>");
					$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

					answer2 = '201';
			}
			
			if ($('#1').index() == 1 && 
				$('#2').index() == 0 &&
				$('#3').index() == 2) {
					$('#answer2').find('.answer').html("<li><?php echo _("Option2"); ?></li><li><?php echo _("Option1"); ?></li><li><?php echo _("Option3"); ?></li>");
					$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

					answer2 = '102';
			} 
			
			if ($('#1').index() == 0 && 
				$('#2').index() == 1 &&
				$('#3').index() == 2) {
					$('#answer2').find('.answer').html("<li><?php echo _("Option1"); ?></li><li><?php echo _("Option2"); ?></li><li><?php echo _("Option3"); ?></li>");
					$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

					answer2 = '012';
			} 

			if (answered == 0) {
				saveAnswer('module-qc1-a', answer1);
				saveAnswer('module-qc1-b', answer2);

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('.checkanswer').fadeOut(function() { $('.next').fadeIn(); });

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();
					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "#";
			} else if ($('#answers').is(':visible')) {
				$('.next').fadeOut(function() { $('.checkanswer').fadeIn(); });

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();
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
