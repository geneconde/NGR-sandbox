<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'air-around-us-qq5-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Inherited Traits"); ?></title>

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
		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #f36d90; }
		h2 { color: #926948; }
		
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/19/bg.jpg); }

		.ac-custom li {padding: .5em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #00A7D4; }
		.ac-custom label { color: #000; padding-left: 49px; line-height: 26px; }
		.ac-custom svg path { stroke: #00A7D4; }

		#question .ac-custom label::before { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		#question .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question .ac-custom label::after { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		.answer { text-align: center; }

		table { margin: 20px auto; }

		table td { 
			border: 4px solid #9fd9f1; 
			border-radius: 2px; 
			width: 6%; 
			text-align: center; 
			background: #f4ddba;
			padding: 5px 0;
		}

		table th { font-weight: normal;  }
		table th:nth-child(2), table th:nth-child(3), table th:nth-child(4), tr td {
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			border: 4px solid #9fd9f1;;

		}

		table th:nth-child(2), table th:nth-child(3){
			 background: #f4ddba;
			 padding: 5px 0;
		}

		table {
		    border-collapse: separate;
		    border-spacing: 5px;
		}
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
		}
		@media screen and (max-width: 1250px){ .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1 class="grid_12"><?php echo _("Quiz Question #4"); ?></h1>
						<p class="grid_12"><?php echo _("Use the Punnett square below to answer the question. This mating is between mice. Brown is dominant. White is recessive."); ?></p>
						<h2 class="grid_12"><?php echo _("Which offspring display the brown phenotype?"); ?></h2>

						<table>

								<tr>

									<th></th>
									<th><?php echo _("B"); ?></th>
									<th><?php echo _("b"); ?></th>

								</tr>

								<tr>

									<td><?php echo _("B"); ?></td>
									<td><?php echo _("BB"); ?></td>
									<td><?php echo _("Bb"); ?></td>
									
								</tr>

								<tr>

									<td><?php echo _("b"); ?></td>
									<td><?php echo _("Bb"); ?></td>
									<td><?php echo _("bb"); ?></td>
								
								</tr>			
								
							</table>
		
						<div class="grid_12">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" name="q1" type="radio" value="A"><label for="a"><span><?php echo _("BB and bb"); ?></span></label></li>
									
									<li><input id="b" name="q1" type="radio" value="B"><label for="b"><span><?php echo _("BB and Bb"); ?></span></label></li>
									
									<li><input id="c" name="q1" type="radio" value="C"><label for="c"><span><?php echo _("Bb and bb"); ?></span></label></li>
									
									<li><input id="d" name="q1" type="radio" value="D"><label for="d"><span><?php echo _("BB only"); ?></span></label></li>
								<ol>
							</form>
						</div>
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>

						<div class="answer"></div>
						<div class="feedback"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at Punnett square..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('#answer .answer').html($('#question input:radio:checked').parent().find('span').text());
			answer = $('#question input:radio:checked').val();

			if (answer == 'A') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. bb is white"); ?></p>");
			
			} else if (answer == 'B'){
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! Both Bb and BB are white."); ?></p>");

			} else if(answer == 'C'){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. bb is white."); ?></p>");

			} else {
			
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. BB is brown, but so is Bb."); ?></p>");
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('inherited-traits-qq4-a', answer); // Correct answer: B
				answered = 1;
			}
		}

		function clear() {
			$('.answer').html('');
			$('.feedback').html('');

			answer = '';
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
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
				document.location.href = "18.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answer').fadeOut(function() {

					clear();

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