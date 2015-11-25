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
		h1 { color: #44311f; }
		img, video {
    		margin: 0 !important;
		}
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }
	
		.ac-custom li { padding: 5px 0; }
		.ac-custom input[type="radio"]:checked + label {  color: #ff9a00; }
		.ac-custom input[type="radio"]:checked + label span img { box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; border: 4px solid #ff9a00;}
		label span img { border: 4px solid #FEFFDD; border-radius: 10px; transition: all .3s ease; transition-property: all; transition-duration: 0.3s; transition-timing-function: ease; transition-delay: initial; backface-visibility: hidden;}
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom svg path { stroke: #ff9a00; }

		#question1 .ac-custom label::before { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		#question1 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question1 .ac-custom label::after { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		#questoin_p ( color: #88633E !important;)
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

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>

						<div id="question1">
							<h2 id="questoin_p" class="grid_12"><?php echo _("In all of the motion maps below, the objects are moving from left to right.  Which of the following motion maps shows an object that is getting faster as it moves?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><img src="assets/5/choice-a.png" alt="choice-a"></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><img src="assets/5/choice-b.png" alt="choice-b"></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><img src="assets/5/choice-c.png" alt="choice-c"></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><img src="assets/5/choice-d.png" alt="choice-d"></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("In all of the motion maps below, the objects are moving from left to right.  Which of the following motion maps shows an object that is getting faster as it moves?"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
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
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check…"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').html());

			answer1 = $('#question1 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. These images are evenly spaced, so this duck’s motion is constant."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. These images are farther apart than in A, but they are still evenly spaced, so this duck’s motion is also constant."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it! The images of this duck keep getting farther apart, indicating that this duck is getting faster!"); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The images of this duck are getting closer together, so this duck appears to be slowing down."); ?></p>");


			console.log(answer1);

			if (answered == 0) {
				saveAnswer('motion-qc#-a', answer1);

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 1) {
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
				document.location.href = "4.php#screen4";
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
