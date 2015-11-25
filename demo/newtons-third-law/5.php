<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Newton's Third Law"); ?></title>

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
		h1 { color: #8200d4; }
		h2 { color: #008fff; font-size: 24px; }
		#ph2 {font-size: 24px;}
		#answer p h2{font-size: 24px;}

		.wrap { border-color: #00C2FF; }
		.bg { background-image: url(assets/5/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #1765A3; } /* Change color */
		.ac-custom label { color: #000; padding-left: 49px; font-size: 24px; } /* Change color */
		.ac-custom label::before { background-color: #1765A3; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		.ac-custom svg path { stroke: #1765A3; } /* Change stroke-color */
		.ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { background-color: #1765A3; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		html[dir=rtl] .ac-custom svg { right: 3px; left: 98% /* for Safari */ }

		#question img { width: auto; }
		img.auto { display: block; width: auto; }

		#buttons .next { display: none; }
		.ans{display: none;}
		.ta-center{text-align:center;}
		@media screen and (max-width: 1250px){
		<?php if($language == 'es_ES'){ ?>
			#question span { font-size: 22px;}
			#question img { width: 35%; height: auto; }
		<?php }else{ ?>
			#question img { width: 40%; height: auto; }
		<?php }?>
			#answer .auto { width: 40%; height: auto; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>
						<h2 id = "ph2" class="grid_12"><?php echo _("Identify <span class='blink'>ALL</span> of the interactions occurring in this photo of a rock climber."); ?></h2>
						<div class="grid_5">
							<h2>I. <?php echo _("The woman and the cable"); ?></h2>
							<h2>II. <?php echo _("The woman and the rocks"); ?></h2>
							<h2>III. <?php echo _("The woman and the metal stake"); ?></h2>
						</div>
						<img src="assets/5/5a.jpg" class="grid_7" />
						<div class="grid_12">
							<form class="ac-custom ac-radio ac-circle" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("I only"); ?></span><span class="ans"><?php echo _("The woman and the cable"); ?></span></label></li>
									<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("II only"); ?></span><span class="ans"><?php echo _("The woman and the rocks"); ?></span></label></li>
									<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("III only"); ?></span><span class="ans"><?php echo _("The woman and the metal stake"); ?></span></label></li>
									<li><input id="d" name="q" type="radio"><label for="d"><span><?php echo _("I, II and III"); ?></span><span class="ans"><?php echo _("The woman and the cable, The woman and the rocks and The woman and the metal stake"); ?></span></label></li>
								<ol>
							</form>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2 id = "ph2" class="grid_12"><?php echo _("Identify <span class='blink'>ALL</span> of the interactions occurring in this photo of a rock climber."); ?></h2>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<p class="grid_12 answer"></p>
						<div class="ta-center grid_12">
							<img src="assets/5/5a.jpg" class="auto" />
						</div>
						<div class="clear"></div>
						<div class="grid_12 feedback"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span.ans').text();

			if (id == 'a') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Close. The woman is grasping the cable with her hand, so there's definitely an interaction occurring there, but she’s also in contact with a few other objects in the photo."); ?></p>");

				answer = 'A';
			}

			if (id == 'b') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. She's in contact with several other objects in addition to the rocks."); ?></p>");

				answer = 'B';
			}

			if (id == 'c') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. She's definitely pulling on the stake, but there are a few other objects that she’s interacting with in the photo."); ?></p>");

				answer = 'C';
			}

			if (id == 'd') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You've got it! She's grasping the cable in one hand, pulling on the metal stake with another, and using her feet to push off the rock surface."); ?></p>");

				answer = 'D';
			}
		});

		function save() {
			if (answered == 0) {
				saveAnswer('module-qq#-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('.checkanswer').fadeOut(function() { $('.next').fadeIn(); });

				$('#question').fadeOut(function(){ 

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
				$('.next').fadeOut(function() { $('.checkanswer').fadeIn(); });

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
