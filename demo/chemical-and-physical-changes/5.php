<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = chemical-and-physical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'chemical-and-physical-changes-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

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
		h1 { color: #916D5D }
		h2 { color: #93648D; margin: 5px 0; }
		
		.wrap { border-color: #FFE0CE; }
		.bg { background-image: url(assets/5/bg.jpg); background-size: 100% 100% !important;}

		.ac-custom input[type="radio"]:checked + label { color: #EB6966; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom svg path { stroke: #EB6966; }

		#answers p {font-size: 24px;}

		#question1 .ac-custom label::before { background-color: #EB6966; height: 20px; width: 20px; margin-top: -11px; }
		#question1 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		#question2 .ac-custom label::before { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; }
		#question2 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question1 .ac-custom label::after { background-color: #EB6966; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 3px; left: 98%; }

		html[dir=rtl] #question2 .ac-custom label::after { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question2 .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px){
			.ac-custom li {padding-bottom: 15px; line-height: 1;}
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			#answers p {font-size: 24px;}
		}
		@media screen and (max-width: 720px){
			.ac-custom li {padding-bottom: 10px; line-height: 1;}
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			#answers p {font-size: 18px;}
		}
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
							<h2 class="grid_12"><?php echo _("Question A. When sugar is added to water to sweeten the lemonade, it:"); ?></h2>
								
							<div class="grid_12">
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("Disappears."); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("Is still sugar but dissolved in the water."); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("Reacts with the water to create a new kind of matter."); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("Reacts with the water to change into something sweet."); ?></span></label></li>
									<ol>
								</form>
							</div>
							
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. When a physical change in matter occurs:"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("The properties of the matter are changed forever."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("The matter can be changed back into its original properties."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("New properties of the matter are created that can't be changed back to the original properties."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("Nothing happens to the properties of the matter."); ?></span></label></li>
									<ol>
								</form>
							</div>

						</div>
												
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
						
						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. When sugar is added to water to sweeten the lemonade, it:"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. When a physical change in matter occurs:"); ?></h2>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());
			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – You can't see the sugar in the lemonade – but it doesn't disappear – it's still in the lemonade making it sweet."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes – the sugar is still sugar but it's dissolved in the water."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – sugar dissolves in water but stays sugar. It doesn't become a new kind of matter."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – The sugar was sweet to begin with. It doesn't become sweet by dissolving in the water. In a physical change, many of the original properties don't change."); ?></p>");

			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - In a physical change, many of the original properties don't change. And if they do change, like liquid water turning into ice, the properties can easily be changed back again."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - The matter can be changed back into its original properties."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – No new properties of matter are created in physical changes that can't be changed back again to the original properties."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – Something can happen to the properties of the matter – like water becoming hard when it freezes. But it can change back to the original water simply by melting."); ?></p>");

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('chemical-and-physical-changes-qc1-a', answer1); // Correct answer: A
				saveAnswer('chemical-and-physical-changes-qc1-b', answer2); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
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
				document.location.href = "4.php#screen2";
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
