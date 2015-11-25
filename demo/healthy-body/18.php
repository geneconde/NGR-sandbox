<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'healthy-body';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?> >
<head>
<title><?php echo _("Healthy Body"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h2 { width: 640px; }
.wrap { border-left: 1px dashed #ffdf70; border-right: 1px dashed #ffdf70; }
.bg { background: url('images/18/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question { text-align: center; overflow: hidden; }
.choices { margin: 0 auto; width: 790px; }
.choices div { float: left; margin-right: 20px; }
.choices div:last-child { margin-right: 0; }
.choices div div { margin-top: 20px; height: 40px; border-radius: 5px; width: 180px; float: none; border: 1px solid #ec6b76; }
#terms { margin: 50px auto 0; width: 480px; }
#terms p { float: left; background: #c8e19d; border-radius: 5px; margin-right: 20px; text-align: center; padding: 5px 15px; }
#terms p:last-child { margin-right: 0; }
#reset { text-align: center; margin-top: 30px; background: #ec6b76; padding: 5px 10px; color: #fff; display: inline-block; border-radius: 5px; }
#reset:hover { background: #d3616b; cursor: pointer; }
.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }
#answer { display: none; }
#answer .choices { margin: 20px auto; }
#answer p { text-align: center; cursor: default !important; }
#answer .answer img { border: 4px solid #e6def3; margin-top: 10px; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
img.next-toggle { display: none; }
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	#terms { width: 550px; }
	p#body-system { font-size: 20px; height: 30px; }
<?php } ?>
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
.choices img { width: 61%; }
.choices { width: 100% !important;}
.choices div { margin-right: 0px !important; }
.choices div div { width: 90% !important;}
}
@media only screen and  (min-device-width: 1024px) {
.choices { width: 93% !important;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("Look at the table below and fill in the blanks by dragging the terms under the illustrations."); ?></h2>

				<div class="choices clearfix">
					<div>
						<img src="images/18/a.png">
						<div class="a"></div>
					</div>
					<div>
						<img src="images/18/b.png">
						<div class="b"></div>
					</div>
					<div>
						<img src="images/18/c.png">
						<div class="c"></div>
					</div>
					<div>
						<img src="images/18/d.png">
						<div class="d"></div>
					</div>
				</div>

				<div id="terms" class="clearfix">
					<p id="cell" class="grab term" data-value="Cell"><?php echo _("Cell"); ?></p>
					<p id="body-system" class="grab term" data-value="Body System"><?php echo _("Body System"); ?></p>
					<p id="tissue" class="grab term" data-value="Tissue"><?php echo _("Tissue"); ?></p>
					<p id="organ" class="grab term" data-value="Organ"><?php echo _("Organ"); ?></p>
				</div>

				<p id="reset"><?php echo _("Reset"); ?></p>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>

				<div class="choices clearfix">
					<div>
						<img src="images/18/a.png">
						<div class="a"></div>
					</div>
					<div>
						<img src="images/18/b.png">
						<div class="b"></div>
					</div>
					<div>
						<img src="images/18/c.png">
						<div class="c"></div>
					</div>
					<div>
						<img src="images/18/d.png">
						<div class="d"></div>
					</div>
				</div>

				<div class="feedback center"></div>
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying parts of the body..."); ?></strong></section></section>
	
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	term = '',
	checkAnswer = 0,
	qa = $('#question .a'),
	qb = $('#question .b'),
	qc = $('#question .c'),
	qd = $('#question .d'),
	aa = $('#answer .a'),
	ab = $('#answer .b'),
	ac = $('#answer .c'),
	ad = $('#answer .d'),
	answered = 1;

	$('#terms p').draggable({ revert: true });

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
				
				if (id == "cell") {
					$('#cell').detach().css({ position: 'static', 'text-align': 'center', 'border-radius': '3px', padding: '5px 15px', border: 0, background: '#ec6b76' }).draggable({ disabled: true }).appendTo(me);
				} else if (id == "body-system") {
					$('#body-system').detach().css({ position: 'static', 'text-align': 'center', 'border-radius': '3px', padding: '5px 15px', border: 0, background: '#ec6b76' }).draggable({ disabled: true }).appendTo(me); 
				} else if (id == "tissue") {
					$('#tissue').detach().css({ position: 'static', 'text-align': 'center', 'border-radius': '3px', padding: '5px 15px', border: 0, background: '#ec6b76' }).draggable({ disabled: true }).appendTo(me); 
				} else if (id == "organ") {
					$('#organ').detach().css({ position: 'static', 'text-align': 'center', 'border-radius': '3px', padding: '5px 15px', border: 0, background: '#ec6b76' }).draggable({ disabled: true }).appendTo(me);
				}

				me.droppable({ disabled: true });
			}
		});
	});

	$('#reset').on('click', function() {
		term = question.find('.term').detach().css({ 'position': 'relative', 'padding': '5px 15px', 'background': '#c8e19d' }).draggable({ disabled: false });

		$('#terms').html(term);

		$('#question .choices div div').each(function() {
			var me = $(this);
			me.droppable({ disabled: false });
			//location.reload();
		});
	});

	function save() {
		aa.html(qa.html());
		ab.html(qb.html());
		ac.html(qc.html());
		ad.html(qd.html());

		if (qa.find('p').data('value') == 'Body System' && qb.find('p').data('value') == 'Organ' && qc.find('p').data('value') == 'Tissue' && qd.find('p').data('value') == 'Cell') {
		//if (qa.find('p')) {
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Good job! Cells make up tissue, tissue makes up organs, organs make up body systems.  Altogether they make the body run."); ?></p>'); 
		} else {
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite... Cells make up tissue, tissue makes up organs, organs make up body systems.  Altogether they make the body run."); ?></p>'); 
		}

		if (answered == 0) {
			saveAnswer('healthy-body-qq5-a', qa.find('p').data('value'));
			saveAnswer('healthy-body-qq5-b', qb.find('p').data('value'));
			saveAnswer('healthy-body-qq5-c', qc.find('p').data('value'));
			saveAnswer('healthy-body-qq5-d', qd.find('p').data('value'));
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "17.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); }); 
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
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
