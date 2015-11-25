<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(16, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Motion"); ?></title>

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
		.wrap > .bg {
			overflow: hidden;
		}
		h1 { color: #44311f; }
		h2 { color: #88633E; }
		
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }

		.bounds { position: relative; }
		.bounds p { position: absolute; }

		.a p:first-child { font-size: 18px; left: 18%; top: 65px; }
		.a p:nth-child(2) { font-size: 18px; left: 18%; top: 65px; }
		.a p:nth-child(3) { font-size: 18px; left: 21%; top: 65px; }
		.a p:nth-child(4) { font-size: 18px; left: 23%; top: 65px; }
		.a p:nth-child(5) { font-size: 18px; left: 25.5%; top: 65px; }
		.a p:nth-child(6) { font-size: 18px; left: 28%; top: 65px; }
		.a p:nth-child(7) { font-size: 18px; left: 30.5%; top: 65px; }
		.a p:nth-child(8) { font-size: 18px; left: 33%; top: 65px; }
		.a p:nth-child(9) { font-size: 18px; left: 35.5%; top: 65px; }
		.a p:nth-child(10) { font-size: 18px; left: 38%; top: 65px; }
		.a p:nth-child(11) { font-size: 18px; left: 40.5%; top: 65px; }
		.a p:nth-child(12) { font-size: 18px; left: 43.5%; top: 65px; }
		.a p:nth-child(13) { font-size: 18px; left: 46%; top: 65px; }
		.a p:nth-child(14) { font-size: 18px; left: 48.5%; top: 65px; }
		.a p:nth-child(15) { font-size: 18px; left: 50.5%; top: 65px; }
		.a p:nth-child(16) { font-size: 18px; left: 53%; top: 65px; }
		.a p:nth-child(17) { font-size: 18px; left: 55.5%; top: 65px; }
		.a p:nth-child(18) { font-size: 18px; left: 58%; top: 65px; }
		.a p:nth-child(19) { font-size: 18px; left: 60.5%; top: 65px; }
		.a p:nth-child(20) { font-size: 18px; left: 63%; top: 65px; }
		.a p:nth-child(21) { font-size: 18px; left: 65%; top: 65px; }
		.a p:nth-child(22) { font-size: 18px; left: 67.5%; top: 65px; }
		
		.a img{width:600px; margin-left: 50px;}
		
		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { 
			.bg { background-size: cover !important; } 

			.a p:nth-child(2) { left: 19%; top: 65px; }
			.a p:nth-child(3) { left: 22%; top: 65px; }
			.a p:nth-child(4) { left: 25%; top: 65px; }
			.a p:nth-child(5) { left: 27.5%; top: 65px; }
			.a p:nth-child(6) { left: 30%; top: 65px; }
			.a p:nth-child(7) { left: 33%; top: 65px; }
			.a p:nth-child(8) { left: 35.5%; top: 65px; }
			.a p:nth-child(9) { left: 38.5%; top: 65px; }
			.a p:nth-child(10) { left: 41.5%; top: 65px; }
			.a p:nth-child(11) { left: 44%; top: 65px; }
			.a p:nth-child(12) { left: 47.5%; top: 65px; }
			.a p:nth-child(13) { left: 50%; top: 65px; }
			.a p:nth-child(14) { left: 53%; top: 65px; }
			.a p:nth-child(15) { left: 55.5%; top: 65px; }
			.a p:nth-child(16) { left: 58%; top: 65px; }
			.a p:nth-child(17) { left: 61%; top: 65px; }
			.a p:nth-child(18) { left: 63.5%; top: 65px; }
			.a p:nth-child(19) { left: 66.5%; top: 65px; }
			.a p:nth-child(20) { left: 69%; top: 65px; }
			.a p:nth-child(21) { left: 71.5%; top: 65px; }
			.a p:nth-child(22) { left: 74%; top: 65px; }
			
		}

		.ac-custom li { padding: 8px 0; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom input[type="radio"]:checked + label { color: #ff9a00; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		.ac-custom svg path { stroke: #ff9a00; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer { display: none; }
		#answer p { text-align: center; }

		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media only screen and (max-width: 960px){
		.a img {
		    width: 80% !important;
		    margin-left: auto;
		    margin-right: auto;
		}
.a p:nth-child(2) { font-size: 18px; left: 14%; top: 65px; }
.a p:nth-child(3) { font-size: 18px; left: 17%; top: 65px; }
.a p:nth-child(4) { font-size: 18px; left: 20%; top: 65px; }
.a p:nth-child(5) { font-size: 18px; left: 23%; top: 65px; }
.a p:nth-child(6) { font-size: 18px; left: 26%; top: 65px; }
.a p:nth-child(7) { font-size: 18px; left: 29%; top: 65px; }
.a p:nth-child(8) { font-size: 18px; left: 32%; top: 65px; }
.a p:nth-child(9) { font-size: 18px; left: 35%; top: 65px; }
.a p:nth-child(10) { font-size: 18px; left: 38%; top: 65px; }
.a p:nth-child(11) { font-size: 18px; left: 41%; top: 65px; }
.a p:nth-child(12) { font-size: 18px; left: 44%; top: 65px; }

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
						<h1><?php echo _("Quiz Question #1"); ?></h1>

						<h2 class="black" ><?php echo _("This motion map shows a bowling ball rolling down a flat hallway that has a number line painted on the floor showing positions in meters.  The images of the bowling ball show its position every 2 seconds beginning with the image at -10 meter mark which occurred when the clock read 0 seconds."); ?></h2>
						<div class="a bounds grid_12 prefix_1 suffix_1">
							<img src="assets/16/arrow.png">
							<p><?php echo _("-10"); ?></p>
							<p><?php echo _("-9"); ?></p>
							<p><?php echo _("-8"); ?></p>
							<p><?php echo _("-7"); ?></p>
							<p><?php echo _("-6"); ?></p>
							<p><?php echo _("-5"); ?></p>
							<p><?php echo _("-4"); ?></p>
							<p><?php echo _("-3"); ?></p>
							<p><?php echo _("-2"); ?></p>
							<p><?php echo _("-1"); ?></p>
							<p><?php echo _("0"); ?></p>
							<p><?php echo _("1"); ?></p>
							<p><?php echo _("2"); ?></p>
							<p><?php echo _("3"); ?></p>
							<p><?php echo _("4"); ?></p>
							<p><?php echo _("5"); ?></p>
							<p><?php echo _("6"); ?></p>
							<p><?php echo _("7"); ?></p>
							<p><?php echo _("8"); ?></p>
							<p><?php echo _("9"); ?></p>
							<p><?php echo _("10"); ?></p>
						</div>
							<div class="clear"></div>

						<div class="grid_12" style="margin-top: 20px;">

								<h2><?php echo _("How much time did it take the ball to reach the 0 meter mark?"); ?></h2>
									<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
										<ol>
											<li><input id="a" name="q" type="radio" value="A"><label for="a"><span>5<?php echo _("seconds"); ?></span></label></li>
											<li><input id="b" name="q" type="radio" value="B"><label for="b"><span>10<?php echo _("seconds"); ?></span></label></li>
											<li><input id="c" name="q" type="radio" value="C"><label for="c"><span>20<?php echo _("seconds"); ?></span></label></li>
											<li><input id="d" name="q" type="radio" value="D"><label for="d"><span>30<?php echo _("seconds"); ?></span></label></li>
										<ol>
									</form>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="17.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>

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
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  The images of the bowling ball are 2 seconds apart, so it was at the -8 meter mark after 2 seconds, and at the -6 meter mark after 4 seconds. At 5 seconds, the ball would be somewhere between the -6 meter mark and the -4 meter mark."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes. It was at -10 meters at 0 seconds, so it was at -8 meters when the clock read 2 seconds, and it was at -6 meters when the clock read 4 seconds, so that pattern would have it at the 0 meter mark at 10 seconds."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No.  The images of the bowling ball are 2 seconds apart, so it was at the -8 meter mark after 2 seconds, and at the -6 meter mark after 4 seconds.  After 20 seconds, the ball would be past the 10 meter mark."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  The images of the bowling ball are 2 seconds apart, so it was at the -8 meter mark after 2 seconds, and at the -6 meter mark after 4 seconds.   After 30 seconds, the ball would be past the 10 meter mark."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('', answer); // Correct answer: D
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

				$('#question').fadeOut(function() { 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "15.php";
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
