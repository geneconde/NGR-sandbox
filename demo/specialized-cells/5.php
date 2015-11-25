<?php
	require_once '../tempsession.php';
	// $_SESSION['cmodule'] = 'specialized-cells';
	// require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
	<title><?php echo _("Specialized Cells"); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/fonts/playtime/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<script src="js/jquery.blink.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/global.js"></script>
	<script src="js/save-answer.js"></script>
	<style>
	.choices {
    	margin: 0 auto !important;
    	width: 600px !important;
	}

	h2 { width: 740px; }
	.wrap { border-left: 1px dashed #ffdf70; border-right: 1px dashed #ffdf70; }
	.bg { background: url('assets/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }


		.ac-custom input[type="radio"]:checked + label { color: #ec6666; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { background-color: #ec6666; height: 20px; width: 20px; margin-top: -11px; }
		.ac-custom svg path { stroke: #ec6666; }
		.ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { background-color: #ec6666; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] .ac-custom svg { right: 3px; left: 98% /* for Safari */ }

	#question { text-align: center; overflow: hidden; }
	.choices { margin: 0 auto; width: 790px; }
	.choices div { float: left; margin-right: 20px; }
	.choices div:last-child { margin-right: 0; }
	.choices div div { margin-top: 20px; height: 40px; border-radius: 5px; width: 164px; float: none; border: 1px solid #ec6666; background-color: #eacaca;}

	#terms { margin: 50px auto 0; width: 790px; }
	#terms p { float: left; background:  #eacaca; border-radius: 5px; margin-right: 20px; text-align: center; padding: 5px 15px; width: 130px;  border-style: dashed; border-color: #ec6666; margin-top:10px;}
	#terms p:last-child { margin-right: 20px; }
	#reset { text-align: center; margin-top: 30px; background: rgb(200, 225, 157); padding: 5px 10px;
	 color: #000; display: inline-block; border-radius: 5px; 
	 margin-top:90px;
	 margin-left:-750px;
	}
	#reset:hover { background: #d3616b; cursor: pointer; }

	.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
	.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

	#answer { display: none; }
	#answer .choices { margin: 20px auto; }
	#answer p { text-align: center; cursor: default !important;clear:both; }
	#answer .answer img { border: 4px solid #e6def3; margin-top: 10px; }

	.answer span { display: block; }
	.feedback { font-size: 24px; text-align: center; }
	.feedback img { vertical-align: middle; }
	img.next-toggle { display: none; }

	.red img {width: 2%;}
	.green img {width: 2%;}
		<?php if($language == "es_ES") { ?>
			#terms { width: 550px; }
			p#body-system { font-size: 20px; height: 30px; }
		<?php } ?>
		@media screen and (max-width: 1250px ){
			.bg{ 	background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; 
					overflow: hidden;
			}
		}
		@media (max-width: 960px){ #buttons { background-color: #468853; } }


		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){
			.choices div {
			        margin-right: 17px !important;
			}
			#terms p:last-child {
			    margin-right: 11px !important;
			}
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){
			.bg > div {
			    margin-top: 42px !important;
			}
		}

		@media (max-width: 1250px){
			.bg > div {
			    padding-top: 33px !important;
			}
			h2 {
			    font-size: 21px !important;
			    margin-top: -3px !important;
			}
			#reset {
			    margin-top: 52px !important;
			}
		}

	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
					<div id="question1">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1><br>
						<h2 class="grid_12"><?php echo _("Question A.") . " " . _("Which of the following sequences is correct, from smallest part to largest part?"); ?></h2>

						<div class="grid_12">
							<form class="ac-custom ac-radio ac-circle" autocomplete="off">
								<ol>
									<li><input id="A" name="q" type="radio" value="A"><label for='A'><span><?php echo _("Organ, tissue, system, cell"); ?></span></label></li>
									<li><input id="B" name="q" type="radio" value="B"><label for='B'><span><?php echo _("Cell, tissue, organ, system"); ?></span></label></li>
									<li><input id="C" name="q" type="radio" value="C"><label for='C'><span><?php echo _("Cell, organ, system, tissue"); ?></span></label></li>
									<li><input id="D" name="q" type="radio" value="D"><label for='D'><span><?php echo _("Organ, cell, system, tissue"); ?></span></label></li>
								</ol>
							</form>
						</div>
					</div>

				<h2 class="grid_12"><?php echo _("Choose the structures listed below that are common to most cells. Drag them into the empty boxes."); ?></h2>

				<div class="grid_12 reset"><a id="reset" href="#"><?php echo _("Reset"); ?></a></div>
				<div id="reload grid_12">
					<div class="choices">
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
					<br>
					<div class="align">
						<div id="terms" class="items">
							<div><p id="membrane" class="grab term" data-value="Membrane"><?php echo _("Membrane"); ?></p></div>
							<div><p id="dna" class="grab term" data-value="DNA"><?php echo _("DNA"); ?></p></div>
							<div><p id="reproduction" class="grab term" data-value="Reproduction"><?php echo _("Reproduction"); ?></p></div>
							<div><p id="nucleus" class="grab term" data-value="Nucleus"><?php echo _("Nucleus"); ?></p></div>
						</div>
					</div>

				</div>
				<div class="clear"></div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<h2><?php echo _("Question A.") . " " . _("Which of the following sequences is correct, from smallest part to largest part?"); ?></h2>
				<p><?php echo _("You answered..."); ?>
				<p class='answer'></p>
				<p class="feedback1"></p>
		
				<h2><?php echo _("Choose the structures listed below that are common to most cells. Drag them into the empty boxes."); ?></h2>
				<p><?php echo _("You answered..."); ?></p>

				<div class="choices">
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
				<p><div class="feedback2"></div></p>
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#answers" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<?php include 'setlocale.php'; ?>

	<script>
	//start q1
		var q1ans = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswerRadio = 0,
			answerHolder = '';

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();
			// $('.answer').html($('input:radio:checked').parent().find('span').text());
				$('#answer').find('.answer').html(text);
				if (id == 'A'){
					$('.feedback1').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Cells are actually the smallest parts."); ?></p>");
					answerHolder = 'A';
				}

				if (id == 'B'){
					$('.feedback1').html("<p class='green'><img src='assets/correct.png'><?php echo _("That's right! Cells are grouped into tissues, which are grouped into organs, which are grouped into systems."); ?></p>");
					answerHolder = 'B';
				}

				if (id == 'C')
					$('.feedback1').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Systems are the largest groups."); ?></p>");
					answerHolder = 'C';

				if (id == 'D')
					$('.feedback1').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Cells are the smallest parts."); ?></p>");
					answerHolder = 'D';

		});

		$('.next').fadeOut();
	//end q1check

		//start q2 check
		var back = $('.back'),
		next = $('.next'),
		check = $('.checkanswer'),
		question = $('#question'),
		answer = $('#answer'),
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
			
			p.mousedown(function() { p.addClass('grabbing'); });
			p.mouseup(function() { p.removeClass('grabbing');  });
		});

		$('.choices div div').each(function() {
			var me = $(this);

			me.droppable({
				accept: '.term',
				drop: function (event, ui) { 
					var draggable = ui.draggable;
					var id = draggable.attr("id");
					
					if (id == "membrane") {
						$('#membrane').detach().css({ position: 'static', 'text-align': 'center', 'border-radius': '3px',background: '#eacaca' , 'height': '30px',}).draggable({ disabled: true }).appendTo(me);
					} else if (id == "dna") {
						$('#dna').detach().css({ position: 'static', 'text-align': 'center', 'border-radius': '3px', background: ' #eacaca', 'height': '30px',}).draggable({ disabled: true }).appendTo(me); 
					} else if (id == "reproduction") {
						$('#reproduction').detach().css({ position: 'static', 'text-align': 'center', 'border-radius': '3px',background: ' #eacaca' , 'height': '30px',}).draggable({ disabled: true }).appendTo(me); 
					} else if (id == "nucleus") {
						$('#nucleus').detach().css({ position: 'static', 'text-align': 'center', 'border-radius': '3px',background: ' #eacaca' , 'height': '30px',}).draggable({ disabled: true }).appendTo(me);
					}

					me.droppable({ disabled: true });
				}
			});
		});

	$('#reset').on('click', function() {
		term = question.find('.term').detach().css({ 'position': 'relative', 'padding': '5px 15px', 'background': '#eacaca' }).draggable({ disabled: false });

		$('#terms').html(term);

		$('#question .choices div div').each(function() {
			var me = $(this);
			me.droppable({ disabled: false });
			//location.reload();
		});
	});

		function save() {

			if (q1ans == 0) {
				saveAnswer('specialized-cells-qc1-a', answerHolder);
				q1ans = 1;
			}

			if (answered == 0) {
				saveAnswer('specialized-cells-qc1-b', ans);
				answered = 1;
			}

			aa.html(qa.html());
			ab.html(qb.html());
			ac.html(qc.html());
			ad.html(qd.html());

			//if (qa.find('p').data('value') == 'membrane' && qb.find('p').data('value') == 'dna' && qc.find('p').data('value') == 'nucleus') {
			//if (qa.find('p')) {
				

			//} else 
			if (qa.find('p').data('value') == 'Reproduction' || qb.find('p').data('value') == 'Reproduction' || qc.find('p').data('value') == 'Reproduction'){
				$('.feedback2').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Reproduction is a function, not a structure."); ?></p>");
			}else{
				$('.feedback2').html("<p class='green'><img src='assets/correct.png'><?php echo _("That's correct! Membrane, DNA and Nucleus are structures while Reproduction is a function."); ?></p>");
			}

		}

		back.click(function() {
			if (question.is(':visible')) {
				document.location.href = "4.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
			} else if (answer.is(':visible')) {
				next.fadeOut(function() { check.fadeIn(); });
				answer.fadeOut(function(){ question.fadeIn(); }); 
			}
		});
		
		check.click(function() { 
			checkAnswer = 1;
				window.location.hash = '#answers'; 
			checkAnswer = $('input:radio:checked').length;

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
	<script src="js/svgcheckbx.js"></script>

	<script src="js/jpreloader.js"></script>
</body>
</html>