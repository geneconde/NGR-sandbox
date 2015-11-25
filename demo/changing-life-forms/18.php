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
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { z-index: 1 !important; }
h2 { margin-bottom:5px; }
.wrap { border-color: #afa583; }
.bg { background-image: url(images/18/bg.jpg); }

#question ul { width: 80%; margin: 20px auto 0; overflow: hidden; padding-left: 0; list-style: none; }
#question li { font-size: 22px; text-align: center; float: left; margin: 0px 20px 5px 20px; }
#question li:nth-child(3), #question li:nth-child(4) { margin-bottom: 0; }
#question img { display: inline-block; width: 300px; border-radius: 5px; margin-bottom: 0px; }
#question label { cursor: pointer; }
#question li:nth-child(2), #question li:nth-child(4) { margin-right: 0; }
#question li:nth-child(3), #question li:nth-child(3) { margin-bottom: 0; }
#question span { display: block; text-align: center; width: 300px; }
#question span.blink { display: inline !important; }
#question input[type=radio] { display: none; }
#buttons .next { display: none; }
#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 4px solid #b8b491; margin-bottom: 10px; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }

img.grayscale { border: 4px solid #b8b491; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { border: 4px solid #17a761; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
img.next-toggle { display: none; }

<?php if($language == "es_ES") { ?>
	#question img { width: 270px; }
	#question li { font-size: 20px; }
<?php } ?>

html[dir='rtl'] #question li { margin: 0 0 20px 20px; float: right; }
html[dir='rtl'] #question li:nth-child(2), html[dir='rtl'] #question li:nth-child(4) { margin-left: 0; }
	@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
		#question img {
			display: inline-block;
			width: 245px;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		html[dir='rtl'] #question li {
			margin: 0 0 15px 3px;
			float: right;
			width: 48%;
		}
		 #question li {
			margin: 0 0 15px 3px;
			float: right;
			width: 48%;
		}
		#question ul {
			width: 100%;
			margin: 20px auto 0;
			overflow: hidden;
			padding-left: 0;
			list-style: none;
		}
		#question span {
			display: block;
			text-align: center;
			width: 100%;
		}
	}
    <?php if ($language == 'es_ES') : ?>
    <?php endif; ?>        
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, div#assignment  { padding-top: 50px; }
		#question img { width: 210px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4, div#assignment { padding-top: 60px !important; }
    }
    @media only screen and (max-width: 960px){
	    #question ul {	width: 89%; }
		#question span {
		    display: block;
		    text-align: center;
		    width: 314px;
		}
		#question li {
		    font-size: 20px;
		    text-align: center;
		    float: left;
		    margin: 0px 20px 5px 20px;
		}
	}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Which of the following environmental changes is least likely to lead to evolutionary change?"); ?></h2>
				<ul>
						<li>
							<label for="a"><img class="grayscale" src="images/18/a.jpg"></label>
							<input type="radio" id="a" name="q">
							<span><?php echo _("Eruption of a supervolcano on an island."); ?></span>
						</li>
						<li>
							<label for="b"><img class="grayscale" src="images/18/b.jpg"></label>
							<input type="radio" id="b" name="q">
							<span><?php echo _("A large meteorite impact."); ?></span>
						</li>
						<li>
							<label for="c"><img class="grayscale" src="images/18/c.jpg"></label>
							<input type="radio" id="c" name="q">
							<span><?php echo _("A small group of people walking across a prairie."); ?></span>
						</li>
						<li>
							<label for="d"><img class="grayscale" src="images/18/d.jpg"></label>
							<input type="radio" id="d" name="q">
							<span><?php echo _("The climate warming over a short period of time."); ?></span>
						</li>
					</ul>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Remembering Darwin's idea..."); ?></strong></section></section>

	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1,
	a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d');

	a.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/18/a.jpg"><span><?php echo _("Eruption of a supervolcano on an island."); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. This actually could lead to some major changes."); ?></p>');
		ans = 'A';
	});

	b.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/18/b.jpg"><span><?php echo _("A large meteorite impact."); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Large meteorite impacts have had profound impacts in the past."); ?></p>');
		ans = 'B';
	});

	c.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/18/c.jpg"><span><?php echo _("A small group of people walking across a prairie."); ?></span>');
		answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Simply walking through an area is likely to be harmless."); ?></p>');
		ans = 'C';
	});

	d.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/18/d.jpg"><span><?php echo _("The climate warming over a short period of time."); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Climate change has been shown to cause significant changes."); ?></p>');
		ans = 'D';
	});

	function save() {
		if (answered == 0) {
			saveAnswer('changing-life-forms-qq3-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "17.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){
				answer.fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
