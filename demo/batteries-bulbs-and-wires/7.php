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

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #b85252; }
		
		.bg { background-image: url(assets/bg-qq-qc.jpg); }

		#buttons .next { display: none; }

		table { border: 0; margin: 0 auto; padding: 0; font-weight: normal; border-collapse: separate; border-spacing: 5px 5px; width: 780px; }
		th { text-align: left; font-weight: normal; width: 33%; }
		td { text-align: center; }
		.margin { text-align: center; }
		td, th { background: #eacaca;  border-radius: 5px; margin-left: 10px; margin-top: -5px; vertical-align: middle; }
		td .grab { background-color: transparent; border-radius: 5px; border: 2px solid #c16202; border-style: dashed; padding-top: 1px; padding-bottom: 1px; }
		th { /*border: solid #000; border-style: dashed;*/ height: 36px; }

		.grab {margin: 0; cursor: move; cursor: -moz-grab; cursor: -webkit-grab; background-color: transparent; border-radius: 5px; border: solid #c16202; border-style: dashed; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; background-color: transparent; border-radius: 5px; border: 2px solid #c16202; border-style: dashed; padding-top: 1px; padding-bottom: 1px; }

		.drop { height: 26px; margin-top: 0; }
		.qtip-wrapper { font-size: 15px; }
		.tip { margin: 0;}
		
		#answer table .drop { display: none; }
		#answer #feedbackA img { width: auto; }
		#answer #feedbackB img { width: auto; }
		#answer #feedbackC img { width: auto; }

		.message { margin-top: -8px; }
		.ui-draggable { margin: 0px; }
		img { width: auto; }
		td p { font-size: 22px; }
		#answer td p:last-child { display: none; }
			@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="question" class="grid_12">
						<h1><?php echo _("Quick Check #2"); ?></h1>
						<h2 class="grid_12"><?php echo _("Drag each material into its proper category."); ?></h2>
						<br>
						<table border=1>
							<tr id="first">
								<th><p class="margin statement" ><?php echo _("Material"); ?></p></th>
								<th><p class="margin" ><?php echo _("Conductors"); ?></p></th>
								<th><p class="margin" ><?php echo _("Insulators"); ?></p></th>
							</tr>
							<tr>
								<td class="td_drag noAnswer" id="feedbackA"><p class="grab con" id="1"><?php echo _("Silver"); ?></p></td>
								<td id="Aone"><p class="drop" id="a1"></p></td>
								<td id="Atwo"><p class="drop" id="a0"></p></td>
							</tr>
							<tr>
								<td class="td_drag noAnswer" id="feedbackB"><p class="grab ins" id="2"><?php echo _("Wood"); ?></p></td>
								<td id="Bone"><p class="drop" id="b1"></p></td>
								<td id="Btwo"><p class="drop" id="b0"></p></td>
							</tr>
							<tr>
								<td class="td_drag noAnswer" id="feedbackC"><p class="grab con" id="3"><?php echo _("Copper"); ?></p></td>
								<td id="Cone"><p class="drop" id="c1"></p></td>
								<td id="Ctwo"><p class="drop" id="c0"></p></td>
							</tr>
							<tr>
								<td class="td_drag noAnswer" id="feedbackD"><p class="grab con" id="4"><?php echo _("Iron"); ?></p></td>
								<td id="Done"><p class="drop" id="d1"></p></td>
								<td id="Dtwo"><p class="drop" id="d0"></p></td>
							</tr>
							<tr>
								<td class="td_drag noAnswer" id="feedbackE"><p class="grab ins" id="5"><?php echo _("Plastic"); ?></p></td>
								<td id="Eone"><p class="drop" id="e1"></p></td>
								<td id="Etwo"><p class="drop" id="e0"></p></td>
							</tr>
							<tr>
								<td class="td_drag noAnswer" id="feedbackF"><p class="grab ins" id="6"><?php echo _("Rubber"); ?></p></td>
								<td id="Fone"><p class="drop" id="f1"></p></td>
								<td id="Ftwo"><p class="drop" id="f0"></p></td>
							</tr>
							<tr>
								<td class="td_drag noAnswer" id="feedbackG"><p class="grab con" id="7"><?php echo _("Water"); ?></p></td>
								<td id="Gone"><p class="drop" id="g1"></p></td>
								<td id="Gtwo"><p class="drop" id="g0"></p></td>
							</tr>
							<tr>
								<td class="td_drag noAnswer" id="feedbackH"><p class="grab ins" id="8"><?php echo _("Air"); ?></p></td>
								<td id="Hone"><p class="drop" id="h1"></p></td>
								<td id="Htwo"><p class="drop" id="h0"></p></td>
							</tr>
						</table>
					</div>
					<div id="answer">
						<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Conductor or insulator?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answer = "";
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
			drag5 = $('#5'),
			dropE1 = $('#e1'),
			dropE0 = $('#e0');
			drag6 = $('#6'),
			dropF1 = $('#f1'),
			dropF0 = $('#f0');
			drag7 = $('#7'),
			dropG1 = $('#g1'),
			dropG0 = $('#g0');
			drag8 = $('#8'),
			dropH1 = $('#h1'),
			dropH0 = $('#h0');
		
		function save() {
			answer="";
			$('#answer p.con').each( function(){				
				if($(this).closest('td').index() == 1){
					$(this).closest('tr').find('td').first().html('<img src="assets/correct.png" class="tip" />');
				}else{
					$(this).closest('tr').find('td').first().html('<img src="assets/wrong.png" class="tip" />');
				}
			});

			$('#answer p.ins').each( function(){				
				if($(this).closest('td').index() == 2){
					$(this).closest('tr').find('td').first().html('<img src="assets/correct.png" class="tip" />');
				}else{
					$(this).closest('tr').find('td').first().html('<img src="assets/wrong.png" class="tip" />');
				}
			});

			$('#answer table tr td:nth-child(2)').each( function(){
				$(this).find('p.grab').each( function(){
					answer += $(this).attr('id');
				});
			});

			/*if ($('#answer #Aone').find('p').length) {
				$('#answer #feedbackA').html('<img src="assets/correct.png" class="tip"');
				answer = "Correct: Axons connect nerve cells to other distant nerve cells, ";
			} else{
				$('#answer #feedbackA').html('<img src="assets/wrong.png" class="tip" alt="Axons connect nerve cells to other distant nerve cells.">');
				answer += "Incorrect: Axons connect nerve cells to other distant nerve cells, ";
			}
			if ($('#answer #Bone').find('#2').length) {
				$('#answer #feedbackB').html('<img src="assets/wrong.png" class="tip" alt="Red blood cells are much larger than white blood cells.">');
				answer += "Correct: Red blood cells are much larger than white blood cells, ";
			} else{
				$('#answer #feedbackB').html('<img src="assets/correct.png" class="tip" alt="Red blood cells are much larger than white blood cells.">');
				answer += "Incorrect: Red blood cells are much larger than white blood cells, ";
			}
			if ($('#answer #Cone').find('#3').length) {
				$('#answer #feedbackC').html('<img src="assets/correct.png" class="tip" alt="Muscle cells may have many nuclei.">');
				answer += "Correct: Muscle cells may have many nuclei, ";
			} else{
				$('#answer #feedbackC').html('<img src="assets/wrong.png" class="tip" alt="Muscle cells may have many nuclei.">');
				answer += "Incorrect: Muscle cells may have many nuclei, ";
			}
			if ($('#answer #Done').find('#4').length) {
				$('#answer #feedbackD').html('<img src="assets/wrong.png" class="tip" alt="Gametes have complete sets of chromosomes.">');
				answer += "Correct: Gametes have complete sets of chromosomes.";
			} else{
				$('#answer #feedbackD').html('<img src="assets/correct.png" class="tip" alt="Gametes have complete sets of chromosomes.">');
				answer += "Incorrect: Gametes have complete sets of chromosomes.";
			}
			if($('#answer #Aone').find('#1').length && $('#answer #Btwo').find('#2').length && $('#answer #Cone').find('#3').length && $('#answer #Dtwo').find('#4').length) {
				$('#answer .feedback').html("<p class='green'><?php echo _("Great job! Correct statements: Axons connect nerve cells to other distant nerve cells. Muscle cells may have many nuclei. Incorrect: Red blood cells are much larger than white blood cells. Gametes have complete sets of chromosomes."); ?></p>");
				answer = "Subconscious: Smooth, Cardiac | Conscious: Skeletal";
			}
			$('#answer .statement').html('Feedback');
			*/

			if (answered == 0) {
				saveAnswer('electric-circuit-qq2-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			var allAnswered = true;

			$('.noAnswer').each( function(){
				if($(this).find('p').length > 0){
					allAnswered = false;
					return false;
				}
			});
			//if($('#question #feedbackA').find('#1').length || $('#question #feedbackB').find('#2').length || $('#question #feedbackC').find('#3').length || $('#question #feedbackD').find('#4').length) {
			if(!allAnswered){
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#question').fadeOut(function(){ 

					$('#answer table').html($('#question table').html());

					$('#answer').fadeIn();

					window.location.hash = '#answer';
					save();

				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "6.php#screen3";
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

		dropE0.droppable ({
			accept: drag5,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag5);
			}
		});

		dropE1.droppable ({
			accept: drag5,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag5);
				answered = 1;
			}
		});

		dropF0.droppable ({
			accept: drag6,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag6);
			}
		});

		dropF1.droppable ({
			accept: drag6,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag6);
				answered = 1;
			}
		});

		dropG0.droppable ({
			accept: drag7,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag7);
			}
		});

		dropG1.droppable ({
			accept: drag7,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag7);
				answered = 1;
			}
		});

		dropH0.droppable ({
			accept: drag8,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag8);
			}
		});

		dropH1.droppable ({
			accept: drag8,
			drop: function (event, ui) { 
				// drag4.detach().css({ 'z-index': 9999 }).appendTo($(this));
				//$(this).css({ 'margin-top': 0, padding: 0 }).html(drag1);
				$(this).css({ 'margin-top': '0', 'padding-bottom': '-10px' }).html(drag8);
				answered = 1;
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
