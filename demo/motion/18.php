<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq5-a');
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

		.image_sb {width:80%; height:200px; margin-left: 30px;}
		
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }

		table {margin-left: 50px; }
		td, th { border: 1px solid #000; text-align: center; }

		#question table th, td{ width: 150px;}
		
		.ac-custom input[type="radio"]:checked + label { color:  #ff9a00; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #ff9a00; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?></h1>

						<h2 class="black" ><?php echo _("A student records the following data while traveling along a highway on a school bus."); ?></h2>
							<div class="grid_6">
								<img class="image_sb" src="assets/18/schoolbus.jpg">
							</div>
								<div class="grid_6">
									<table>
										<thead>
											<th><?php echo _("Time"); ?></th>
											<th><?php echo _("Mile Marker"); ?></th>
										</thead>
										<tbody>
											<tr>
												<td><?php echo _("2:00 PM"); ?></td>
												<td>100</td>
											</tr>
											<tr>
												<td><?php echo _("2:15 PM"); ?></td>
												<td>115</td>
											</tr>
											<tr>
												<td><?php echo _("2:30 PM"); ?></td>
												<td>130</td>
											</tr>
											<tr>
												<td><?php echo _("2:45 PM"); ?></td>
												<td>145</td>
											</tr>
											<tr>
												<td><?php echo _("3:00 PM"); ?></td>
												<td>160</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="grid_12">
									<h2><?php echo _("Based on this data, what time will it be when the bus reaches its destination at the science museum located near mile marker 250?"); ?></h2>
									<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
										<ol>
											<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("4:00 PM"); ?></span></label></li>
											<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("4:30 PM"); ?></span></label></li>
											<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("5:00 PM"); ?></span></label></li>
											<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("5:30 PM"); ?></span></label></li>
										<ol>
									</form>
								</div>

					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Waiting for school bus..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  Based on the velocity pattern, this bus would be near mile marker 220 at 4:00 PM."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes!  Based on the velocity pattern, this bus is travelling 60 miles every hour.  It will be at mile marker 220 at 4:00 PM, and will need another half hour to go the 30 additional miles to the science museum."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  Based on the velocity pattern, this bus is travelling 60 miles every hour.  It will be at mile marker 220 at 4:00 PM and would be at mile marker 280 by 5:00 PM."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No.  Based on the velocity pattern, this bus is travelling 60 miles every hour.  It will be at mile marker 220 at 4:00 PM and would be at mile marker 310 by 5:30 PM."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
				answered = 1;
			}
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

				$('#question').fadeOut(function(){ 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "17.php";
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
