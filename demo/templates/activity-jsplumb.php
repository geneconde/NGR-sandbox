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

		#container { position: relative; z-index: 99; margin-top: -40px; left: 10%; width: 900px; }

		#col1 { position: absolute; top: 40px; left: 40px; width: 100px !important; }
		#col2 { position: absolute; top: 40px; right: 220px; width: 360px !important; }

		#col1 li { padding: 5px 20px 5px 10px; font-size: 20px; }
		#col2 li { padding: 5px 0 5px 20px; font-size: 20px; }

		.rBox { width: auto; padding-left: 20px; padding-right: 0; }

		#reset { background-color: #000; cursor: pointer; margin: 180px auto 0; width: 140px; border-radius: 5px; text-align: center; cursor: pointer; color: #fff; }
		#reset:hover { background-color: #333; }

		html[dir=rtl] #container { right: 10%; }

		html[dir=rtl] #col1 { right: 40px; width: 100px !important; }
		html[dir=rtl] #col2 { right: 360px; width: 365px !important; }

		html[dir=rtl] .rBox { padding-left: 0; padding-right: 20px; }

		._jsPlumb_endpoint { cursor: pointer; }
		._jsPlumb_element_dragging { margin-top: 0; } 
		._jsPlumb_endpoint_connected { margin-top: 0; }

		#answer { display: none; }

		#answer #container img { width: auto; margin: 0 0 0 -30px; float: left; }

		html[dir=rtl] #answer #container img { margin: -26px -35px 0 0; float: right; }

		#answer p { text-align: center; }
		#answer .feedback { margin-top: 170px; }

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

						<div class="container grid_12">
							<div id="container">
								<ul id="col1">
									<li><div class='lBox' id="c1"><?php echo _("A"); ?></div></li>
									<li><div class='lBox' id="c2"><?php echo _("B"); ?></div></li>
									<li><div class='lBox' id="c3"><?php echo _("C"); ?></div></li>
								</ul>

								<ul id="col2">
									<li><div class='rBox' id="ca"><?php echo _("A"); ?></div></li>
									<li><div class='rBox' id="cb"><?php echo _("B"); ?></div></li>
									<li><div class='rBox' id="cc"><?php echo _("C"); ?></div></li>
								</ul>

								<div class="clear"></div>
							</div>
						</div>

						<div class="grid_12">
							<p id="reset"><?php echo _("Reset"); ?></p>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer grid_12"></div>
						<div class="feedback grid_12"></div>
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
	<script src="js/jquery.jsPlumb-1.4.1-all-min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '',
			answer3 = '';

		function save() {

			<?php if ($language == 'ar_EG') : ?>

				if (answer1 == 'cc') {
					$('#c1').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().append('<img src="assets/wrong.png">');
				}

				if (answer2 == 'ca') {
					$('#c2').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().append('<img src="assets/wrong.png">');
				}

				if (answer3 == 'cb') {
					$('#c3').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().append('<img src="assets/wrong.png">');
				}

			<?php else : ?>

				if (answer1 == 'cc') {
					$('#c1').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer2 == 'ca') {
					$('#c2').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer3 == 'cb') {
					$('#c3').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().prepend('<img src="assets/wrong.png">');
				}

			<?php endif; ?>

			$('#answer .answer').html($('.container').html());
				
			if (answer1 == 'cc' && answer2 == 'ca' && answer3 == 'cb') {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct"); ?></p>");
			} else {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			console.log(answer1);
			console.log(answer2);
			console.log(answer3);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer1); // Correct answer: cc
				saveAnswer('module-qq#-b', answer2); // Correct answer: ca
				saveAnswer('module-qq#-c', answer3); // Correct answer: cb

				answered = 1;
			}
		}

		$('#reset').click(function() { 
			checkAnswer = 0; 
		
			$("div[elid='c1']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c2']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c3']").removeClass("_jsPlumb_endpoint_connected");
		});

		$('.checkanswer').click(function() {
			if ($("div[elid='c1']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c2']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c3']").hasClass("_jsPlumb_endpoint_connected")) {
				checkAnswer = 1;
			} else {
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

				$('#question').fadeOut(function(){ 

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

					$('#container').find('img').remove();

					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});

		jsPlumb.bind("ready", function() {

			<?php if ($language == 'ar_EG') : ?>

				var startpointOptions = { isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Left"] };
				var endpointOptions = { isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Right"] };
				var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
				var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

			<?php else : ?>

				var startpointOptions = { isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Right"] };
				var endpointOptions = { isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Left"] };
				var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
				var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

			<?php endif; ?>

			jsPlumb.bind("jsPlumbConnection", function(conn) {
				if (conn.sourceId == 'c1') {
					answer1 = conn.targetId;
				} else if (conn.sourceId == 'c2') {
					answer2 = conn.targetId;
				} else if (conn.sourceId == 'c3') {
					answer3 = conn.targetId;
				} 

				$('#reset').click(function() { 
					jsPlumb.detach(conn);

					checkAnswer = 0;
				});
			});
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
