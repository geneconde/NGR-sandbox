<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Specialized cell"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #660066;} 
		h2 { color: #469c96; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/7/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #ec6666; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #ec6666; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #ec6666; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #ec6666; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }

		table { border: 0; margin: 0 auto; padding: 0; font-weight: normal; border-collapse: separate; border-spacing: 10px 3px; width: 780px; }
		th { text-align: left; font-weight: normal; width: 33%; }
		td { text-align: center; }
		.margin { text-align: center; }
		td, th { background-color: pink; border-radius: 5px; margin-left: 10px; margin-top: -5px; }
		td .grab { background-color: pink; border-radius: 5px; border: 3px solid #ec6666; border-style: dashed; padding-top: 5px; padding-bottom: 5px;color: #000; }
		th { /*border: solid #000; border-style: dashed;*/ height: 60px; background-color: #f3a9cd; }

		.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; background-color: pink; border-radius: 5px; border: 3px solid #ec6666; border-style: dashed; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; background-color: pink; border-radius: 5px; border: 3px solid #ec6666; border-style: dashed; dashed; padding-top: 5px; padding-bottom: 5px; color: #000;}

		.drop { height: 30px; }

		.qtip-wrapper { font-size: 15px; }
		
		#answer1 td { border: 3px solid #f49e9c; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; padding: 5px; margin: 0 auto; text-align: center; top: 0; left: 0; }
		#answer1 td img { width: auto; }

		#answer2 table .drop { display: none; }
		/*#answer2 td p:last-child { display: none; }*/
		#answer2 #feedbackA img { width: auto; }
		#answer2 #feedbackB img { width: auto; }
		#answer2 #feedbackC img { width: auto; }
		#questions #feedbackA { height: 50px; }
		#questions #feedbackB { height: 50px; }
		#questions #feedbackC { height: 50px; }

		#reset { text-align: center; margin-top: 30px; background: #ec6b76; padding: 5px 10px; color: #fff; display: inline-block; border-radius: 5px; }
		#reset:hover { background: #d3616b; cursor: pointer; }
		.message { margin-top: -8px; }
		.ui-draggable { margin: 0px; }

		#answers table td p:last-child { display: none; }
		#answers th .muscle:first-child { display: none; }
		#question2 { margin-top: 20px; }
		#question2 table { margin-top: -10px; }
		#answers #answer1 p { margin-top: 0px; }
		#answers #answer2 h2 { margin-top: 20px; }
		#answers #answer2 .message, #answers #answer2 table { margin-top: 0px; }
		.grid_12 { margin-left: 1.5%; }

		@media only screen and (orientation:landscape) and (max-width: 768px){
			table {
			    width: 728px !important;
			}
			#question2 {
			    margin-top: 0px !important;
			}
		}
		@media screen and (max-width: 1250px ){
			.bg{ 	background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; 
					overflow: hidden;
			}
		}

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){
			table {
			    width: 722px !important;
			}
		}
		@media (max-width: 960px){ #buttons { background-color: #468853 !important; } }

		@media (max-device-width: 1024px) and (min-device-width: 768px){
			#buttons {
				background-color: #468853 !important;
			}
		}
		@media (max-width: 1250px ){
			.ac-custom li {
			    padding: 6px !important;
			}
			body, h2 {
			    font-size: 18px !important;
			}
			#buttons {
			    background-color: #468853 !important;
			}
		}


	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="grid_12">
				<div id="questions" class="grid_12">
					<div id="question">
						<h1><?php echo _("Quick Check #2"); ?></h1>
						<h2><?php echo _("Question A.") . " " . _("Muscle cells are capable of doing which of the following?"); ?></h2>

						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("They can extend."); ?></span></label></li>
								<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("They can contract."); ?></span></label></li>
								<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("They can digest food."); ?></span></label></li>
								<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("They can excrete enzymes."); ?></span></label></li>
							</ol>
						</form>
					</div>
					<div id="question2">
						<h2><?php echo _("Question B.") . " " . _("Drag the muscle types into the proper boxes."); ?></h2>
						<br>
						<table>
							<tr id="first">
								<th><p class="margin muscle"><?php echo _("Muscle Type"); ?></p></th>
								<th><p class="margin"><?php echo _("Conscious Control"); ?></p></th>
								<th><p class="margin"><?php echo _("Subconscious Control"); ?></p></th>
							</tr>
							<tr>
								<td class="td_drag" id="feedbackA"><p class="grab" id="1"><?php echo _("Smooth"); ?></p></td>
								<td id="Aone"><p class="drop" id="a1"></p></td>
								<td id="Atwo"><p class="drop" id="a0"></p></td>
							</tr>
							<tr>
								<td class="td_drag" id="feedbackB"><p class="grab" id="2"><?php echo _("Cardiac"); ?></p></td>
								<td id="Bone"><p class="drop" id="b1"></p></td>
								<td id="Btwo"><p class="drop" id="b0"></p></td>
							</tr>
							<tr>
								<td class="td_drag" id="feedbackC"><p class="grab" id="3"><?php echo _("Skeletal"); ?></p></td>
								<td id="Cone"><p class="drop" id="c1"></p></td>
								<td id="Ctwo"><p class="drop" id="c0"></p></td>
							</tr>
						</table>
					</div>
				</div>
				<div id="answers" class="grid_12">
					<div id="answer1">
						<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2><?php echo _("Question A.") . " " . _("Muscle cells are capable of doing which of the following?"); ?></h2>

						<p class='message'><?php echo _("You answered..."); ?></p>
						<p class="answer1"></p>

						<div class="feedback"></div>
					</div>

					<div id="answer2">
						<h2><?php echo _("Question B.") . " " . _("Drag the muscle types into the proper boxes."); ?></h2>

						<p class='message'><?php echo _("You answered..."); ?></p>

						<table></table>

						<p class="answer2"></p>
						<div class="feedback"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying types of muscles..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.qtip.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answered2 = 1,
			checkAnswer = 0,
			answer = '',
			answer2 = '',
			drag1 = $('#1'),
			dropA1 = $('#a1'),
			dropA0 = $('#a0');
			drag2 = $('#2'),
			dropB1 = $('#b1'),
			dropB0 = $('#b0');
			drag3 = $('#3'),
			dropC1 = $('#c1'),
			dropC0 = $('#c0');

		$('#questionAWrong').hide();
		
		function save() {
		//	if($('#answer2 #Atwo').find('#1').length && $('#answer2 #Btwo').find('#2').length && $('#answer2 #Cone').find('#3').length) {
		//		$('#answer2 .feedback').html("<p class='green'><?php echo _("Great job! Smooth and cardiac muscles operate even when we're not thinking about them. Skeletal muscles work when we want them to."); ?></p>");
		//		answer2 = "Subconscious: Smooth, Cardiac | Conscious: Skeletal";
		//	}
		if($('#answer2 #Atwo').find('#1').length && $('#answer2 #Btwo').find('#2').length && $('#answer2 #Cone').find('#3').length) {
			$('#answer2 .feedback').html("<p class='green'><?php echo _("Great job! Smooth and cardiac muscles operate even when we're not thinking about them. Skeletal muscles work when we want them to."); ?></p>");
			answer2 = "Subconscious: Smooth, Cardiac | Conscious: Skeletal";
		}else/* if($('#answer2 #Atwo').find('#1').length || $('#answer2 #Btwo').find('#2').length || $('#answer2 #Cone').find('#3').length)*/{
			$('#answer2 .feedback').html("<p class='red'><?php echo _("Not quite! Smooth muscle is found in organs and blood vessels and is not consciously controlled. Cardiac muscle makes up the heart and functions independently of our thoughts. Thus, only skeletal muscle should be under conscious control as it moves bones."); ?></p>");
		}




			if ($('#answer2 #Aone').find('#1').length) {
				$('#answer2 #feedbackA').html('<img src="assets/wrong.png" class="tip" alt="<?php echo _('Smooth muscle is found in organs and blood vessels. It is not consciously controlled.'); ?>">');
				answer2 += "Conscious: Smooth ";
			} else if ($('#answer2 #Atwo').find('#1').length) {
				$('#answer2 #feedbackA').html('<img src="assets/correct.png" class="tip" alt="<?php echo _('Smooth muscle is found in organs and blood vessels. It is subconsciously controlled.'); ?>">');
				answer2 += "Subconscious: Smooth ";
			}
			if ($('#answer2 #Bone').find('#2').length) {
				$('#answer2 #feedbackB').html('<img src="assets/wrong.png" class="tip" alt="<?php echo _('Cardiac muscle makes up the heart. It functions independently of our thoughts.'); ?>">');
				answer2 += "Conscious: Cardiac ";
			} else if ($('#answer2 #Btwo').find('#2').length) {
				$('#answer2 #feedbackB').html('<img src="assets/correct.png" class="tip" alt="<?php echo _('Cardiac muscle makes up the heart. It functions independently of our thoughts.'); ?>">');
				answer2 += "Subconscious: Cardiac ";
			}
			if ($('#answer2 #Cone').find('#3').length) {
				$('#answer2 #feedbackC').html('<img src="assets/correct.png" class="tip" alt="<?php echo _('Skeletal muscle is under conscious control, and moves bones.'); ?>">');
				answer2 += "Conscious: Skeletal ";
			} else if ($('#answer2 #Ctwo').find('#3').length) {
				$('#answer2 #feedbackC').html('<img src="assets/wrong.png" class="tip" alt="<?php echo _('Skeletal muscle is under conscious control, and moves bones.'); ?>">');
				answer2 += "Subconscious: Skeletal ";
			}

			$('.answer1').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Muscle cells can't actually extend, only relax."); ?></p>");

			if (answer == 'B')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Right! When muscle cells contract, things move."); ?></p>");

			if (answer == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Muscles don't digest food."); ?></p>");

			if (answer == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Muscles don't excrete enzymes."); ?></p>");

			if (answered == 0) {
				saveAnswer('specialized-cells-qc2-a', answer);
				answered = 1;
			}
			if (answered2 == 0) {
				saveAnswer('specialized-cells-qc2-b', answer2);
				answered2 = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;
			if($('#question2 #feedbackA').find('#1').length || $('#question2 #feedbackB').find('#2').length || $('#question2 #feedbackC').find('#3').length) {
				checkAnswer = 0;
			}
			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function(){ 

					$('#answer2 table').html($('#question2 table').html());

					save();

					$('.tip').qtip({
						content: $(this).attr('alt'),
						position: {
							corner: {
								tooltip: 'bottomLeft',
								target: 'topRight'
							}
						},
						style: {
							border: {
								radius: 5
							},
							tip: true,
							name: 'cream'
						}
					});

					$('#answers').fadeIn();

					window.location.hash = '#answers';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "6.php#screen3";
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

		$('.grab').draggable({ revert: true, revertDuration: 0, containment: "tbody", scroll: false });

		$('.grab').each(function() {
			var textItem = $(this);
			textItem.mousedown(function() { textItem.removeClass('grab').addClass('grabbing'); });
			textItem.mouseup(function() { textItem.removeClass('grabbing').addClass('grab'); });
			
			var p = $(this).parent().parent().children(':not(:first-child)');

		});

		dropA0.droppable ({
			accept: drag1,
			drop: function (event, ui) {
				// drag1.detach().css({ top: 0, left: 0, margin: 0, 'z-index': 9999 }).appendTo($(this));
				$(this).css({ 'margin-top': '-5px', 'padding-bottom': '-10px' }).html(drag1);
			}
		});

		dropA1.droppable ({
			accept: drag1,
			drop: function (event, ui) { 
				// drag1.detach().css({ top: 0, left: 0, margin: 0, 'z-index': 9999 }).appendTo($(this));
				$(this).css({ 'margin-top': '-5px', 'padding-bottom': '-10px' }).html(drag1);
			}
		});

		dropB0.droppable ({
			accept: drag2,
			drop: function (event, ui) { 
				// drag2.detach().css({ top: 0, left: 0, margin: 0, 'z-index': 9999 }).appendTo($(this));
				$(this).css({ 'margin-top': '-5px', 'padding-bottom': '-10px' }).html(drag2);
			}
		});

		dropB1.droppable ({
			accept: drag2,
			drop: function (event, ui) { 
				// drag2.detach().css({ top: 0, left: 0, margin: 0, 'z-index': 9999 }).appendTo($(this));
				$(this).css({ 'margin-top': '-5px', 'padding-bottom': '-10px' }).html(drag2);
			}
		});

		dropC0.droppable ({
			accept: drag3,
			drop: function (event, ui) { 
				// drag3.detach().css({ top: 0, left: 0, margin: 0, 'z-index': 9999 }).appendTo($(this));
				$(this).css({ 'margin-top': '-5px', 'padding-bottom': '-10px' }).html(drag3);
			}
		});

		dropC1.droppable ({
			accept: drag3,
			drop: function (event, ui) { 
				// drag3.detach().css({ top: 0, left: 0, margin: 0, 'z-index': 9999 }).appendTo($(this));
				$(this).css({ 'margin-top': '-5px', 'padding-bottom': '-10px' }).html(drag3);
			}
		});
	</script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
