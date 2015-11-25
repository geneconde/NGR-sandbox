<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10 to 15) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
	//require_once '../../verify.php';
	require_once "locale.php";

	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(12, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('how-light-behaves');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'], $problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("How Light Behaves"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #31C1B7; }
		h2 { color: #EB6966; }
		
		.wrap { border-color: #9EF5FF; }
		.bg { background-image: url(assets/13/bg.jpg); }
		
		#question table, #answer table { border: 0; margin: 0 auto; padding: 0; font-weight: normal; }
		#question th, #answer th { height: 30px; width: 130px; color: black; }
		#question table {float: left;}
		#question th, #answer th { border: 3px solid #1CCFF1; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; }
		#question td { height: 110px; width: 130px; border: 3px solid #f49e9c; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; padding: 5px; margin: 0 auto; text-align: center; top: 0; left: 0; }
		#question td img { width: 95%; vertical-align: middle; margin: 0 auto; }

		.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

		.qtip-wrapper { font-size: 15px; }
		
		#answer td { border: 3px solid #f49e9c; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; padding: 5px; margin: 0 auto; text-align: center; top: 0; left: 0; }
		#answer td img { width: auto; }

		#buttons .next { display: none; }

		@media (max-width: 899px) {
			#question table { width: 50%; }
			#question td { width: auto; height: 100px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #5"); ?></h1>
						<h2 class="grid_6"><?php echo _("Seeing isn't always believing. Artists are able to create a wide variety of images these days with the help of computers. These computer-generated images can be works of art that would be impossible to achieve with cameras alone. Unfortunately, they can also result in unnatural images that don't portray nature correctly. Given that refraction bends different colors of light by different amounts, changing the direction of red light the least, and blue and violet light the most, look at the images below and drag them into the correct column to show which ones got the science right and which ones got it wrong."); ?></h2>

						<table >
							<tr id="first">
								<th><?php echo _("Items"); ?></th>
								<th><?php echo _("Got it Right!"); ?></th>
								<th><?php echo _("Got it Wrong!"); ?></th>
							</tr>
							<tr>
								<td data-name="none"><img src="assets/13/13a.jpg" class="grab" id="pic1"></td>
								<td data-name="right"></td>
								<td data-name="wrong"></td>
							</tr>
							<tr>
								<td data-name="none"><img src="assets/13/13b.jpg" class="grab" id="pic2"></td>
								<td data-name="right"></td>
								<td data-name="wrong"></td>
							</tr>
							<tr>
								<td data-name="none"><img src="assets/13/13c.jpg" class="grab" id="pic3"></td>
								<td data-name="right"></td>
								<td data-name="wrong"></td>
							</tr>
							<tr>
								<td data-name="none"><img src="assets/13/13d.jpg" class="grab" id="pic4"></td>
								<td data-name="right"></td>
								<td data-name="wrong"></td>
							</tr>
						</table>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quick Check #5"); ?> - <?php echo _("How did I do?"); ?></h1>
						<div id="table-answer"></div>
						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.qtip.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		$(document).ready(function() {
			$('#pic1').qtip({ content: "<?php echo _("Prism 1"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
			$('#pic2').qtip({ content: "<?php echo _("Prism 2"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
			$('#pic3').qtip({ content: "<?php echo _("Prism 3"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
			$('#pic4').qtip({ content: "<?php echo _("Prism 4"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		});	

		function save() {

			$('#question img').draggable('disable');
					
				$('table').appendTo('#table-answer');

				$("table tr:nth-child(1) th:first").before("<th><?php echo _("Answer"); ?></th>");
					var answers = ['right','wrong','right','wrong'];
					for(var i = 1; i < 5; i++) {
						window["answer" + i] = $('#pic' + i).parent().data('name');
						if(answers[i - 1] == window["answer" + i]) {
							$('table tr:nth-child(' + (i + 1) + ') td:first').before('<td><img src="assets/correct.png" class="answer-icon"></td>');
							
						} else {
							$('table tr:nth-child(' + (i + 1) + ') td:first').before('<td><img src="assets/wrong.png" class="answer-icon"></td>');
						}
						if(window["answer" + 1] == 'right' && window["answer" + 2] == 'wrong' && window["answer" + 3] == 'right' && window["answer" + 4] == 'wrong'){
							$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Way to go! The images that show the red light bending the least and the violet light bending the most have got the science right."); ?></p>");	
						}else {
							$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! An image can look real, but people can use science to determine whether or not that's the case. In this example, a couple of the images show the violet light changing direction the least, and the red light changing direction the most. That's not how it works in nature!"); ?></p>");
						}
					}
					
			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: Dropped...
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('#items:has(img)').length;

			if (checkAnswer == 1) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#question').fadeOut(function() { 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "12.php#screen2";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('table').appendTo('#question');
					$('tr:first-child th:first-child').remove();
					$('td:first-child').each(function() { $(this).remove(); });
					$('#question img').draggable('enable');

					window.location.hash = '';
				});
			}
		});

		$('#question img').draggable({ revert: 'invalid', containment: "tbody", scroll: false });
		
			$('#question img').each(function() {
				var image = $(this);
				image.mousedown(function() { image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
				image.mouseup(function() { image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
				
				var p = $(this).parent().parent().children(':not(:first-child)');
				var drop1, drop2, drop3, drop4;
				
				for(var i = 1; i < 5; i++) {
					window['drop' + i] = image.parent().parent().children(':nth-child(' + (i + 1) +')');
					window['drop' + i].droppable ({
						accept: image,
						drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo($(this)); }
					});
				}
			});

		$('#reset p').on('click', function() {
			item = $('#question').find('.drag').detach().css({ 'margin': '10px 0' }).draggable({ disabled: false });

			$('#items').html(item);
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
