<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qc2-a');
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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #44311f; }
		h2 { color: #88633E; }
		
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #ff9a00; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom svg path { stroke: #ff9a00; }
		.ac-custom li { padding: 5px 0; }

		#question1 .ac-custom label:checked + label { background-color:  #ff9a00; }
		
		
		#question1 .ac-custom label::before { background-color: #ff9a00; height: 20px; width: 20px; margin-top: -11px; }
		#question1 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		#question2 .ac-custom label::before { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		#question2 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question1 .ac-custom label::after { background-color: #fe36fc; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 3px; left: 98%; }

		html[dir=rtl] #question2 .ac-custom label::after { border: 2px solid #fe36fc; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question2 .ac-custom svg { right: 9px; left: 98%; }

		table {
			font-size: 20px;
			text-align: center;
		}

		td, th { border: 1px solid #000; }

		table th:first-child { width: 30%; }
		table th:nth-child(2), table th:nth-child(3) { width: 35%; }

		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		table {
		    font-size: 16px;
		    text-align: center;
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>

						<div id="question1" class="grid_12">
							<h2 class="black">
								<?php echo _("See if you can answer a few questions about the motion of two different people riding bicycles based on the data table below."); ?>
							</h2>
							<div class="grid_6">
								<h2><?php echo _("Question A. Which cyclist is moving the fastest?"); ?></h2>
								<div class="grid_12">
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("Mary"); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("George"); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("Mary and George are equally fast"); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("It cannot be known from this table"); ?></span></label></li>
									<ol>
								</form>
							</div>
							</div>
							<div class="grid_6">
								<table>
									<thead>
										<th><?php echo _("Time"); ?></th>
										<th><?php echo _("Mary’s Position"); ?></th>
										<th><?php echo _("George’s Position"); ?></th>
									</thead>
									<tbody>
										<tr>
											<td>0</td>
											<td>0</td>
											<td>0</td>
										</tr>
										<tr>
											<td>10 	<?php echo _("minutes"); ?></td>
											<td>3 	<?php echo _("miles East"); ?></td>
											<td>1 	<?php echo _("miles West"); ?></td>
										</tr>
										<tr>
											<td>20 	<?php echo _("minutes"); ?></td>
											<td>6 	<?php echo _("miles East"); ?></td>
											<td>2 	<?php echo _("miles West"); ?></td>
										</tr>
										<tr>
											<td>30 	<?php echo _("minutes"); ?></td>
											<td>9 	<?php echo _("miles East"); ?></td>
											<td>3 	<?php echo _("miles West"); ?></td>
										</tr>
										<tr>
											<td>40 	<?php echo _("minutes"); ?></td>
											<td>12 	<?php echo _("miles East"); ?></td>
											<td>4 	<?php echo _("miles West"); ?></td>
										</tr>
										<tr>
											<td>50 	<?php echo _("minutes"); ?></td>
											<td>15 	<?php echo _("miles East"); ?></td>
											<td>5 	<?php echo _("miles West"); ?></td>
										</tr>
										<tr>
											<td>60 	<?php echo _("minutes"); ?></td>
											<td>18 	<?php echo _("miles East"); ?></td>
											<td>6 	<?php echo _("miles West"); ?></td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. If Mary continues to ride at this pace, where will she most likely be if she continues to ride for another half hour?"); ?></h2>
							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span>21 <?php echo _("miles East"); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span>24 <?php echo _("miles East"); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span>27 <?php echo _("miles East"); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span>30 <?php echo _("miles East"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1" class="grid_12">
							<h2><?php echo _("Question A. Which cyclist is moving the fastest?"); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>

							<div class="feedback"></div>
						</div>

						<div id="answer2" class="grid_12">
							<h2><?php echo _("Question B. If Mary continues to ride at this pace, where will she most likely be if she continues to ride for another half hour?"); ?></h2>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Riding a bicycle..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());
			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yep! Mary appears to be moving the fastest. She moves 3 miles every ten minutes."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. George only moves 1 mile every ten minutes while Mary moves 3 miles in that time."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. Mary and George are moving at different speeds. Mary moves 3 miles every ten minutes but George only moves 1 mile every ten minutes."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. The patterns in the numbers on the data table can give you a clear idea about which cyclist moves fastest. Mary is moving 3 miles in the same time George moves 1 mile, so Mary is faster."); ?></p>");

			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. At her pace, Mary will be 21 miles East at 70 minutes."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. Based on the pattern in the data table, Mary will be 24 miles East at 80 minutes."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it! Based on the pattern in the data table, Mary will be 27 miles East after 90 minutes."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. At her pace, Mary won’t get to 30 miles East until 100 minutes."); ?></p>");

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1); // Correct answer: A
				saveAnswer('module-qc#-b', answer2); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
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
				document.location.href = "6.php#screen3";
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
