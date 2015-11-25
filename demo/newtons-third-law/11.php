<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qc3-a');
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
		h2 { color: #008fff; }
		
		.wrap { border-color: #00C2FF; }
		.bg { background-image: url(assets/11/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #1765A3; } /* Change color */
		.ac-custom label { color: #000; padding-left: 49px; } /* Change color */
		.ac-custom label::before { background-color: #1765A3; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		.ac-custom svg path { stroke: #1765A3; } /* Change stroke-color */
		.ac-custom svg { height: 42px; width: 37px; left: 10px; margin-top: -22px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { background-color: #1765A3; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98% /* for Safari */ }

		.illus { text-align: center; background: #fff568; }
		.illus img { width: 19%; }
		.illus img:nth-child(3){ width: 28%;}
		.illus b { padding: 0 10px; font-size: 45px; }
		.ac-custom li label { font-size: 22px; }
		.ac-custom li{padding: .35em !important;}

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px){
			#question h2{ margin-top: 3px;margin-bottom: 3px;}
		}
		<?php if($language == 'es_ES'){ ?>
			@media screen and (max-width: 1250px){
				.ac-custom li label{
					font-size:20px;
				}
			}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>
						<h2 class="grid_12"><?php echo _("Sailboats depend on wind to push against the sails and move the boat forward. On a day without any wind, a sailor decides to try to get the boat moving by attaching a large fan to the boat in order to push air into the sails. Considering the force pairs involved in this situation, what is the most likely outcome for the boat?"); ?></h2>
						
						<div class="grid_12 illus">
							<img src="assets/11/11a.jpg" alt="Illustration">
							<b>+</b>
							<img src="assets/11/11b.jpg" alt="Illustration">
							<b>=</b>
							<b>?</b>
						</div>
						<div class="grid_12">
							<form class="ac-custom ac-radio ac-circle" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("The air will push against the sails, moving the boat forward."); ?></span></label></li>
									<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("The air will push back against the fan, moving the boat backwards."); ?></span></label></li>
									<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("The boat won’t move due to the forward force on the sails and the backwards force against the fan."); ?></span></label></li>
									<li><input id="d" name="q" type="radio"><label for="d"><span><?php echo _("The force against the sails will be greater than the force on the fan, so the boat will still move forward."); ?></span></label></li>
								</ol>
							</form>
						</div>
						<div class="clear"></div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2 class="grid_12"><?php echo _("Sailboats depend on wind to push against the sails and move the boat forward. On a day without any wind, a sailor decides to try to get the boat moving by attaching a large fan to the boat in order to push air into the sails. Considering the force pairs involved in this situation, what is the most likely outcome for the boat?"); ?></h2>

						<div class="grid_12 illus">
							<img src="assets/11/11a.jpg" alt="Illustration">
							<b>+</b>
							<img src="assets/11/11b.jpg" alt="Illustration">
							<b>=</b>
							<b>?</b>
						</div>
						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<p class="grid_12 answer"></p>

						<div class="grid_12 feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

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
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. The air will push forward against the sails, but it will also push backwards against the fan. Those interactions will cancel out and the boat won't move."); ?></p>");

				answer = 'A';
			}

			if (id == 'b') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Almost. The air will push the fan backwards, but it will also push forward against the sails. Those interactions will cancel each other out, and the boat won't move."); ?></p>");

				answer = 'B';
			}

			if (id == 'c') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You've got it. In any interaction, forces are paired. So when the fan pushes the air forward, the air pushes the fan backwards. That backwards push against the fan cancels out the forward push against the sails."); ?></p>");

				answer = 'C';
			}

			if (id == 'd') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. If anything, the force pushing back against the fan will be slightly greater. Most likely, the forward force of the air against the sails cancels out the backwards force of the air against the fan, and the boat won't move."); ?></p>");

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
				document.location.href = "10.php#screen2";
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
