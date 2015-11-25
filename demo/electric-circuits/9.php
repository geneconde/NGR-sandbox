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

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- When using the grid and animated checkbox, use this condition for rtl support -->
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1{ color: #D27A00;}
		h1, h2 { margin-left: 10px; margin-top: 5px; }
		
		.wrap { border-color: #FF00FF; } /* Change border-color */
		.bg { background-image: url(assets/11/QC.jpg); overflow: hidden;}

		.ac-custom input[type="radio"]:checked + label { color: #EE1F9C; } /* Change color */
		.ac-custom label { color: #000; padding-left: 49px; } /* Change color */
		.ac-custom label::before { border: 2px solid #AF5C51; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		.ac-custom svg path { stroke: #EE1F9C; } /* Change stroke-color */
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #AF5C51; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; /* for Safari */ }

		#buttons .next { display: none; }

		@media screen and (max-width: 1250px) { .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?></h1>
						<h2><?php echo _("In the diagram below, what is the reason the bulbs aren’t lighting up?"); ?></h2>
						
						<div class="grid_6 prefix_3">
							<img src="assets/9/9a.png">
						</div>

						<div class="grid_12">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("It is a series circuit."); ?></span></label></li>
									<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("It is a parallel circuit."); ?></span></label></li>
									<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("It is a closed circuit."); ?></span></label></li>
									<li><input id="d" name="q" type="radio"><label for="d"><span><?php echo _("It is an open circuit."); ?></span></label></li>
								<ol>
							</form>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						
						<h2><?php echo _("In the diagram below, what is the reason the bulbs aren’t lighting up?"); ?></h2>
						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<p class="grid_12 answer"></p>

						<div class="grid_12 feedback"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Connecting wires..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

			if (id == 'a') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. It does look like it will be a series circuit, but right now the wires and bulbs don’t form a closed path between the terminals on the battery."); ?></p>");

				answer = 'A';
			}

			if (id == 'b') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. A parallel circuit would have multiple paths between the terminals of the battery."); ?></p>");

				answer = 'B';
			}

			if (id == 'c') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. There isn’t a completed path between the terminals of the battery, so this is not a closed circuit."); ?></p>");

				answer = 'C';
			}

			if (id == 'd') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yep! Right now, the wire is disconnected from the bulb, so current cannot flow in this circuit."); ?></p>");

				answer = 'D';
			}
		});

		function save() {
			if (answered == 0) {
				saveAnswer('module-qq#-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('.checkanswer').fadeOut(function() { $('.next').fadeIn(); });

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
				$('.next').fadeOut(function() { $('.checkanswer').fadeIn(); });

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
