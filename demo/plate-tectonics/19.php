<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'plate-tectonics-qq6-a');
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
		
		.wrap { border-color: #C58F70; }
		.bg { background-image: url(assets/19/bg.jpg);overflow: hidden; }
		.fa, .lang-menu a { color: #1AA257; }

		.ac-custom li { padding: 5px 0; }
		.ac-custom input[type="radio"]:checked + label { color: #B5381F; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #B5381F; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #B5381F; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #B5381F; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		
		.small { cursor: pointer; }
		.small img { width: 80%; margin: 0 10%; }
		#grey { position: absolute; background: rgba(0, 0, 0, .8); width: 100%; height: 100%; margin: 0; z-index: 1000; display: none; }
		#grey div div span { z-index: 1001; text-align: center; cursor: pointer; margin-top: 10px; background: #7FAAFF; color: white; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; padding: 5px;}
		
		#diagram { width: 82%; margin: 0 9%; height: 510px; }
		.a-center { text-align: center; }
		

	<?php if ($language == 'ar_EG') : ?>
		@media(max-width: 900px) and (max-height: 623px){
			#diagram .dgram {
			  position: absolute !important;
			  width: 68% !important;
			  left: 97px  !important;
			}

			#grey div div span {
			  position: absolute !important;
			  z-index: 1001 !important;
			  text-align: center !important; 
			  cursor: pointer !important;
			  margin-top: 10px !important;
			  background: #7FAAFF !important;
			  color: white !important;
			  -webkit-border-radius: 5px !important; 
			  -moz-border-radius: 5px !important;
			  border-radius: 5px !important;
			  padding: 5px !important;
			  bottom: -584px !important;
			}
		}
	<?php endif; ?>

	<?php if ($language == 'en_US') : ?>
		img {width: 95%; margin:10px 20px; }
	<?php endif; ?>
	<?php if ($language == 'es_ES') : ?>
		img {width: 95%; margin:10px 20px; }
	<?php endif; ?>
	<?php if ($language == 'ar_EG') : ?>
		.container_12 .grid_2 {width: 15%}
		img {width: 95%; margin:10px 20px; }

	<?php endif; ?>
	<?php if ($language == 'zh_CN') : ?>
		img {width: 95%; margin:10px 20px; }
	<?php endif; ?>

		@media (max-width: 1350px){
			#diagram .dgram {
				width: 85%;
				margin-left: 6%;
				margin-top: 4%;
			}
		}

		@media (max-width: 1250px) {
		  .ac-radio li { padding-top: 1px !important; }
		  .small img {
		    width: 60% !important;
		    margin-left: 20% !important;
		  }
		  .click_here { margin-top: -20px; }
		}

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#diagram { margin-top: 3% !important; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#diagram { margin-top: 12% !important; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12" id="grey"></div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?></h1>
						<h2><?php echo _("The diagram below shows a series of maps that represent how the continental plates have moved during the past 200 million years. Which of the following statements is <span class='blink'>not</span> true based on what you can see on the maps?"); ?></h2>
						
						<div class="click_here">
							<p class="grid_12 a-center"><?php echo _("Click to enlarge image"); ?></p>
							
							<div class="grid_4 prefix_4 suffix_4 small">
								<img src="assets/19/diagram.jpg" />
							</div>
						</div>
						
						<div class="clear"></div>
						
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("200 million years ago, the continents were all bunched up in one large continent called Pangea."); ?></span></label></li>
								<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("The continents have drifted apart for the past 200 million years."); ?></span></label></li>
								<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("The continents will all start to move back together again soon."); ?></span></label></li>
								<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("South America and Africa were once joined together."); ?></span></label></li>
							<ol>
						</form>
						
						<div id="diagram">
							<div><img class="dgram" src="assets/19/diagram.jpg" /></div>
							<div id = "md_closel" class="grid_2 prefix_5 suffix_5 close"><span><?php echo _("Close me!"); ?></span></div>
						</div>
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - The map shows that this is a true statement."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - The map shows that this is a true statement."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - This statement is NOT true. This map doesn't tell us anything about if or when the continents might all move back towards each other again."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No - The map shows that this is a true statement."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('plate-tectonics-qq6-a', answer); // Correct answer: A
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
				document.location.href = "18.php";
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
