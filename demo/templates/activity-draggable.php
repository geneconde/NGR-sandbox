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

	<title><?php echo _("Module"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #000; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/#/bg.jpg); }

		.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

		.drop { border: 1px solid #ccc; height: 35px; padding: 0 10px; }

		#items { min-height: 33px; }

		#reset p { background-color: #000; cursor: pointer; color: #fff; text-align: center; }

		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?></h1>
						<h2 class="grid_12"><?php echo _("Question"); ?></h2>

						<div class="bounds">
							<div id="items" class="grid_4 prefix_2">
								<p class="drag" id="drag"><?php echo _("Drag me!"); ?></p>
							</div>

							<div class="grid_4 suffix_2">
								<p class="drop"></p>
							</div>

							<div class="clear"></div>
						</div>

						<div id="reset" class="grid_4 prefix_4 suffix_4">
							<p><?php echo _("Reset"); ?></p>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {
			if ($('.drop').html() != "") {
				$('.answer').html('Dropped...');
				$('.feedback').html("<p class='green'><img src='assets/correct.png'>Correct</p>");

				answer = 1;
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: Dropped...
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('.drop').html();

			if (checkAnswer == "") {
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
				document.location.href = "#";
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

		$('.drag').draggable({ revert: true, revertDuration: 0, containment: ".bounds", scroll: false });

		$('.drag').each(function() {
			$(this).mousedown(function() { $(this).removeClass('grab').addClass('grabbing'); });
			$(this).mouseup(function() { $(this).removeClass('grabbing').addClass('grab'); });
		});

		$('.drop').droppable({
			accept: '.drag',

			drop: function (event, ui) { 
				var draggable = ui.draggable;
				var id = draggable.attr('id');
				
				if (id == 'drag') {
					$('#drag').detach().css({ 'margin': '0' }).draggable({ disabled: true }).appendTo($('.drop'));
				}
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
