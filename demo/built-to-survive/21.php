<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES"){ ?> dir="es" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Built to Survive"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">
	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/bjqs.css">
	<link rel="stylesheet" href="styles/bjqsdemo.css">
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	
	<style>
		h1 { color: #4F8AD3; }
		p { font-size: 24px; }
		.bg { background-image: url(images/21/bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
		img.back-toggle-answer, #buttons .next { display: none; }
		#choices { text-align: center; }
		#choices ul {
			list-style: none;
			padding: 0;
			margin: 0 auto;
			max-width: 800px;
			position: relative;
			z-index: 6;
		}
		#choices li {
			margin: 0 auto;
			padding: 5px 0;
			position: relative;
			text-align: left;
		}
		#choices label {
			display: inline-block;
			position: relative;
			font-size: 24px;
			padding: 0 0 0 28px;
			vertical-align: top;
			color: rgba(0,0,0,.9);
			cursor: pointer;
			-webkit-transition: color 0.3s;
			transition: color 0.3s;
		}
		#choices input[type="radio"],
		#choices label::before{
			width: 20px;
			height: 20px;
			top: 50%;
			left: 0;
			margin-top: -12px;
			position: absolute;
			cursor: pointer;
		}
		#choices input[type="radio"] {
			opacity: 0;
			-webkit-appearance: none;
			display: inline-block;
			vertical-align: middle;
			z-index: 100;
		}
		#choices label::before {
			content: '';
			background: url(images/21/21.png) left top no-repeat;
			width: 20px;
			height: 20px;
			-webkit-transition: opacity 0.3s;
			transition: opacity 0.3s;
		}
		#choices input[type="radio"]:checked + label { color: #008080; }
		#choices input[type="radio"]:checked + label::before { background-position: left bottom; }

		#answer { display: none; text-align: center; }
		
		#answer .feedback { overflow: hidden; }
		#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
		#answer img { display: inline-block; }
		#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
		#banner-fade { margin: 0 auto; padding: 15px 0px; }
		#banner-fade p { font-size: 18px; padding: 10px 40px; }
		#banner-fade img { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; }
		p.bjqs-caption { background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.56); width: 450px; color:wheat;}
		<?php if($language == "es_ES") { ?>
		#choices label { font-size:21px; }
	<?php } ?>

	html[dir="rtl"] #answer p { text-align: center; }
	html[dir="rtl"] #choices li { text-align: right; }
	html[dir="rtl"] #choices label { padding: 0 28px 0 0; }
	html[dir="rtl"] #choices input[type="radio"], #choices label::before { right: 0; }
	html[dir="rtl"] ul.bjqs-controls.v-centered li.bjqs-next a { left: 0; right: auto; }
	html[dir="rtl"] ul.bjqs-controls.v-centered li.bjqs-prev a { right: 0; left: auto; }
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
		#choices input[type="radio"], #choices label::before { margin-top: -15px; }
		ul.bjqs, ul.bjqs li, ul.bjqs li img { height: 220px !important; }
		#banner-fade { height: 220px !important; padding: 0; }
	}	
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("Look at the pictures below and read the captions to each one. Then choose the statement that best explains the human adaptation and survival skills related to the images."); ?></h2>
				
				<div id="banner-fade">
					<ul class="bjqs">
					  <li><img src="images/21/1.jpg" title="<?php echo _("High altitude environments have certain features that make it difficult for people to stay there for long periods of time: there is a low concentration of available oxygen, a lot of radiation from the sun, and the temperature fluctuates every day to name a few."); ?>"></li>
					  <li><img src="images/21/2.jpg" title="<?php echo _("This fighter pilot is adapting to high altitudes with technology."); ?>"></li>
					  <li><img src="images/21/3.jpg" title="<?php echo _("More than 140 million people live in high altitude environments. The chemicals in the blood and respiration system of natives of Tibet, the Andes, and Ethiopia have changed over generations. Some natives of Tibet have been living in these high altitudes for a long period of time and can survive these conditions due to genetic adaptation."); ?>"></li>
					</ul>
				</div>
				<div id="choices">
					<ul>						
						<li>
							<input id="a" name="q" type="radio">
							<label for="a">A. <?php echo _("Man-made technology eliminates the need for biological adaptations for specific groups."); ?></label>
						</li>
						<li>
							<input id="b" name="q" type="radio">
							<label for="b">B. <?php echo _("High altitude environments have too many health risks for humans to survive in."); ?></label>
						</li>
						<li>
							<input id="c" name="q" type="radio">
							<label for="c">C. <?php echo _("Genetic adaptation is better than using technology for temporary adaptation."); ?></label>
						</li>
						<li>
							<input id="d" name="q" type="radio">
							<label for="d">D. <?php echo _("Humans survive in difficult environments through biological and cultural adaptations."); ?></label>
						</li>
					</ul>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div id="answer1"></div>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're a survivor!"); ?></strong></section></section>
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jquery.blink.min.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/save-answer.js"></script>
	<script src="scripts/bjqs-1.3.js"></script>
    <script class="secret-source">
	jQuery(document).ready(function($) {
	  $('#banner-fade').bjqs({
		height      : 220,
		width       : 530,
		responsive  : true
	  });
	});
    </script>
	<script>
		var back = $('a.back-toggle'),
			next = $('a.next-toggle'),
			check = $('a.check-toggle'),
			question = $('#question'),
			answer = $('#answer'),
			answered = 1,
			nullAnswer = false;
			
		question.find('input[type=radio]').on('click', function() {
			var radio = $(this);
			if (radio.attr('id') == 'a') {
				answer.find('#answer1').html('<p>A. <?php echo _("Man-made technology eliminates the need for biological adaptations for specific groups."); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png" id="answer-icon" alt="Wrong" class="img-align" /><?php echo _("No, cultural adaptation such as using technology has provided temporary survival aid in this case. Over a long period of time, the biological adaptations took place. Neither one is better, they both help humans survive."); ?></p>');
			}
			if (radio.attr('id') == 'b') {
				answer.find('#answer1').html('<p>B. <?php echo _("High altitude environments have too many health risks for humans to survive in."); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png" id="answer-icon" alt="Correct" class="img-align" /><?php echo _("No, the beauty is that with all the health hazards, humans have adapted and live in these areas with the help of genetic adaptation."); ?></p>');
			}
			if (radio.attr('id') == 'c') {
				answer.find('#answer1').html('<p>C. <?php echo _("Genetic adaptation is better than using technology for temporary adaptation."); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png" id="answer-icon" alt="Wrong" class="img-align" /><?php echo _("No, the biological adaptations took place over generations to form a permanent adaptation. The cultural adaptation such as using technology has provided temporary survival aid in this case. Neither one is better, they both help humans survive."); ?></p>');
			}
			if (radio.attr('id') == 'd') {
				answer.find('#answer1').html('<p>D. <?php echo _("Humans survive in difficult environments through biological and cultural adaptations."); ?></p>');
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png" id="answer-icon" alt="Wrong" /><?php echo _("Correct. The images show how humans adapt to survive in high altitude areas through permanent genetic adaptation and temporary use of technology."); ?></p>');
			}
		});
		function save() {
			var answer,
				a = $('#a'),
				b = $('#b'),
				c = $('#c'),
				d = $('#d');
			if (a.is(':checked')) answer = 'A';
			if (b.is(':checked')) answer = 'B';
			if (c.is(':checked')) answer = 'C';
			if (d.is(':checked')) answer = 'D';
			if (answered == 0) {
				saveAnswer('built-to-survive-qq6-a', answer);
				answered = 1;
			}
		}
		check.on('click', function(e) {
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _('Please select your answer.'); ?>");
				nullAnswer = false;
			} else {	
				check.fadeOut(function() { next.fadeIn(); });
				question.fadeOut(function() {
					save();
					answer.fadeIn();
				});
			}
		});
		back.on('click', function() {
			if(question.is(':visible')) {
				document.location.href = "20.php";
			} else {
				next.fadeOut(function() { check.fadeIn(); });
				answer.fadeOut(function() {
					question.fadeIn();
				});
			}
		});
		
		function checkNull() {
			if(!$('#a').is(':checked') && !$('#b').is(':checked') && !$('#c').is(':checked') && !$('#d').is(':checked')) nullAnswer = true;
		}
	</script>
	<script src="scripts/jquery.secret-source.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
