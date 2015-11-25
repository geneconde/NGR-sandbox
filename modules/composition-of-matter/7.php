<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$smc->updateStudentLastscreen(7, $_SESSION['smid']);
		$sa = $sac->getStudentAnswer($_SESSION['smid'], 'composition-of-matter-qc2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/component.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.jsPlumb-1.4.1-all-min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h2 { margin: 0; }
.wrap { border-left: 1px dashed #d0de84; border-right: 1px dashed #d0de84; }
.bg { background: url('images/7/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#questions, #answers { overflow: hidden; }
#answers { display: none; }
#question1, #question2, #answer2 { background: rgba(255, 255, 255, .8); margin-bottom: 15px; padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }

#question1 { position: relative; height: 300px; width:845px; }
#question2 { margin-bottom: 0 !important; }

#question1 h2, #question2 h2, #answer1 h2, #answer2 h2 { margin-top: 0; }

#question1 section h2 { text-align: center; background-color: #f49e9c; margin-top: 20px; -moz-border-radius: 8px; color: #000; border-radius: 8px; padding: 6px; }
#question1 li { list-style: none; background-color: #c8e19d; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; margin: 0 0 2px; padding: 6px 0; }
#question1 ul { list-style: none; padding-left: 0; margin-top: 2px; } 
#question1 section { padding-left: 7px; overflow: hidden; }

#question2 ul { list-style: none; padding: 0 5px; margin: 15px 0 5px; }
#question2 li { overflow: hidden; cursor: pointer; margin-bottom: 17px; }
#question2 li:last-child { overflow: hidden; cursor: pointer; margin-bottom: 0; }
#question2 label { font-size: 24px; cursor: pointer; }
#question2 img, #answer2 img { vertical-align: middle; }
#question2 img { padding-right: 10px; }
#question2 input[type=radio] { display: none; }

#answer1, #answer2 { padding-left: 10px; padding-right: 10px; }
#answer1 { margin-top: 155px; }

#answer1 p img { vertical-align: middle; }

#answer2 p { text-align: center; }

#answer2 .feedback { text-align: center; }
#answer2 .feedback p { display: inline-block; overflow: hidden; }
#answer2 .feedback p img { vertical-align: middle; }
#answer2 .feedback p span { width: 240px; }

#answer2 .answer p { overflow: hidden; font-size: 24px; }
#answer2 .answer p img { padding-right: 10px; }
#answer2 .answer p span { width: 240px; }

#col1 { position: absolute; top: 40px; left: 40px; width: 160px !important; }
#col2 { position: absolute; top: 40px; right: 40px; width: 360px !important; }

#col1 li { padding: 5px 20px 5px 10px; font-size: 20px; }
#col2 li { padding: 5px 0 5px 20px; font-size: 20px; }

.rBox { width: 300px; padding-left: 20px; }

._jsPlumb_endpoint { cursor: pointer; }
._jsPlumb_endpoint_connected { margin-top: 0; }
._jsPlumb_element_dragging { margin-top: 0; } 

#containerId { position: relative; }

#reset { background: #f49e9c; padding: 10px 10px; right: 40px; top: -15px; position: absolute; font-size: 18px; display: inline-block; cursor: pointer; border-radius: 5px; }
#reset:hover { background: #db8f8d; }

img.grayscale { filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */ filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */ -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); -webkit-filter: grayscale(0%); -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */ }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; display: inline !important; }
img.next-toggle { display: none; }
#col1 .ansImg { position: absolute; left:-25px; }
#cover { height: 236px; width: 852px; background: transparent; display: none; position: absolute; z-index: 9999; }
<?php if($language == "es_ES") { ?>
	h2 { font-size: 22px; }
	#answer1 p, #answers p { font-size: 21px; }
<?php } ?> 

html[dir="rtl"] #col1 ul li div { padding-right: 20px; }
html[dir="rtl"] #reset { left: 40px; right: auto; }
html[dir="rtl"] p { font-size: 20px; }

<?php if($language == "zh_CN") { ?>
	#col2 li {font-size: 18px;padding: 6px 0 6px 20px;}
	#reset {padding: 7px 10px;font-size: 18px;top: 1px;}
<?php } ?> 
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1 class="add-text"><?php echo _('Quick Check #2'); ?></h1>

				<div id="question1">
					<h2><?php echo _('Question A. Draw a line between the states of matter on the left to their descriptions on the right. To do this, click on the button next to the terms on the left and drag it to the button next to the descriptions on the right. Click the "Start Over" button to remove the lines and connect again.'); ?></h2>
					<div id="cover"></div>
					<div id="containerId">
						<span id="reset"><?php echo _('Start Over'); ?></span>
					
						<div id="col1">
							<ul>
								<li><div class='lBox' id="c1"><?php echo _('Solid'); ?></div></li>
								<li><div class='lBox' id="c2"><?php echo _('Liquid'); ?></div></li>
								<li><div class='lBox' id="c3"><?php echo _('Gas'); ?></div></li>
							</ul>
						 </div>
						 
						<div id="col2">
							<ul>
								<li><div class='rBox' id="A"><?php echo _('Fixed shape, fixed volume'); ?></div></li>
								<li><div class='rBox' id="B"><?php echo _('No fixed shape, fixed volume'); ?></div></li>
								<li><div class='rBox' id="C"><?php echo _('No fixed shape, no fixed volume'); ?></div></li>
							</ul>
						 </div>
					</div>
					<div id="answer1"></div>
				</div>

				<div id="question2">
					<h2><?php echo _('Question B. Which of the following is <span class="blink">NOT</span> a way to uniquely identify an element?'); ?></h2>

					<ul>						
						<li id="a"><input id="a2" name="q2" type="radio"><label for="a2"><img src="images/7/a.png" class="grayscale" alt="A"><?php echo _('Melting point'); ?></label></li>
						<li id="b"><input id="b2" name="q2" type="radio"><label for="b2"><img src="images/7/b.png" class="grayscale" alt="B"><?php echo _('Boiling point'); ?></label></li>
						<li id="c"><input id="cc2" name="q2" type="radio"><label for="cc2"><img src="images/7/c.png" class="grayscale" alt="C"><?php echo _('Combined mass and volume'); ?></label></li>
						<li id="d"><input id="d2" name="q2" type="radio"><label for="d2"><img src="images/7/d.png" class="grayscale" alt="D"><?php echo _('State of matter'); ?></label></li>
					</ul>
				</div>
			</div>

			<div id="answers">
				<!-- <h1><?php echo _('Quick Check #2'); ?> - <?php echo _('How did I do?'); ?></h1> -->

				<!-- <div id="answer1">
					<h2><?php echo _('Question A. Draw a line between the states of matter on the left to their descriptions on the right. To do this, click on the button next to the terms on the left and drag it to the button next to the descriptions on the right. Click the "Start Over" button to remove the lines and connect again.'); ?></h2>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div> -->

				<div id="answer2">
					<h2><?php echo _('Question B. Which of the following is <span class="blink">NOT</span> a way to uniquely identify an element?'); ?></h2>
					<p><?php echo _('You answered...'); ?></p>
					<div class="answer"></div>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="8.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Studying matter...'); ?></strong></section></section>
	<script>
	var back = $('img.back-toggle'),
	next = $('img.next-toggle'),
	check = $('img.check-toggle'),
	questions = $('#questions'),
	answers = $('#answers'),

	question1 = $('#question1'),
	question2 = $('#question2'),

	answer1 = $('#answer1'),
	answer2 = $('#answer2'),

	a1 = '',
	a2 = '',
	a3 = '',
	ans1 = '',
	ans2 = '',

	answered = <?php echo $answered; ?>,

	a = question2.find('#a'),
	b = question2.find('#b'),
	c = question2.find('#c'),
	d = question2.find('#d');

	jsPlumb.bind("ready", function() {
		var startpointOptions = { isSource:true,container:$('#containerId'), anchors:["Right"], connector:[ "Bezier" ] };
		var endpointOptions = { isTarget:true,container:$('#containerId'), connector:["Straight"], anchors:["Left"] };
		var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
		var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

		//get answers
		jsPlumb.bind("jsPlumbConnection", function (conn) {
			 if (conn.sourceId=='c1'){
				 a1 = conn.targetId;
			 } else if (conn.sourceId=='c2'){
				 a2 = conn.targetId;
			 } else if (conn.sourceId=='c3'){
				 a3 = conn.targetId;
			 } 
			 //resets all connections
			$('#reset').click(function(){
				jsPlumb.detach(conn);
			});

			$('img.back-toggle').click(function() {
		    	if ($('#answer').is(':visible')) {
		    	    jsPlumb.detach(conn);
		    	}
		    });
		});
	});

	a.on('click', function() {
		a.find('img').removeClass().addClass('grayscale-off');
		b.find('img').removeClass().addClass('grayscale');
		c.find('img').removeClass().addClass('grayscale');
		d.find('img').removeClass().addClass('grayscale');
	});

	b.on('click', function() {
		a.find('img').removeClass().addClass('grayscale');
		b.find('img').removeClass().addClass('grayscale-off');
		c.find('img').removeClass().addClass('grayscale');
		d.find('img').removeClass().addClass('grayscale');
	});

	c.on('click', function() {
		a.find('img').removeClass().addClass('grayscale');
		b.find('img').removeClass().addClass('grayscale');
		c.find('img').removeClass().addClass('grayscale-off');
		d.find('img').removeClass().addClass('grayscale');
	});

	d.on('click', function() {
		a.find('img').removeClass().addClass('grayscale');
		b.find('img').removeClass().addClass('grayscale');
		c.find('img').removeClass().addClass('grayscale');
		d.find('img').removeClass().addClass('grayscale-off');
	});

	question2.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.is(':checked') && radio.attr('id') == 'a2') {
			answer2.find('.answer').html('<p><img src="images/7/a.png"><span><?php echo _("Melting point"); ?></span></p>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><span><?php echo _("Not quite! Melting point is a way to uniquely identify an element."); ?></span></p>');
			ans2 = 'A';
		}

		if (radio.attr('id') == 'b2') {
			answer2.find('.answer').html('<p><img src="images/7/b.png"><span style="padding-top: 8px;"><?php echo _("Boiling point"); ?></span></p>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><span><?php echo _("Not quite! Boiling point is a way to uniquely identify an element."); ?></span></p>');
			ans2 = 'B';
		}

		if (radio.attr('id') == 'cc2') {
			answer2.find('.answer').html('<p><img src="images/7/c.png"><span><?php echo _("Combined mass and volume"); ?></span></p>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><span><?php echo _("Not quite! Combined mass and volume is a way to uniquely identify an element."); ?></span></p>');
			ans2 = 'C';
		}

		if (radio.attr('id') == 'd2') {
			answer2.find('.answer').html('<p><img src="images/7/d.png"><span style="padding-top: 10px;"><?php echo _("State of matter"); ?></span></p>');
			answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><span><?php echo _("Correct! One cannot uniquely identify an element solely based on its state of matter."); ?></span></p>');
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('composition-of-matter-qc2-a', a1);
			saveAnswer('composition-of-matter-qc2-b', a2);
			saveAnswer('composition-of-matter-qc2-c', a3);
			saveAnswer('composition-of-matter-qc2-d', ans2);
			answered = 1;
		}
	}

	$('img.back-toggle').click(function() {
		if (question2.is(':visible')) {
			document.location.href = "6.php#screen3"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answers.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			$('#cover').css('display', 'none');
			question1.fadeOut();
			$('#answer1').fadeOut();
			$("#question1").css("height","300");
			$("#col1 ul li img").remove();
			answers.fadeOut(function(){
				$('.add-text').text('<?php echo _("Quick Check #2"); ?>'); 
				question1.fadeIn();
				question2.fadeIn();
				$('#reset').fadeIn();
			}); 
		}
	});
	
	
	check.click(function() {
		var checkAnswer = $('input:radio:checked').length;

		if (!$("div[elid='c1']").hasClass("_jsPlumb_endpoint_connected")){
			checkAnswer = 0;
		}
		if (!$("div[elid='c2']").hasClass("_jsPlumb_endpoint_connected")){
			checkAnswer = 0;
		}
		if (!$("div[elid='c3']").hasClass("_jsPlumb_endpoint_connected")){
			checkAnswer = 0;
		}

		if (checkAnswer == 0) {
			alert("<?php echo _('Please select your answers.'); ?>");
		} else {
			$('#reset').fadeOut();
			check.fadeOut(function() { 	next.fadeIn(); })
			save();
			question2.fadeOut(function() {
				$('.add-text').text('<?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?>');
				checkAnswer2();
				$("#question1").css("height","385");
				$('#cover').css('display', 'block');
				$('#containerId').fadeIn();
				$('#answer1').fadeIn();
				answers.fadeIn();
				window.location.hash = "answer";
				jsPlumb.repaint($('.lBox , .rBox'));
			});
		}
	});
	
	function checkAnswer2(){
		//check answer for question A
		ans1 = a1+a2+a3;
		if( a1 == 'A'){
			$('#c1').parent().prepend('<img class="ansImg" src="images/others/correct.png"/>');
		} else {
			$('#c1').parent().prepend('<img class="ansImg" src="images/others/wrong.png"/>'); }
		if( a2 == 'B'){
			$('#c2').parent().prepend('<img class="ansImg" src="images/others/correct.png"/>');
		} else {
			$('#c2').parent().prepend('<img class="ansImg" src="images/others/wrong.png"/>'); }
		if( a3 == 'C'){
			$('#c3').parent().prepend('<img class="ansImg" src="images/others/correct.png"/>');
		} else {
			$('#c3').parent().prepend('<img class="ansImg" src="images/others/wrong.png"/>'); }
			
		if (a1 == 'A' && a2 == 'B' && a3 == 'C'){
			answer1.html("<p class='green'><?php echo _("You got it! You've matched them all correctly. Gas has no fixed shape or fixed volume. Solids have a fixed shape and a fixed volume. Liquids do not have a fixed shape, but have a fixed volume."); ?></p>");
		} else {
			answer1.html('<p class="red"><?php echo _("Not quite! Gas has no fixed shape or fixed volume. Solids have a fixed shape and a fixed volume. Liquids do not have a fixed shape, but have a fixed volume."); ?></p>');
		}
	}
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
