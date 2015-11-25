<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
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
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>

<style>
body, html { overflow: hidden; }
h1 { color: #000; }
h2 { margin:0; }
.wrap { border-color: #9B6D44; }
.bg { background-image: url(images/18/bg.jpg); }

#reset { text-align: center; margin: 10px auto; background: #FFAA55; padding: 5px 10px; color: #fff; display: block; border-radius: 5px; width: 100px; position: relative; bottom: 90px; }
#reset:hover { background: #FFC52E; cursor: pointer; }

#terms { margin: 10px auto 0; width: 780px; height: 135px; cursor: pointer; }
#terms p { float: left; background: #FFD47F; margin: 0 52px; text-align: center; padding: 5px; width: 155px; border-radius: 5px; bottom:0; z-index: 99999; }
#terms p img { width: 100px; margin: 0 20px; }
#terms p span { font-size: 20px; }
.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

.choices { margin: 0; width: 850px; }
.choices div div { margin: 0; height: 150px; width: 850px; float: none; padding: 20px; }
.choices div div p { margin-left: 260px; }
.choices div div img { height: 100px; float: left; }
.choices div div span { margin: 35px 10px; float: left; }
.a { background-image: url(images/18/Top.png); position: relative; z-index: 5; }
.b { background-image: url(images/18/Middle.png); position: relative; z-index: 5555; padding-top: 30px !important; top: -50px; }
.c { background-image: url(images/18/Bottom.png); position: relative; z-index: 5; padding-top: 40px !important; top: -92px; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; margin-top: -90px; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }
<?php if ($language == 'es_ES') : ?>
	h2 { font-size: 22px; }
	#terms p span { font-size: 17px; }
<?php endif; ?>
<?php if ($language == 'zh_CN') : ?>
	h2 { font-size: 22px; }
	#terms p span { font-size: 17px; margin: 5px auto 0;}
	#reset { font-size: 17px; margin: 5px auto; }
<?php endif; ?>
html[dir="rtl"] h2 { font-size: 22px; }
html[dir="rtl"] #terms p {margin: 0 5px;width: 250px;}
html[dir="rtl"] #terms p img {margin: 0 62px;}
html[dir="rtl"] #reset {width: 130px;font-size: 20px;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("Drag each of the fossils to where it would most likely be found in the rock layer diagram."); ?></h2>
				
				<div id="terms" class="clearfix">
					<p id="200" class="grab term"> <img src="images/18/a.jpg" /> <span><?php echo _("200 million years"); ?></span></p>
					<p id="270" class="grab term"> <img src="images/18/b.jpg" /> <span><?php echo _("270 million years"); ?></span></p>
					<p id="110" class="grab term"> <img src="images/18/c.jpg" /> <span><?php echo _("110 million years"); ?></span></p>
				</div>
				
				<div class="clear"></div>
				
				<div class="choices clearfix">
					<div>
						<div class="a"></div>
					</div>
					<div>
						<div class="b"></div>
					</div>
					<div>
						<div class="c"></div>
					</div>
				</div>


				<p id="reset"><?php echo _("Reset"); ?></p>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>

				<div class="choices clearfix">
					<div>
						<div class="a"></div>
					</div>
					<div>
						<div class="b"></div>
					</div>
					<div>
						<div class="c"></div>
					</div>
				</div>

				<div class="feedback center"></div>
				
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Different layers of rocks"); ?></strong></section></section>

	<script>
	var ans = '',
	term = '',
	checkAnswer = 0,
	qa = $('#question .a'),
	qb = $('#question .b'),
	qc = $('#question .c'),
	aa = $('#answer .a'),
	ab = $('#answer .b'),
	ac = $('#answer .c'),
	answered = 0;
	
	$('#terms p').draggable({ revert: true, revertDuration: 0, containment: "#question", scroll: true });

	$('#terms p').each(function() {
		var p = $(this);
		
		p.mousedown(function() { p.removeClass('grab'); p.addClass('grabbing'); });
		p.mouseup(function() { p.removeClass('grabbing'); p.addClass('grab'); });
	});
	
	$('.choices div div').each(function() {
		var me = $(this);

		me.droppable({
			accept: '.term',
			drop: function (event, ui) { 
				var draggable = ui.draggable;
				var id = draggable.attr("id");
				
				if (id == "200") {
					$('#200').detach().draggable({ disabled: true }).appendTo(me); 
				} else if (id == "270") {
					$('#270').detach().draggable({ disabled: true }).appendTo(me); 
				} else if (id == "110") {
					$('#110').detach().draggable({ disabled: true }).appendTo(me);
				}

				me.droppable({ disabled: true });
			}
		});
	});
	
	$('#reset').on('click', function() {
		term = question.find('.term').detach().draggable({ disabled: false });

		$('#terms').html(term);

		$('#question .choices div div').each(function() {
			var me = $(this);
			me.droppable({ disabled: false });
			//location.reload();
		});
	});
	
	
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	function save() {
		aa.html(qa.html());
		ab.html(qb.html());
		ac.html(qc.html());

		if (qa.find('p').attr("id") == 110 && qb.find('p').attr("id") == 200 && qc.find('p').attr("id") == 270 ) {
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Great job! You used an important geologic principle about rock layers to show where these fossils might be found underground. The oldest fossil will probably be found in the rock layer farthest from the surface. The youngest fossil will probably be found in the layer closest to the surface."); ?></p>'); 
		} else {
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. The oldest fossil will probably be found in the rock layer farthest from the surface. The youngest fossil will probably be found in the layer closest to the surface."); ?></p>'); 
		}
		if (answered == 0) {
			answered = 1;
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
		checkAnswer = 1;

		$('#question .choices div div').each(function() {
			var me = $(this);
			if (me.html() == '') checkAnswer = 0;
		});

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			save();
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){ answer.fadeIn(); });
		}
	});
	</script>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
