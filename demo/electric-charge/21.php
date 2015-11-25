<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'electric-charge-qq6-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Charge"); ?></title>

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
		h2 { color: #0090ff; }
		
		.wrap { border-color: #94E081; }
		.bg { background-image: url(assets/21/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #35B5C0; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #0090FF; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #35B5C0; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #0090FF; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		
		.ml50{margin-left: 50px;}
		.ans{display:none;}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?></h1>

						<h2><?php echo _("Which of these natural wonders relate to electric charge?"); ?></h2>
						<div class="grid_3 prefix_1 ml50">
							<img src="assets/21/1.jpg" />
						</div>
						<div class="grid_3">
							<img src="assets/21/2.jpg" />
						</div>
						<div class="grid_3">
							<img src="assets/21/3.jpg" />
						</div>
						<div class="clear"></div>
						<p><?php echo _("I. The beautiful colors of the Northern Lights"); ?></p>
						<p><?php echo _("II. The ability of a compass needle to point North"); ?></p>
						<p><?php echo _("III. The intense flash of a Lightning strike"); ?></p>
						
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("I"); ?></span><span class="ans"><?php echo _("I. The beautiful colors of the Northern Lights"); ?></span></label></li>
								<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("III"); ?></span><span class="ans"><?php echo _("III. The intense flash of a Lightning strike"); ?></span></label></li>
								<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("I and III"); ?></span><span class="ans"><?php echo _("I. The beautiful colors of the Northern Lights and III. The intense flash of a Lightning strike"); ?></span></label></li>
								<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("I, II, and III"); ?></span><span class="ans"><?php echo _("I. The beautiful colors of the Northern Lights, II. The ability of a compass needle to point North and III. The intense flash of a Lightning strike"); ?></span></label></li>
							<ol>
						</form>
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>

						<div class="grid_3 prefix_1 ml50">
							<img src="assets/21/1.jpg" />
						</div>
						<div class="grid_3">
							<img src="assets/21/2.jpg" />
						</div>
						<div class="grid_3">
							<img src="assets/21/3.jpg" />
						</div>
						<div class="clear"></div>
						<p class="answer"></p>

						<div class="feedback"></div>
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

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span.ans').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  The Northern Lights are caused by charged particles energizing gases in the Earth’s atmosphere, but lightning strikes are also due to charged particles."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  The bright flash from lightning is caused by a electrons flowing between the sky and the ground, but the Northern Lights are also due to charged particles."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it.  Both of these natural wonders are due to the properties of charged particles."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Both lightning and the Northern Lights are caused by charged particles, but the action of a compass needles is due to magnetic fields."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('electric-charge-qq6-a', answer); // Correct answer: 
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
