<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = chemical-and-physical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'chemical-and-physical-changes-qc2-a');
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
		h1 { color: #916D5D; }
		h2 { color: #93648D; }
		.red_blink {color: ;}
		
		.wrap { border-color: #FFE0CE; }
		.bg { background-image: url(assets/5/bg.jpg); overflow: hidden;  background-size: 100% 100% !important;}
		
		#question1 input[type="radio"] { display: none; }
		#question1 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question1 input[type="radio"]:checked + label img { border: 4px solid #EB6966; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; } /* Change border-color */
		#question1 input[type="radio"]:checked + label span { color: #EB6966; } 
		#question1 div span { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; } /* Change color */

		.ac-custom input[type="radio"]:checked + label { color: #EB6966; } 
		.ac-custom label { color: #000; padding-left: 49px; } 
		.ac-custom label::before { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; } 
		.ac-custom svg path { stroke: #EB6966; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; } 
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer1 p { text-align: left; }

		html[dir=rtl] #answer1 p { text-align: right; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following properties of matter is most important in causing matter to change its state?"); ?></h2>
													
							<div class="grid_3">
								<input type="radio" id="a1" name="q1">
								<label for="a1"><img src="assets/7/a.jpg"><span><?php echo _("Size"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b1" name="q1">
								<label for="b1"><img src="assets/7/b.jpg"><span><?php echo _("Temperature"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="c1" name="q1">
								<label for="c1"><img src="assets/7/c.jpg"><span><?php echo _("Shape"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d1" name="q1">
								<label for="d1"><img src="assets/7/d.jpg"><span><?php echo _("Color"); ?></span></label>
							</div>

							<div class="clear"></div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. Which of the following is <span class='blink'>NOT</span> an example of matter changing its state?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Any solid substance turning into a liquid"); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Liquid water freezing"); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Water evaporating"); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("Liquid water getting cold"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following properties of matter is most important in causing matter to change its state?"); ?></h2>

							<div class="grid_2 image"></div>

							<div class="grid_10">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Which of the following is <span class='blink'>NOT</span> an example of matter changing its state?"); ?></h2>

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
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing state of matter..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '',
			ans='';

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				image = $(this).parent().find('img').clone(),
				text = $(this).parent().find('span').text();

			
			if (id == 'a1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really – the size of a substance may change because of a change in state – like liquid water expands and gets bigger when it freezes – but that doesn't cause the water to freeze and change state – it's the result of water freezing."); ?></p>");
				
				answer1 = 'A';
				ans = text.toLowerCase();
			}

			if (id == 'b1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes – The temperature of any substance normally is the cause of most common substances changing state under normal conditions. For instance, when you cool liquid water to below its freezing point, it changes state to become solid ice."); ?></p>");

				answer1 = 'B';
				ans = text.toLowerCase();
			}

			if (id == 'c1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – The shape of a substance doesn't cause it to change states."); ?></p>");

				answer1 = 'C';
				ans = text.toLowerCase();
			}

			if (id == 'd1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – The color of a substance doesn’t cause it to change states. But if a substance is dark-colored, it may absorb sunlight more than if it was a light color. This might heat it up and cause it to melt. But it’s still the temperature increase that causes the melting."); ?></p>");

				answer1 = 'D';
				ans = text.toLowerCase();
			}

			if (id == 'a2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – substance turning from a solid to a liquid is called melting – which is a change of state."); ?></p>");

				answer2 = 'A';
			}

			if (id == 'b2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – water freezing – going from a liquid to a solid - is a change of state."); ?></p>");

				answer2 = 'B';
			}

			if (id == 'c2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – water evaporating – going from a liquid to a gas - is a change of state."); ?></p>");

				answer2 = 'C';
			}

			if (id == 'd2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct – Liquid water getting colder – without freezing is not a change of state. It starts out liquid and is still liquid after it gets colder, so there's no change of state."); ?></p>");

				answer2 = 'D';
			}
		});

		function save() {
				console.log(ans);
			if (answered == 0) {
				saveAnswer('chemical-and-physical-changes-qc2-a', ans);
				saveAnswer('chemical-and-physical-changes-qc2-b', answer2);

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('.checkanswer').fadeOut(function() { $('.next').fadeIn(); });

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();
					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "6.php#screen2";
			} else if ($('#answers').is(':visible')) {
				$('.next').fadeOut(function() { $('.checkanswer').fadeIn(); });

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
