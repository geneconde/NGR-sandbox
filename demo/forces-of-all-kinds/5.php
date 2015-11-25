<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'gravity-in-action-qc1-a');
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
		h2 {color: #00739f; font-size: 24px;}
		p, label, li { font-size: 24px !important; }

		.wrap { border-left: 1px dashed #00739f; border-right: 1px dashed #00739f; }
		.bg { background: url('assets/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

		.ac-custom { padding: 0; }
		.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
		.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
		.ac-custom input[type="checkbox"]:checked + label { color: #BF4E4E; }
		.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -12px; }
		.ac-custom label::before { border: 2px solid #BF4E4E; }
		.ac-custom svg path { stroke: #BF4E4E; }
		.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

		#question ol { width: 760px; margin: 0 0 0 40px !important; }
		#question li { padding: 10px 0; }

		html[dir="rtl"] .ac-custom label { padding-right: 90px; }
		html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 45px; }
		html[dir="rtl"] .ac-custom svg { right: 48px; }
		html[dir="rtl"] #question ol { width: 100%; }

		#buttons .next { display: none; }

    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		div#answer {
		    font-size: 18px !important;
		    line-height: 25px;
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

				<div id="question">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<h2><?php echo _('Which of the following events can be explained by electro-magnetic interaction? <br/> Check <span class="blink">ALL</span> that apply.'); ?></h2>
				<section>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li><input id="a" name="q1a" type="checkbox" value="A"><label for="a"><span><?php echo _("A magnet holds a picture to the refrigerator."); ?></span></label></li>
							<li><input id="b" name="q1b" type="checkbox" value="B"><label for="b"><span><?php echo _("Static cling causes a sock to stick to your sweater."); ?></span></label></li>
							<li><input id="c" name="q1c" type="checkbox" value="C"><label for="c"><span><?php echo _("Your hand cannot pass through the solid table."); ?></span></label></li>
							<li><input id="d" name="q1d" type="checkbox" value="D"><label for="d"><span><?php echo _("A rock falls towards the Earth's surface."); ?></span></label></li>
						</ol>
					</form>
				</section>
			</div>
			<div id="answer">
					<h1><?php echo _("Quick Check #1") . " - " . _("How did I do?"); ?></h1>
					<h2><?php echo _('Which of the following events can be explained by electro-magnetic interaction? <br/> Check <span class="blink">ALL</span> that apply.'); ?></h2>
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
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
			var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('input[type=checkbox]').each(function() {
				if ($(this).is(':checked')) {
					$('.answer').append("<p>" + $(this).parent().find('span').text() + "</p>");

					answer += $(this).val();
				}
			});

			if (answer == 'ABC') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You got it! The first three are all examples of electro-magnetic interaction."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Not quite. The first three items are all examples of electro-magnetic interaction: the magnet is having an electro-magnetic interaction with the refrigerator, static cling is based on the interaction of charged particles in the sock and the sweater, and your hand can\'t pass through the table because forces between charged particles in the table hold it together. However, the rock falls towards the Earth\'s surface due to a gravitational interaction, not an electro-magnetic one.'); ?></p>");
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qc#1-a', answer); // Correct answer: ABC
				answered = 1;
			}
		}

		function clear() {
			$('.answer').html('');
			$('.feedback').html('');

			answer = '';
		}




		$('.checkanswer').click(function() {
			checkAnswer = $('input:checkbox:checked').length;

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
				document.location.href = "4.php#screen2";
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

		$(".sortable").sortable({ scroll: false, containment: ".bounds" });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
