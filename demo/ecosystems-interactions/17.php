<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h2 { margin: 0; }
.wrap { border-left: 1px dashed #feda74; border-right: 1px dashed #feda74; }
.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.placeholder { padding: 10px; margin-top: 10px; background: rgba(255, 255, 255, .7); border-radius: 5px; }
#question, #answer { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
#question { overflow: hidden; }
#question ul { width: 63%; margin: 10px auto; overflow: hidden; padding-left: 0; list-style: none; }
#question li { font-size: 20px; text-align: center; float: left; margin: 10px 40px 0 0; border-radius: 5px; }
#question img { display: inline-block; }
#question label { cursor: pointer; }
#question li:nth-child(2), #question li:nth-child(4) { margin-right: 0; }
#question li:nth-child(3), #question li:nth-child(3) { margin-bottom: 0; }
#question span { display: block; text-align: center; width: 240px; }
#question span.blink { display: inline !important; }
#question input[type=checkbox] { display: none; }
#answer { display: none; }
#answer p { text-align: center; margin-bottom: 10px; }
#answer .answer { text-align: center; margin-top: 20px; }
#answer .answer img { margin: 0 7px; display: inline-block; width: 160px; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: sub; }
span.checked { color: #C94F76; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */ filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */ -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); -webkit-filter: grayscale(0%); -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
#buttons .next { display: none; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question ul { width: 75%; }
}
	@media only screen and (max-width: 1250px){
		h1 {
		    padding-top: 33px;
		}
		#question ul {
		    width: 63%;
		    margin: 10px auto;
		    overflow: hidden;
		    padding-left: 0;
		    list-style: none;
		    height: 420px;
		}
		#question img {
		    width: 80%;
		}
	}
	@media only screen and (max-width: 960px){
		#question ul {
		    width: 75%;
		}
	}
	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<div class="placeholder">
					<h2><?php echo _("Click on <span class=\"blink\">all</span> the examples of an ecosystem."); ?></h2>
					<ul>
						<li><label for="a"><img class="grayscale" src="images/17/pond.jpg" alt="Pond"></label><input type="checkbox" id="a"><span><?php echo _("Pond"); ?></span></li>
						<li><label for="b"><img class="grayscale" src="images/17/forest.jpg" alt="Forest"></label><input type="checkbox" id="b"><span><?php echo _("Forest"); ?></span></li>
						<li><label for="c"><img class="grayscale" src="images/17/niche.jpg" alt="Niche"></label><input type="checkbox" id="c"><span><?php echo _("Niche"); ?></span></li>
						<li><label for="d"><img class="grayscale" src="images/17/grassland.jpg" alt="Grassland"></label><input type="checkbox" id="d"><span><?php echo _("Grassland"); ?></span></li>
					</ul>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #2")." - "._("How did I do?"); ?></h1>
				<div class="placeholder">
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Having healthy interactions..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;
	a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d');

	question.find('input[type=checkbox]').on('click', function() {
		var me = $(this);

		if (me.is(':checked')) {
			me.parent().find('img').removeClass().addClass('grayscale-off');
			me.parent().find('span').removeClass().addClass('checked');
		} else {
			me.parent().find('img').removeClass().addClass('grayscale');
			me.parent().find('span').removeClass().addClass('unchecked');
		}

		if (a.is(':checked') == true && 
			b.is(':checked') == true && 
			c.is(':checked') == false &&
			d.is(':checked') == true) {
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! A pond, forest, and grassland are all ecosystems. Different animals live in each ecosystem with their own environment and interactions."); ?></p>');
		} else {
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! A pond, forest, and grassland are all ecosystems. Different animals live in each ecosystem with their own environment and interactions. A niche is not an ecosystem. A niche is how an organism responds to the environment."); ?></p>');
		}
	});

	function save() {
		var ans;

		if (a.is(':checked')) {
			ans = 'A';
			answer.find('.answer').append('<img src="images/17/pond.jpg" alt="Pond" title="<?php echo _("Pond"); ?>" />');
		} else if ( ! a.is(':checked')) {
			answer.find('.answer').find('img[alt="Pond"]').remove();
		}

		if (b.is(':checked')) {
			ans = 'B';
			answer.find('.answer').append('<img src="images/17/forest.jpg" alt="Forest" title="<?php echo _("Forest"); ?>" />');
		} else if ( ! b.is(':checked')) {
			answer.find('.answer').find('img[alt="Forest"]').remove();
		}

		if (c.is(':checked')) {
			ans = 'C';
			answer.find('.answer').append('<img src="images/17/niche.jpg" alt="Niche" title="<?php echo _("Niche"); ?>" />');
		} else if ( ! c.is(':checked')) {
			answer.find('.answer').find('img[alt="Niche"]').remove();
		}

		if (d.is(':checked')) {
			ans = 'D';
			answer.find('.answer').append('<img src="images/17/grassland.jpg" alt="Grassland" title="<?php echo _("Grassland"); ?>" />');
		} else if ( ! d.is(':checked')) {
			answer.find('.answer').find('img[alt="Grassland"]').remove();
		}

		if (a.is(':checked') && b.is(':checked')) {
			ans = 'A,B';
		} 
		if (a.is(':checked') && c.is(':checked')) {
			ans = 'A,C';
		}
		if (a.is(':checked') && d.is(':checked')) {
			ans = 'A,D';
		}
		if (b.is(':checked') && c.is(':checked')) {
			ans = 'B,C'; 
		}
		if (b.is(':checked') && d.is(':checked')) {
			ans = 'B,D';
		}
		if (c.is(':checked') && d.is(':checked')) {
			ans = 'C,D';
		}
		if (a.is(':checked') && b.is(':checked') && c.is(':checked')) {
			ans = 'A,B,C';
		}
		if (a.is(':checked') && b.is(':checked') && d.is(':checked')) {
			ans = 'A,B,D';
		}
		if (b.is(':checked') && c.is(':checked') && d.is(':checked')) {
			ans = 'B,C,D';
		}
		if (a.is(':checked') && c.is(':checked') && d.is(':checked')) {
			ans = 'A,C,D';
		}
		if (a.is(':checked') && b.is(':checked') && c.is(':checked') && d.is(':checked')) {
			ans = 'A,B,C,D';
		}

		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qq2-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "16.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ answer.find('.answer').html(''); question.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('.grayscale-off').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			question.fadeOut(function(){ save(); answer.fadeIn(); }); 
			check.fadeOut(function() { next.fadeIn(); });
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
