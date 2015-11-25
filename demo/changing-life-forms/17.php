<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { z-index: 1 !important; }
.bg { z-index: 1 !important; }
.wrap { border-color: #afa583; }
.bg { background-image: url(images/17/bg.jpg); }

#question ul { list-style: none; margin-left: 90px; padding: 0; }
#question li { display: block; position: relative; font-size: 24px; padding: 0 0 10px 0; vertical-align: top; color: rgba(0,0,0,.9); }
#question li:last-child { padding-bottom: 0; }
#box { text-align: center; margin-top: 0; }
#box .info { padding: 20px 0; color: #971714; text-align: center; }
#hexaflip { margin: 0 0 15px 330px; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border-radius: 0; margin-bottom: 10px; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }
#buttons .next { display: none; }
img.next-toggle { display: none; }

#question h2:nth-child(4) { margin:0; }
html[dir='rtl'] #hexaflip { margin: 0 auto; }
html[dir='rtl'] #question ul {margin-right: 90px;}
    <?php if ($language == 'es_ES') : ?>
    <?php endif; ?>        
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, div#assignment  {
		    padding-top: 50px;
		}
		#question li {
		    font-size: 22px;
		    line-height: 23px;
		}
		#box .info { padding: 0 0; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4, div#assignment {
		    padding-top: 60px !important;
		}
   	}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Natural selection does <span class='blink'>not</span> involve..."); ?></h2>
				<ul>						
						<li>A. <?php echo _("Some types of variation are inherited."); ?></li>
						<li>B. <?php echo _("People have carefully chosen horses to breed for special traits."); ?></li>
						<li>C. <?php echo _("There is a competition for survival."); ?></li>
						<li>D. <?php echo _("Some traits make an organism especially able to survive in its habitat."); ?></li>
					</ul>
					<!-- <h2>Rotate or flip the 3D box below either up or down to set your answer.</h2> -->
					<div id="box">
						<p class="info"><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>
						<div id="hexaflip"></div>
					</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying natural selection..."); ?></strong></section></section>
	<script src="scripts/hexaflip.js"></script>
	<script>
	var hexa,
		images = [
			'./images/others/a.png',
			'./images/others/b.png',
			'./images/others/c.png',
			'./images/others/d.png'
		];

	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	function save() {
		var ans = null;
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("Some types of variation are inherited."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Inherited variation is a key part of natural selection."); ?></p>');
			ans = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("People have carefully chosen horses to breed for special traits."); ?></span>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Right! Choosing which animals breed takes nature out of the selection."); ?></p>');
			ans = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("There is a competition for survival."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Competition is very important in natural selection."); ?></p>');
			ans = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("Some traits make an organism especially able to survive in its habitat."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Survival and reproduction are key in natural selection."); ?></p>');
			ans = 'D';
		}

		if (answered == 0) {
			saveAnswer('changing-life-forms-qq2-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "16.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		check.fadeOut(function() { next.fadeIn(); });
		question.fadeOut(function(){
			answer.fadeIn();
			save();
			window.location.hash = '#answer';
		}); 
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
