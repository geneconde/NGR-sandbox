<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'human-impact-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Human Environmental Impact"); ?></title>

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
		h1 { color: #00A7D4; }
		h2 { color: #F84D82; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/11/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #00a18b; }
		.ac-custom label { color: #000; padding-left: 49px; font-size: 21px; }
		.ac-custom svg path { stroke: #00a18b; }
		.ac-custom li { padding: 5px 0; }
		
		#question1 .ac-custom label::before { background-color: #00a18b; height: 20px; width: 20px; margin-top: -11px; }
		#question1 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		#question2 .ac-custom label::before { border: 2px solid #00a18b; height: 34px; width: 34px; margin-top: -18px; }
		#question2 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question1 .ac-custom label::after { background-color: #74BC3D; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 3px; left: 98%; }

		html[dir=rtl] #question2 .ac-custom label::after { border: 2px solid #74BC3D; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question2 .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		
		#answers p { margin: 3px 0; font-size: 22px; }

		<?php if ($language == 'es_ES') : ?>
			h2 { line-height: 28px;}
			p, span { line-height: 29px; }
			li span { display: block; line-height: 22px;}

			@media screen and (max-width: 1250px){
				#answers p { font-size: 20px; line-height: 22px; }
				h1 { font-size: 32px;}
				h2 { line-height: 22px;}
				li span { display: block; line-height: 18px;}
				.ac-custom label { font-size: 20px; }
			}

		<?php endif; ?>	
		
		@media screen and (max-width: 1250px){
			.ac-custom label {
			  color: #000;
			  padding-left: 49px;
			  font-size: 17px;
			}
		}
		@media (max-device-width: 1024px) and (min-device-width: 768px){
			.ac-custom label {
			  color: #000;
			  padding-left: 49px;
			  padding-top: 7px;
			  font-size: 20px;
			}
			#d2label{ position: absolute !important; }

		}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#question2 > div > form > ol > li:nth-child(4) > svg {
				margin-top: 23px;
				<?php if($language=="es_ES"){ ?>
				margin-top: 15px;
				<?php } ?>
			}
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#question2 > div > form > ol > li:nth-child(4) > svg {
				margin-top: 35px;
				<?php if($language=="ar_EG" || $language=="es_ES" || $language=="zh_CN"){ ?>
				margin-top: 24px;
				<?php } ?>
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following <span class='blink'>would not</span> be a good thing to do to help cut down on the use of gasoline that causes CO<sub>2</sub> pollution into the atmosphere?"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("Walk or ride your bike to school instead of having your parents drive you."); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("Take a bus to the mall instead of having your parents drive you."); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("Ask your parents to set up a neighborhood carpool to take other kids in your neighborhood to school instead of everyone driving separately."); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("Ask your parents to get a big 4-wheel drive SUV so you look cool getting dropped off at school."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. To have the <span class='blink'>greatest</span> positive impact on your environment, you could:"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("Make personal choices to change your daily behavior to minimize your impact on the environment."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("Work with your classmates at your school to organize projects to change how your school uses natural resources that impact the environment."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Help to organize a neighborhood drive to recycle plastic soda bottles."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label id="d2label" for="d2"><span><?php echo _("Learn as much as you can about how humans impact the environment globally, but act locally in your community, neighborhood and school to change how your community impacts the environment."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following things could you do that <span class='blink'>would not</span> cut down on pollution of CO<sub>2</sub> into the atmosphere? You could:"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. To have the <span class='blink'>greatest</span> positive impact on your environment, you could:"); ?></h2>

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
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

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
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Not Really - That would be a great thing to walk or ride a bike because you would cut down on CO<sub>2</sub> gas given off from burning gasoline that\'s needed for driving a car to school.'); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – the bus still needs gasoline or diesel fuel but it carries a lot of people instead of just a few like a car does so for each person traveling less fuel is needed per person."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – carpooling is like riding a bus – but on a smaller scale. The car still uses fuel but it carries more people so less fuel is needed for each person."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct – this is NOT a good thing to do to help the environment. Big 4-wheel drive SUVs are cool but they usually use a lot of gasoline that gives off CO<sub>2</sub>."); ?></p>");


			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Yes, making personal choices to change your impact is an important first step but there is an even better way to have the greatest impact."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Yes, organizing projects at your school is a great place to have a bigger positive impact on the environment, but you can think even bigger than that."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Yes, organizing a recycling drive in your neighborhood is a great thing to do for the environment but what about all the other neighborhoods in your community?"); ?></p>");
				
			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("YES!!! Understanding all the ways humans affect the global environment and then using that knowledge to impact your whole community is a very powerful way to have the greatest impact on your environment!!"); ?></p>");


			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1); // Correct answer: A
				saveAnswer('module-qc#-b', answer2); // Correct answer: A

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
				document.location.href = "10.php";
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
