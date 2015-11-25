<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'our-solar-system-qc2-a');
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
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #735c00; }
		h2 { color: #5949a8; }
		
		.wrap { border-color: #D16824; }
		.bg { background-image: url(assets/7/bg.jpg); }

		#buttons .next { display: none; }

		/* .ac-custom { float: left; } */
		.ac-custom input[type="radio"]:checked + label { color: #32058D; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #32058D; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #32058D; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #32058D; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%; overflow: hidden;}
		.pet:hover {cursor: pointer;}
		.click {text-align: center;font-size:22px;}
		#close { background: white; color: #406468; display: block; margin: 0 auto; width: 65px; padding:10px; border-radius: 5px; margin-top:40px;text-align:center;}
		#close:hover { cursor: pointer; }
		span.view { text-align: center; display: block; margin: 0 auto; font-size: 25px; color: #0549A0; }
		#question1 img{ width: 50%; margin-left: 25%; }
		table { font-size: 22px; text-align: center; margin: 20px auto 0;}
		thead { background: #9ebde9; }
		td { background: #afebff; }
		th:nth-child(3), th:nth-child(4) { width: 250px; }
		td, th { padding: 5px; border: 1px solid #003471; }
		table {
		    margin-left: auto;
		    margin-right: auto;
		    margin-top: 55px;
		}
		span#close {
		    width: 15%;
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			table { width: 100%; margin-top: 7%; }
		}
		table {
		    font-size: 18px;
		}
		/*<?php if ($language == 'es_ES') : ?>*/
		@media only screen and (max-width: 960px){
			#close {
			    margin-top: 5px;
			}
		}
		/*<?php endif; ?>*/
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv" >
				<table>
					<thead>
						<th><?php echo _("Planet"); ?></th>
						<th><?php echo _("Average Distance from the Sun"); ?></th>
						<th><?php echo _("Number of Earth Days required to Orbit the Sun (rounded to nearest whole number)"); ?></th>
						<th><?php echo _("Number of Earth Years required to Orbit the Sun (rounded to nearest whole number)"); ?></th>
					</thead>
					<tbody>
						<tr>
							<td><?php echo _("Mercury"); ?></td>
							<td><?php echo _("57 million km"); ?></td>
							<td><?php echo _("88"); ?></td>
							<td><?php echo _("0.24"); ?></td>
						</tr>
						<tr>
							<td><?php echo _("Venus"); ?></td>
							<td><?php echo _("108 million km"); ?></td>
							<td><?php echo _("225"); ?></td>
							<td><?php echo _("0.62"); ?></td>
						</tr>
						<tr>
							<td><?php echo _("Earth"); ?></td>
							<td><?php echo _("150 million km"); ?></td>
							<td><?php echo _("365"); ?></td>
							<td><?php echo _("1"); ?></td>
						</tr>
						<tr>
							<td><?php echo _("Mars"); ?></td>
							<td><?php echo _("228 million km"); ?></td>
							<td><?php echo _("730"); ?></td>
							<td><?php echo _("2"); ?></td>
						</tr>
						<tr>
							<td><?php echo _("Jupiter"); ?></td>
							<td><?php echo _("779 million km"); ?></td>
							<td><?php echo _("4380"); ?></td>
							<td><?php echo _("12"); ?></td>
						</tr>
						<tr>
							<td><?php echo _("Saturn"); ?></td>
							<td><?php echo _("14,300 million km"); ?></td>
							<td><?php echo _("10,585"); ?></td>
							<td><?php echo _("29"); ?></td>
						</tr>
						<tr>
							<td><?php echo _("Neptune"); ?></td>
							<td><?php echo _("28,800 million km"); ?></td>
							<td><?php echo _("30,660"); ?></td>
							<td><?php echo _("84"); ?></td>
						</tr>
						<tr>
							<td><?php echo _("Uranus"); ?></td>
							<td><?php echo _("45,000 million km"); ?></td>
							<td><?php echo _("58,400"); ?></td>
							<td><?php echo _("165"); ?></td>
						</tr>
					</tbody>
				</table>
				<span id="close"><?php echo _('Close me!'); ?></span>
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>

						<div id="question1" class="grid_12">
							<h2><?php echo _("You have been stranded on Mars after a crash landing. Although the crashed rocket cannot get you back into space, it does provide enough food, water, shelter and oxygen until the rescue mission arrives. The radio also works. NASA just informed you that a rescue ship cannot pick you up until Mars comes back around to the exact same orbital position it was in when the ship crashed. In other words, you will be stranded on the planet for exactly 1 Mars year. According to the table below, how many Earth days must your friends wait before they see you rescued?"); ?></h2>
							<div class="grid_3">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("150"); ?></span></label></li>
										<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("365"); ?></span></label></li>
										<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("228"); ?></span></label></li>
										<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("730"); ?></span></label></li>
									</ol>
								</form>
							</div>
							<div class="grid_9">
								<span class="view"><?php echo _("Click the image below to view the table."); ?></span>
								<img src="assets/7/table.png" class="small pet" />
							</div>
						</div>

					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1" class="grid_12">
							<h2><?php echo _("You have been stranded on Mars after a crash landing. Although the crashed rocket cannot get you back into space, it does provide enough food, water, shelter and oxygen until the rescue mission arrives. The radio also works. NASA just informed you that a rescue ship cannot pick you up until Mars comes back around to the exact same orbital position it was in when the ship crashed. In other words, you will be stranded on the planet for exactly 1 Mars year. According to the table below, how many Earth days must your friends wait before they see you rescued?"); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>

							<div class="feedback"></div>
						</div>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Counting the days..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});	

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. It takes many more earth days than that for Mars to complete one orbit around the Sun."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. It takes many more earth days than that for Mars to complete one orbit around the Sun."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. It takes many more earth days than that for Mars to complete one orbit around the Sun."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That’s Right! It will take 730 earth days before you can be rescued."); ?></p>");

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('our-solar-system-qc2-a', answer1); // Correct answer: 

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('.back').fadeOut(); 

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "6.php#screen2";
			} else if ($('#answers').is(':visible')) {
				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
