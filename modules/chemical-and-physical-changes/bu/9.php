<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'human-impact';
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

	<title><?php echo _("Human Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #00A7D4; }
		h2 { color: #F84D82; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/9/bg.jpg); }

		.bg li { padding: 12px 0; list-style: none; }

		.ac-custom input[type="radio"]:checked + label { color: #F34345; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #F34345; height: 34px; width: 34px; margin-top: -6px; margin-left: 5px; }
		.ac-custom svg path { stroke: #F34345; }
		.ac-custom svg { height: 20px; width: 20px; left: 16px; margin-top: -11px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #F34345; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		li img { width: auto; margin: 0; vertical-align: auto; padding-right: 10px; }

		html[dir=rtl] .answer .items img { padding-left: 10px; }

		#buttons .next { display: none; }
		
		.bg li { line-height: 25px; font-size: 21px; padding: 13px 3px; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; }
		#question table { margin-left: 28px; }
		#answer table { margin-left: 15px; }
		table td li { background: #FFE8AB; }
		table td { border: solid transparent 2px;}
		table tr:nth-child(even) td li { background: #FFD873; }
		table th { color: #D96831; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #3"); ?></h1>
						<h2 class="grid_12" ><?php echo _("Which of the following substances introduced into the environment would generally be considered pollutants? Check yes or no for all of the examples."); ?></h2>

						<div class="container">
							
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<table>
									<tr>
										<th><?php echo _("Yes"); ?></th>
										<th><?php echo _("No"); ?></th>
									</tr>
									<tr class="a">
										<ol>
											<td><li><input id="y1" name="q1" type="radio" value="Y"><label for="y1"></label></li></td>
											<td><li><input id="n1" name="q1" type="radio" value="N"><label for="n1"></label></li></td>
											<td><li id="a"><?php echo _("Carbon dioxide (CO<sub>2</sub>) that humans exhale into the air as a normal part of breathing."); ?></li></td>
										</ol>
									</tr>
									<tr class="b">
										<ol>
											<td><li><input id="y2" name="q2" type="radio" value="Y"><label for="y2"></label></li></td>
											<td><li><input id="n2" name="q2" type="radio" value="N"><label for="n2"></label></li></td>
											<td><li id="b"><?php echo _("Methane gas (CH<sub>4</sub>) that farm cows fart after eating grass."); ?></li></td>
										</ol>
									</tr>
									<tr class="c">
										<ol>
											<td><li><input id="y3" name="q3" type="radio" value="Y"><label for="y3"></label></li></td>
											<td><li><input id="n3" name="q3" type="radio" value="N"><label for="n3"></label></li></td>
											<td><li id="c"><?php echo _("Warm water discharged into a cold river from the cooling of a power plant."); ?></li></td>
										</ol>
									</tr>
									<tr class="d">
										<ol>
											<td><li><input id="y4" name="q4" type="radio" value="Y"><label for="y4"></label></li></td>
											<td><li><input id="n4" name="q4" type="radio" value="N"><label for="n4"></label></li></td>
											<td><li id="d"><?php echo _("Carbon dioxide (CO<sub>2</sub>) from burning coal in an electric power plant."); ?></li></td>
										</ol>
									</tr>
									<tr class="e">
										<ol>
											<td><li><input id="y5" name="q5" type="radio" value="Y"><label for="y5"></label></li></td>
											<td><li><input id="n5" name="q5" type="radio" value="N"><label for="n5"></label></li></td>
											<td><li id="e"><?php echo _("Fertilizer that farmers put on a field to grow better crops."); ?></li></td>
										</ol>
									</tr>
									<tr class="f">
										<ol>
											<td><li><input id="y6" name="q6" type="radio" value="Y"><label for="y6"></label></li></td>
											<td><li><input id="n6" name="q6" type="radio" value="N"><label for="n6"></label></li></td>
											<td><li id="f"><?php echo _("Oil that gets spilled into the ocean from an oil tanker cargo ship."); ?></li></td>
										</ol>
									</tr>
									<tr class="g">
										<ol>
											<td><li><input id="y7" name="q7" type="radio" value="Y"><label for="y7"></label></li></td>
											<td><li><input id="n7" name="q7" type="radio" value="N"><label for="n7"></label></li></td>
											<td><li id="g"><?php echo _("Detergent from your dishwasher or clothes washer that gets into rivers."); ?></li></td>
										</ol>
									</tr>
									<tr class="h">
										<ol>
											<td><li><input id="y8" name="q8" type="radio" value="Y"><label for="y8"></label></li></td>
											<td><li><input id="n8" name="q8" type="radio" value="N"><label for="n8"></label></li></td>
											<td><li id="h"><?php echo _("Methane gas (CH<sub>4</sub>) that deer fart after eating grass."); ?></li></td>
										</ol>
									</tr>
									<tr class="i">
										<ol>
											<td><li><input id="y9" name="q9" type="radio" value="Y"><label for="y9"></label></li></td>
											<td><li><input id="n9" name="q9" type="radio" value="N"><label for="n9"></label></li></td>
											<td><li id="i"><?php echo _("Fertilizers from your lawn that run off into a local stream, river, or lake."); ?></li></td>
										</ol>
									</tr>
									
								</table>
							</form>
							<div class="clear"></div>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '',
			answer3 = '',
			answer4 = '',
			answer5 = '',
			answer6 = '',
			answer7 = '',
			answer8 = '',
			answer9 = '';

		function save() {

			$('.answer').html($('.container').html());

			answer1 = $('.a input:radio:checked').val();
			answer2 = $('.b input:radio:checked').val();
			answer3 = $('.c input:radio:checked').val();
			answer4 = $('.d input:radio:checked').val();
			answer5 = $('.e input:radio:checked').val();
			answer6 = $('.f input:radio:checked').val();
			answer7 = $('.g input:radio:checked').val();
			answer8 = $('.h input:radio:checked').val();
			answer9 = $('.i input:radio:checked').val();

			if (answer1 == 'N')
				$('.answer #a').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #a').prepend("<img src='assets/wrong.png'>");

			if (answer2 == 'Y')
				$('.answer #b').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #b').prepend("<img src='assets/wrong.png'>");

			if (answer3 == 'Y')
				$('.answer #c').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #c').prepend("<img src='assets/wrong.png'>");

			if (answer4 == 'Y')
				$('.answer #d').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #d').prepend("<img src='assets/wrong.png'>");

			if (answer5 == 'Y')
				$('.answer #e').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #e').prepend("<img src='assets/wrong.png'>");

			if (answer6 == 'Y')
				$('.answer #f').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #f').prepend("<img src='assets/wrong.png'>");

			if (answer7 == 'Y')
				$('.answer #g').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #g').prepend("<img src='assets/wrong.png'>");

			if (answer8 == 'N')
				$('.answer #h').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #h').prepend("<img src='assets/wrong.png'>");

			if (answer9 == 'Y')
				$('.answer #i').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #i').prepend("<img src='assets/wrong.png'>");

			console.log(answer1);
			console.log(answer2);
			console.log(answer3);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer1); // Correct answer: A
				saveAnswer('module-qq#-a', answer2); // Correct answer: B
				saveAnswer('module-qq#-a', answer3); // Correct answer: C
				answered = 1;
			}
		}

		function clear() {
			//$('.answer .items').find('img').remove();
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 9) {
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
