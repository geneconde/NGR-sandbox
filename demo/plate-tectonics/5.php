<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'plate-tectonics-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Plate Tectonics"); ?></title>

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
		h1 { color: #9A663E; }
		h2 { color: #196B92; }
		
		.wrap { border-color: #C79270; }
		.bg { background-image: url(assets/5/bg.jpg); overflow: hidden;}

		.ac-custom input[type="radio"]:checked + label { color: #B5381F; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom svg path { stroke: #B5381F; }

		#question1 .ac-custom label::before { background-color: #B5381F; height: 20px; width: 20px; margin-top: -11px; }
		#question1 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		#question2 .ac-custom label::before { border: 2px solid #B5381F; height: 34px; width: 34px; margin-top: -18px; }
		#question2 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		#question3 .ac-custom label::before { background-color: #B5381F; height: 20px; width: 20px; margin-top: -11px; }
		#question3 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }
		
		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question1 .ac-custom label::after { background-color: #B5381F; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 3px; left: 98%; }

		html[dir=rtl] #question2 .ac-custom label::after { border: 2px solid #B5381F; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question2 .ac-custom svg { right: 9px; left: 98%; }

		html[dir=rtl] #question3 .ac-custom label::after { background-color: #B5381F; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] #question3 .ac-custom svg { right: 3px; left: 98%; }

		#buttons .next { display: none; }
		
		#answers p { margin: 2px 0; }
		
		.small { cursor: pointer; height: 170px; background: url(assets/5/map.jpg); }
		.small p { text-align: center; }
		.small img { width: 105px; margin: 0 77px; }
		#grey { position: absolute; background: rgba(0, 0, 0, .8); width: 100%; height: 100%; margin: 0; z-index: 1000; display: none; }
		#grey > div { margin-top: 2%; }
		#grey .close { margin-top: 15px; text-align: center; }
		#grey div div span { z-index: 1001; text-align: center; cursor: pointer; margin-top: 10px; background: #7FAAFF; color: white; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; padding: 5px;}
		
		#diagram { width: 90%; margin: 0 5%; height: 510px; }
		.ac-custom li {padding: .4em 0;}
		.fa, .lang-menu a { color: #1AA257; }
		.closepop { margin-left: 10px; }
		<?php if ($language == 'es_ES'){
			echo _("p, h2, li {  line-height: 19px;}");
			}

		?>
		@media screen and (max-width: 1250px){
			#diagram img {
				width: 65%;
  				margin-left: 10px;
  				margin-left: 17%;
			}
		}
		@media (max-width: 960px){
			body, h2 {
		  		font-size: 18px !important;
			}
			#diagram img {
				width: 95%;
				margin-left: 0px;
			}
		}

		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			#diagram { margin-top: 14% !important; text-align: center; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#diagram img { margin-left: 0; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12" id="grey"></div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. On the map below, most of the biggest river systems occur in the:"); ?></h2>
														
							<div class="grid_6">
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("Rocky Mountains"); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("Great Plains"); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("Appalachian Mountains"); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("Coastal Plain"); ?></span></label></li>
									<ol>
								</form>
							</div>
							
							<div class="grid_4 small">
								<p><?php echo _("Click to enlarge image"); ?></p>
								<img src="assets/5/glass.png" />
							</div>
							
							<div id="diagram">
								<div class="grid_12"><img src="assets/5/diagram.jpg" /></div>
								<div class="close"><span class="closepop"><?php echo _("Close me!"); ?></span></div>
							</div>
						</div>
						
						<div class="clear"></div>
						
						<div id="question2" class="grid_6">
							<h2><?php echo _("Question B. Maps can show all of the following except:"); ?></h2>

							<div class="clear"></div>
							
							<div>
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("How everybody feels today."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("Where there are rivers and lakes."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Streets in your town or city."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("How long the coastline is."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
						
						<div id="question3" class="grid_6">
							<h2><?php echo _("Question C. Maps can be best used to help you:"); ?></h2>

							<div class="clear"></div>
							
							<div>
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a3" name="q3" type="radio" value="A"><label for="a3"><span><?php echo _("Plan a route to travel."); ?></span></label></li>
										<li><input id="b3" name="q3" type="radio" value="B"><label for="b3"><span><?php echo _("Decide where the nicest people live."); ?></span></label></li>
										<li><input id="c3" name="q3" type="radio" value="C"><label for="c3"><span><?php echo _("Plan what to do when you grow up."); ?></span></label></li>
										<li><input id="d3" name="q3" type="radio" value="D"><label for="d3"><span><?php echo _("All of the above."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
						
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. On the map below, most of the biggest river systems occur in the:"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Maps can show all of the following except:"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>
						
						<div id="answer3">
							<h2 class="grid_12"><?php echo _("Question C. Maps can be best used to help you:"); ?></h2>

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
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = ''
			answer3 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());
			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());
			$('#answer3 .answer').html($('#question3 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();
			answer3 = $('#question3 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - It's difficult to find any major rivers on the map in the Rocky Mountains."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - You can see that the Great Plains area of the Midwest has several major river systems including the Mississippi, Missouri, and Ohio River systems."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - It's difficult to find any major rivers on the map in the Appalachian Mountains."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - There are some major rivers in the Coastal Plain area but they are actually the rivers from the Great Plains emptying into the sea."); ?></p>");

			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - Maps don't show how people feel."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - Maps can show where there are rivers and lakes."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - Maps can show where there are streets and rivers in your town."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - Maps can show how long the coastline is."); ?></p>");
				
			if (answer3 == 'A')
				$('#answer3 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - You can look at a map to see roads and towns that help you plan a route to get where you want to go."); ?></p>");

			if (answer3 == 'B')
				$('#answer3 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - Nice people live everywhere, so there are no maps to decide where to find them."); ?></p>");

			if (answer3 == 'C')
				$('#answer3 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - Planning what to do when you grow up depends on what you're interested in and what you're good at. Maps can't help you with that."); ?></p>");

			if (answer3 == 'D')
				$('#answer3 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - Planning what to do when you grow up depends on what you're interested in and what you're good at. Maps can't help you with that. And, nice people live everywhere so there are no maps to decide where to find them."); ?></p>");

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('plate-tectonics-qc1-a', answer1); // Correct answer: B
				saveAnswer('plate-tectonics-qc1-b', answer2); // Correct answer: A
				saveAnswer('plate-tectonics-qc1-c', answer3); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 3) {
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

	<script>
		
		$('#grey').append($('#diagram'));
		$('.small').click(function() {
			$('#grey').fadeIn();
		});
		$('.close').click(function() {
			$('#grey').fadeOut();
		});
		
	</script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
