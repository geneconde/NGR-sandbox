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
		h1 {color: #660066;} 
		h2 { color: #469c96; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/20/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #777; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #777; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }

		table { border: 0; margin: 0 auto; padding: 0; font-weight: normal; border-collapse: separate; border-spacing: 10px 5px; width: 80%; border-color: #ec6666;}
		th { text-align: left; font-weight: normal; width: 33%;  border-color: #ec6666;}
		td { text-align: center; }
		.margin { text-align: center; }
		td, th { background-color: #eacaca; border-radius: 5px; margin-left: 10px; margin-top: -5px; border-color: #ec6666;}
		td .grab { background-color: #eacaca; border-radius: 5px; border: 3px solid #ec6666; border-style: dashed; padding-top: 5px; padding-bottom: 5px; }
		th { /*border: solid #000; border-style: dashed;*/ height: 60px; background-color: #f3a9cd; }

		.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; background-color: #eacaca; border-radius: 5px; border: solid #ec6666; border-style: dashed; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; background-color: #eacaca; border-radius: 5px; border: 3px solid #ec6666; border-style: dashed; dashed; padding-top: 5px; padding-bottom: 5px; }

		.drop { height: 50px; margin-top: 0; }
		.qtip-wrapper { font-size: 15px; }
		
		#answer table .drop { display: none; }
		#answer #feedbackA img { width: auto; }
		#answer #feedbackB img { width: auto; }
		#answer #feedbackC img { width: auto; }

		.message { margin-top: -8px; }
		.ui-draggable { margin: 0px; }
		img { width: auto; }
		td p { font-size: 16px; }
		#answer td p:last-child { display: none; }
		@media screen and (max-width: 1250px ){
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; overflow: hidden; }
		}
		<?php if($language=='zh_CN') { ?>
			.td_drag p, .drop p { padding-top: 16px !important; padding-bottom: 16px !important; }
			.grab { padding-bottom: 16px !important; padding-top: 16px !important; }
		<?php } ?>
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			table tr:nth-child(2) .drop, table tr:nth-child(3) .drop { min-height: 72px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?></h1>
						<h2 class="grid_12"><?php echo _("Drag each of the following statements into the proper category."); ?></h2>
						<br>
						<table border=1>
							<tr id="first">
								<th><p class="margin statement" ><?php echo _("Statement"); ?></p></th>
								<th><p class="margin" ><?php echo _("Correct"); ?></p></th>
								<th><p class="margin" ><?php echo _("Incorrect"); ?></p></th>
							</tr>
							<tr>
								<td class="td_drag" id="feedbackA"><p class="grab" id="1"><?php echo _("Axons connect nerve cells to other distant nerve cells."); ?></p></td>
								<td id="Aone"><p class="drop" id="a1"></p></td>
								<td id="Atwo"><p class="drop" id="a0"></p></td>
							</tr>
							<tr>
								<td class="td_drag" id="feedbackB"><p class="grab" id="2"><?php echo _("Red blood cells are much larger than white blood cells."); ?></p></td>
								<td id="Bone"><p class="drop" id="b1"></p></td>
								<td id="Btwo"><p class="drop" id="b0"></p></td>
							</tr>
							<tr>
								<td class="td_drag" id="feedbackC"><p class="grab" id="3"><?php echo _("Muscle cells may have<br>many nuclei."); ?></p></td>
								<td id="Cone"><p class="drop" id="c1"></p></td>
								<td id="Ctwo"><p class="drop" id="c0"></p></td>
							</tr>
							<tr>
								<td class="td_drag" id="feedbackD"><p class="grab" id="4"><?php echo _("Gametes have complete sets of chromosomes."); ?></p></td>
								<td id="Done"><p class="drop" id="d1"></p></td>
								<td id="Dtwo"><p class="drop" id="d0"></p></td>
							</tr>
						</table>
					</div>
					<div id="answer">
						<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class='message'><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>
							<table border=1></table>
						<div class="feedback"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="21.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Correct or incorrect?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.qtip.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 0, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 1,
			answer = '',
			drag1 = $('#1'),
			dropA1 = $('#a1'),
			dropA0 = $('#a0');
			drag2 = $('#2'),
			dropB1 = $('#b1'),
			dropB0 = $('#b0');
			drag3 = $('#3'),
			dropC1 = $('#c1'),
			dropC0 = $('#c0');
			drag4 = $('#4'),
			dropD1 = $('#d1'),
			dropD0 = $('#d0');
		
		function save() {

			if ($('#answer #Aone').find('#1').length) {
				$('#answer #feedbackA').html('<img src="assets/correct.png" class="tip" alt="Axons connect nerve cells to other distant nerve cells.">');
				answer = "Correct: Axons connect nerve cells to other distant nerve cells, ";
			} else if ($('#answer #Atwo').find('#1').length) {
				$('#answer #feedbackA').html('<img src="assets/wrong.png" class="tip" alt="Axons connect nerve cells to other distant nerve cells.">');
				answer += "Incorrect: Axons connect nerve cells to other distant nerve cells, ";
			}
			if ($('#answer #Bone').find('#2').length) {
				$('#answer #feedbackB').html('<img src="assets/wrong.png" class="tip" alt="Red blood cells are much larger than white blood cells.">');
				answer += "Correct: Red blood cells are much larger than white blood cells, ";
			} else if ($('#answer #Btwo').find('#2').length) {
				$('#answer #feedbackB').html('<img src="assets/correct.png" class="tip" alt="Red blood cells are much larger than white blood cells.">');
				answer += "Incorrect: Red blood cells are much larger than white blood cells, ";
			}
			if ($('#answer #Cone').find('#3').length) {
				$('#answer #feedbackC').html('<img src="assets/correct.png" class="tip" alt="Muscle cells may have many nuclei.">');
				answer += "Correct: Muscle cells may have many nuclei, ";
			} else if ($('#answer #Ctwo').find('#3').length) {
				$('#answer #feedbackC').html('<img src="assets/wrong.png" class="tip" alt="Muscle cells may have many nuclei.">');
				answer += "Incorrect: Muscle cells may have many nuclei, ";
			}
			if ($('#answer #Done').find('#4').length) {
				$('#answer #feedbackD').html('<img src="assets/wrong.png" class="tip" alt="Gametes have complete sets of chromosomes.">');
				answer += "Correct: Gametes have complete sets of chromosomes.";
			} else if ($('#answer #Dtwo').find('#4').length) {
				$('#answer #feedbackD').html('<img src="assets/correct.png" class="tip" alt="Gametes have complete sets of chromosomes.">');
				answer += "Incorrect: Gametes have complete sets of chromosomes.";
			}
			if($('#answer #Aone').find('#1').length && $('#answer #Btwo').find('#2').length && $('#answer #Cone').find('#3').length && $('#answer #Dtwo').find('#4').length) {
				$('#answer .feedback').html("<p class='green'><?php echo _("Great job! Correct statements: Axons connect nerve cells to other distant nerve cells. Muscle cells may have many nuclei. Incorrect: Red blood cells are much larger than white blood cells. Gametes have complete sets of chromosomes."); ?></p>");
				answer = "Subconscious: Smooth, Cardiac | Conscious: Skeletal";
			}
			$('#answer .statement').html('<?php echo _("Feedback"); ?>');

			if (answered == 0) {
				saveAnswer('specialized-cells-qq3-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			if($('#question #feedbackA').find('#1').length || $('#question #feedbackB').find('#2').length || $('#question #feedbackC').find('#3').length || $('#question #feedbackD').find('#4').length) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#question').fadeOut(function(){ 

					$('#answer table').html($('#question table').html());

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

					$('#answer').fadeIn();

					window.location.hash = '#answer';
					save();

				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "19.php";
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
				// drag1.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag1);
			}
		});

		dropA1.droppable ({
			accept: drag1,
			drop: function (event, ui) { 
				// drag1.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag1);
			}
		});

		dropB0.droppable ({
			accept: drag2,
			drop: function (event, ui) { 
				// drag2.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag2);
			}
		});

		dropB1.droppable ({
			accept: drag2,
			drop: function (event, ui) { 
				// drag2.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag2);
			}
		});

		dropC0.droppable ({
			accept: drag3,
			drop: function (event, ui) { 
				// drag3.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag3);
			}
		});

		dropC1.droppable ({
			accept: drag3,
			drop: function (event, ui) { 
				// drag3.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag3);
			}
		});

		dropD0.droppable ({
			accept: drag4,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag4);
			}
		});

		dropD1.droppable ({
			accept: drag4,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag4);
				answered = 1;
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
