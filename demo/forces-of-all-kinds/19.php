<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Forces of all Kinds"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">

	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">

	<?php endif; ?>

	<style>
		h1 { color: #df3e3e; }
		h2 { color: #00739f; }
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/19/qq.jpg); }


		#chartsOn, #sidepic2 {float: left; padding: 10px;}
		#chartsOn {margin-top: 10px;}
		td {border:1px solid #000; padding: 5px;}
		.ac-custom input[type="radio"]:checked + label { color: #FF6A6B; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #FF6A6B; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #FF6A6B; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #FF6A6B; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }
		#answers #sidepic2 {margin-left: 33%;}
		#buttons .next { display: none; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			div#sidepic2 { margin-left: 40px; }
		}
	img#imgageA {
	    position: absolute;
	    right: 0px;
	    width: 300px;
	}
	.container_12 .grid_12 {
	    width: 98.0%;
	    position: relative;
	}

    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }

    }
    @media only screen and (max-width: 960px){
		img#imgageA {
		    position: absolute;
		    right: 0px;
		    width: 250px;
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
						<h1 class="grid_12"><?php echo _("Quiz Question #4"); ?></h1>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("One end of a string is attached to a cart and the other end is attached to a weight hanging off a pulley at the edge of a table. The weight is released, and the car accelerates towards the edge of the table. Based on the data below, see if you can determine the size of the unknown mass."); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl grid_3" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("1.5 kg"); ?></span></label></li>
										<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("4 kg"); ?></span></label></li>
										<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("6 kg"); ?></span></label></li>
										<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("10 kg"); ?></span></label></li>
									</ol>
								</form>

				<div class="grid_3" id="chartsOn">
					<div>
						<table>
								<tbody>
									<tr>
										<td><?php echo _("Mass"); ?></td>
										<td><?php echo _("Acceleration"); ?></td>
									</tr>
									<tr>
										<td><?php echo _("1 Kg"); ?></td>
										<td><?php echo _("10 m/s/s"); ?></td>
									</tr>
									<tr>
										<td><?php echo _("2 Kg"); ?></td>
										<td><?php echo _("5 m/s/s"); ?></td>
									</tr>
									<tr>
										<td><?php echo _("5 Kg"); ?></td>
										<td><?php echo _("2 m/s/s"); ?></td>
									</tr>
									<tr>
										<td><?php echo _("Unknown"); ?>  </td>
										<td><?php echo _("2.5 m/s/s"); ?></td>
									</tr>
								</tbody>
							</table>
						</div>
				</div>

							<div class = "grid_5" id = "sidepic2">
								<img id="imgageA" src="assets/19/19.jpg">
							</div>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<div class = "grid_4" id = "sidepic2">
							<img src = "assets/19/19.jpg">
							</div>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the data..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>


	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '';

		function save() {

			answer1 = $('input:radio:checked').val();

			if (answer1 == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The acceleration is between 2 m/s/s and 5 m/s/s, so the mass must be between 2 kg and 5 kg."); ?></p>");

			if (answer1 == 'B')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! The acceleration is between 2 m/s/s and 5 m/s/s, so the mass must be between 2 kg and 5 kg. The unbalanced force appears to be 10 N since 10 divided by 1 is 10 and 10 divided by 5 is 2. 10 divided by 4 would be 2.5!"); ?></p>");

			if (answer1 == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The acceleration is between 2 m/s/s and 5 m/s/s, so the mass must be between 2 kg and 5 kg."); ?></p>");

			if (answer1 == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. 5 kg has an acceleration of 2 m/s/s, and increasing mass would decrease acceleration. The unknown mass must be less than 5 kg."); ?></p>");

			$('#answer1 .answer').html($('input:radio:checked').parent().find('span').text());

			console.log(answer1);

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qq4-a', answer1); // Correct answer: B

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
				document.location.href = "18.php";
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
