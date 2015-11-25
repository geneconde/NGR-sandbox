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

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #005a8f; }
		h2 { color: #128575;}

		.bg { background-image: url(assets/qq-and-qc-bg.jpg); }

		#sortable { width: 100%; padding: 10px 0; }
		#sortable li { background-color: #EC8262; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; cursor: move; padding: 10px 5px; border:3px dashed #176E6A; }
		#sortable li:last-child { margin-bottom: 0; }

		#answer .answer { margin: 10px 0; }
		#answer .answer li { background-color: #EC8262; list-style: none; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; }

		#buttons .next { display: none; }

		.table {
			font-size: 16px;
		}

		td, th { border: 1px solid #000; padding-left: 5px; padding-right: 5px;}

		h3{ margin: 0;}
		tr td:nth-child(2) { text-align: right; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #6"); ?></h1>
						<h2 class="grid_12"><?php echo _("Based on the speed of sound in the materials listed in the table to the right, drag the items listed on the left into order, with the material where sound would have the fastest speed on top, and the material where sound would have the slowest speed on the bottom."); ?></h2>

						<div id="sortable-container" class="grid_4 prefix_1 suffix_1">
							<ul id="sortable">
								<li id="1"><?php echo _("Oak (Wood)"); ?></li>
								<li id="2"><?php echo _("Titanium (Metal)"); ?></li>
								<li id="3"><?php echo _("Air at 50°F"); ?></li>
								<li id="4"><?php echo _("Seawater at 90°F"); ?></li>
							</ul>
						</div>
						<div class="table grid_6">
							<h3><?php echo _("Data Table: Speed of Sound in Different Media"); ?></h3>
							<table>
								<tr>
									<th><?php echo _("Medium"); ?></th>
									<th><?php echo _("Speed in feet per second"); ?></th>
								</tr>
								<tr>
									<td><?php echo _("Air at 50°F"); ?></td>
									<td>1,116</td>
								</tr>
								<tr>
									<td><?php echo _("Aluminum"); ?></td>
									<td>16,000</td>
								</tr>
								<tr>
									<td><?php echo _("Brick"); ?></td>
									<td>11,980</td>
								</tr>
								<tr>
									<td><?php echo _("Distilled water at 77°F"); ?></td>
									<td>4,908</td>
								</tr>
								<tr>
									<td><?php echo _("Glass"); ?></td>
									<td>14,900</td>
								</tr>
								<tr>
									<td><?php echo _("Seawater at 90°F"); ?></td>
									<td>5,023</td>
								</tr>
								<tr>
									<td><?php echo _("Steel"); ?></td>
									<td>17,100</td>
								</tr>
								<tr>
									<td><?php echo _("Wood (maple)"); ?></td>
									<td>13,480</td>
								</tr>
							</table>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer grid_4 prefix_4 suffix_4"></div>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last question?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('#sortable').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString();

			if (answer == '1032') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! Sound tends to travel fastest in materials where the atoms are packed tightly together, and moves slowly in materials in which the atoms are able to move around more easily."); ?></p>");
			} else if (answer == '2301') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The top item should be the material in which sound would have the highest speed. Titanium is a metal, like Aluminum and Steel, so it will likely have a higher speed of sound than the others."); ?></p>");
			} 
			else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. Based on the chart, sound seems to travel fastest through metals, followed by wood, then seawater and sound moves slowest through the air."); ?></p>");
			} 

			console.log(answer);

			if (answered == 0) {
				saveAnswer('making-sound-qq6-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {

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
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "20.php";
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
