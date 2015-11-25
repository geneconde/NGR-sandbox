<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq6-a');
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
		h2 { color: #008fff; font-size: 22px; }
		
		.wrap { border-color: #00C2FF; }
		.bg { background-image: url(assets/19/bg.jpg); }

		.ac-custom li { padding: .3em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #1765A3; } /* Change color */
		.ac-custom label { color: #000; padding-left: 49px; font-size: 22px; } /* Change color */
		.ac-custom label::before { background-color: #1765A3; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		.ac-custom svg path { stroke: #1765A3; } /* Change stroke-color */
		.ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { background-color: #1765A3; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		html[dir=rtl] .ac-custom svg { right: 3px; left: 98% /* for Safari */ }

		#question img { width: 25%; display: block; }
		#answer img.illu { width: auto; display: block; }

		#buttons .next { display: none; }
		.ta-center{text-align:center;}
		@media screen and (max-width: 1250px){
			#question h2{ margin-top: 3px ; font-size: 20px; line-height: 1.3;}
			#question li{padding: .1em 0;}
			#question li span {font-size: .9em}
			#answer .auto { width: 40%; height: auto; }
		}
		img, video {
			margin:  2px auto !important;
		}

		<?php if($language == 'es_ES'){?>
			.ac-custom label {
				font-size: 20px !important;
			}
		<?php } ?>
			
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?></h1>

						<h2><?php echo _("Your friend is having a hard time understanding how to apply Newton's Third Law of paired forces. As an example, he describes a horse pulling a cart. He claims that it would be impossible for the horse to move the cart forward if the horse and cart are putting the same amount of force on each other. Which of the following statements would be more in line with Newton's Third Law of paired forces?"); ?></h2>
						<img src="assets/21/21a.jpg" alt="Image Illustration">
						<div class="grid_12">
							<form class="ac-custom ac-radio ac-circle" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("To move forward, the horse puts a force on the cart which is larger than the force the cart puts on the horse."); ?></span></label></li>
									<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("To move forward, the horse must put a force on the cart which is greater than the weight of the cart."); ?></span></label></li>
									<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("To move forward, the horse and cart put forces on each other which are equal in size."); ?></span></label></li>
									<li><input id="d" name="q" type="radio"><label for="d"><span><?php echo _("To move forward, for a brief time the force of the horse on the cart is greater than the force of the cart on the horse."); ?></span></label></li>
								</ol>
							</form>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
						
						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<p class="grid_12 answer"></p>
						<div class="grid_12 ta-center">
							<img src="assets/21/21a.jpg" alt="Image Illustration" class="illu">
						</div>
						<div class="grid_12 feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="22.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

			if (id == 'a') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. It's impossible for the horse to put more force on the cart than the cart puts on the horse. Those forces are paired, so they’ll be the same size every time."); ?></p>"); //'

				answer = 'A';
			}

			if (id == 'b') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The force we think of as weight acts in a downward direction, the pull of the horse acts in a sideways direction. The cart can actually be moved with a force much smaller than the weight of the cart."); ?></p>");

				answer = 'B';
			}

			if (id == 'c') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes!  The forces that the cart and the horse put on each other will be the same size.  The horse is able to get things moving by pushing off against the ground with a lot of force."); ?></p>");

				answer = 'C';
			}

			if (id == 'd') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  The forces that the cart and the horse put on each other are paired, so even if the horse tries to increase the force that it puts on the cart, the paired force that the cart puts on the horse will always increase to match it!"); ?></p>");

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
				document.location.href = "20.php";
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
