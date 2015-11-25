<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	//require_once "../tempsession.php";
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
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>

		h1 { color: #005a8f; }

		h2 { color: #128575;}
		
		
		.bg { background-image: url(assets/qq-and-qc-bg.jpg); }

		.ac-custom input[type="checkbox"]:checked + label { color: #ff9931; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom svg path { stroke: #ff9931; }

		#question1 .ac-custom label::before { background-color: #fff; border: 4px solid #ff9931;  height: 20px; width: 20px; margin-top: -11px; }
		#question1 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }
		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question1 .ac-custom label::after { background-color:#ff9931; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 3px; left: 98%; }

		#buttons .next { display: none; }
		.fix {
			margin-bottom: 2px;
			margin-top: 2px;
		}
		#answers p {
			margin-top: 30px;
			text-align: left;
			color: #fff;
		}
		#questions .grid_5 img {
			margin-top: 50px;
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Checking what you know about... making sound"); ?></h1>

						<div id="question1">
							<h2 class="grid_12 fix"><?php echo _("Click on <span class='blink'>ALL</span> of the items below that make correct statements about sound."); ?></h2>

							<div class="grid_6">
								<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="checkbox" value="A"><label for="a1"><span><?php echo _("Sound must have a material to travel through, such as air or water."); ?></span></label></li>
										<li><input id="b1" name="q1" type="checkbox" value="B"><label for="b1"><span><?php echo _("Sound is produced by vibrating objects."); ?></span></label></li>
										<li><input id="c1" name="q1" type="checkbox" value="C"><label for="c1"><span><?php echo _("Sound is a form of energy transfer."); ?></span></label></li>
										<li><input id="d1" name="q1" type="checkbox" value="D"><label for="d1"><span><?php echo _("All of the above are correct."); ?></span></label></li>
									</ol>
								</form>
							</div>
							<div class="grid_5  suffix_1">
								<img src="assets/3/3a.jpg" />
							</div>
						</div>
					</div>

					<div id="answers">
						<div class="grid_12">
							<p class="grid_12"><?php echo _("For sound waves to travel, they must have a material to move through. Sound waves travel through air, but they can also travel through water and solid materials like wood or metal. When a vibrating object causes the air around it to vibrate, sound is produced. The sound carries energy, and when that energy reaches your ears, it causes your eardrum to move back and forth. Check out the rest of this review to learn more about making sound!"); ?></p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Traveling through air..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:checkbox:checked').parent().find('span').text());
			answer1 = $('#question1 input:checkbox:checked').val();			
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:checkbox:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)')
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 


					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "2.php";
			} else if ($('#answers').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.bg').css('background-image', 'url(assets/qq-and-qc-bg.jpg)')
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '#';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
