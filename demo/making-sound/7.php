<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = structures-and-properties-of-matter';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'structures-and-properties-of-matter-qq2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>

		h1 { color: #005a8f; }

		h2 { color: #128575;}
		
		.bg { background-image: url(assets/qq-and-qc-bg.jpg); }

		#container { position: relative; z-index: 99; margin-top: -40px; left: 5%; }

		#col1 { position: absolute; top: 80px; left: 40px; width: 280px !important; }
		#col2 { position: absolute; top: 80px; right: 140px; width: 240px !important; }

		#col1 li { padding: 5px 30px 5px 20px; font-size: 20px; }
		#col2 li { padding: 5px 0 5px 0; font-size: 20px; }

		#col1 li div { padding: 3px 15px; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
		#col1 li div img {  height: 50px; margin: 0;}

		/* #container li:first-of-type div { background: #FBE393; margin-bottom: 15px; } */
		
		.rBox { width: auto; padding-left: 20px; padding-right: 0; }

		#reset { background-color: #6F57E9; cursor: pointer; margin: 320px auto 0; width: 140px; border-radius: 5px; text-align: center; cursor: pointer; color: #fff; }
		#reset:hover { background-color: #787AFA; }

		html[dir=rtl] #container { right: 10%; }

		html[dir=rtl] #col1 { right: 40px; width: 100px !important; }
		html[dir=rtl] #col2 { right: 360px; width: 365px !important; }

		html[dir=rtl] .rBox { padding-left: 0; padding-right: 20px; }

		._jsPlumb_endpoint { cursor: pointer; z-index: 1000; }
		._jsPlumb_element_dragging { margin-top: 0; } 
		._jsPlumb_endpoint_connected { margin-top: 0; }

		#answer { display: none; }

		#answer #container li > img { width: auto; margin: 0 0 0 -30px; float: left; }

		html[dir=rtl] #answer #container li > img { margin: -26px -35px 0 0; float: right; }

		#answer p { text-align: center; }
		#answer .feedback { margin-top: 290px; }

		#buttons .next { display: none; }

		#col1-header { 			
			background: #FBE393; 
			margin-bottom: 15px; 
			width: 200px;
			position: absolute; 
			left: 60px; 
			top: 44px;
			padding: 0 16px;

			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		}

		#col2-header { 			
			background: #FBE393; 
			margin-bottom: 15px; 
			width: 228px;
			position: absolute; 
			right: 141px; 
			top: 44px;
			padding: 0 6px;

			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		}

		@media all and (max-width: 960px) {
			#col1 { position: absolute; top: 80px; left: 0px; width: 280px !important; }
			#col2 { position: absolute; top: 80px; right: 100px; width: 240px !important; }
			#col1-header { left: 19px; }
			#col2-header { right: 101px; }
		}
		#col1 { text-align: center; }
		#col1 span {
		    position: absolute;
		    margin-top: 10px;
		    margin-left: -38%;
		}
		#col1 li div img {
		    border: 1px solid black;
		    margin-left: -25px;
		}

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>
						<h2 class="grid_12"><?php echo _("Connect the wave to the sentence that best describes it."); ?></h2>

						<div class="container grid_12">
							<div id="container">
								
								<ul id="col1">									
									<li><div id="c1" class='lBox'><img src="assets/7/7a.jpg"/><span><?php echo _("A"); ?></span></div></li>
									<li><div id="c2" class='lBox'><img src="assets/7/7b.jpg"/><span><?php echo _("B"); ?></span></div></li>
									<li><div id="c3" class='lBox'><img src="assets/7/7c.jpg"/><span><?php echo _("C"); ?></span></div></li>
									<li><div id="c4" class='lBox'><img src="assets/7/7d.jpg"/><span><?php echo _("D"); ?></span></div></li>
								</ul>

								<ul id="col2">
									<li><div class='rBox' id="ca"><?php echo _("This wave has the longest wavelength."); ?></div></li>
									<li><div class='rBox' id="cb"><?php echo _("This wave has the least energy."); ?></div></li>
									<li><div class='rBox' id="cc"><?php echo _("This wave has the same frequency as wave C."); ?></div></li>
									<li><div class='rBox' id="cd"><?php echo _("This wave has the shortest wavelength."); ?></div></li>
								</ul>

								<div class="clear"></div>
							</div>
						</div>

						<div class="grid_12">
							<p id="reset"><?php echo _("Reset"); ?></p>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer grid_12"></div>
						<div class="feedback grid_12"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Wavelength and frequency"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.jsPlumb-1.4.1-all-min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/modernizr.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '',
			answer3 = '',
			answer4 = '';

		function save() {

			<?php if ($language == 'ar_EG') : ?>

				if (answer1 == 'cd') {
					$('#c1').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().append('<img src="assets/wrong.png">');
				}

				if (answer2 == 'cc') {
					$('#c2').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().append('<img src="assets/wrong.png">');
				}

				if (answer3 == 'cb') {
					$('#c3').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().append('<img src="assets/wrong.png">');
				}

				if (answer4 == 'ca') {
					$('#c4').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().append('<img src="assets/wrong.png">');
				}

			<?php else : ?>

				if (answer1 == 'cd') {
					$('#c1').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer2 == 'cc') {
					$('#c2').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer3 == 'cb') {
					$('#c3').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer4 == 'ca') {
					$('#c4').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().prepend('<img src="assets/wrong.png">');
				}

			<?php endif; ?>

			$('#answer .answer').html($('.container').html());
				
			if (answer1 == 'cd' && answer2 == 'cc' && answer3 == 'cb' && answer4 == 'ca') {
				$('#answer .feedback').html("<br><p class='green grid_11'><img src='assets/correct.png'><?php echo _('You\'ve got it! B and C have the same wavelength, and therefore same frequency, but C is the least energetic as shown by the minimal stretching and compression of the slinky, A has the shortest distance between compressions, and D has the greatest distance between compressions.'); ?></p>");
			} else {
				$('#answer .feedback').html("<br><p class='red grid_11'><img src='assets/wrong.png'><?php echo _('Not quite! B and C have the same wavelength, and therefore same frequency, but C is the least energetic as shown by the minimal stretching and compression of the slinky, A has the shortest distance between compressions, and D has the greatest distance between compressions.'); ?></p>");
			}

			console.log(answer1);
			console.log(answer2);
			console.log(answer3);

			if (answered == 0) {
				saveAnswer('making-sound-qq2-a', answer1); // Correct answer: cc
				saveAnswer('making-sound-qq2-b', answer2); // Correct answer: ce
				saveAnswer('making-sound-qq2-c', answer3); // Correct answer: cd
				saveAnswer('making-sound-qq2-d', answer4);

				answered = 1;
			}
		}

		$('#reset').click(function() { 
			checkAnswer = 0; 
		
			$("div[elid='c1']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c2']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c3']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c4']").removeClass("_jsPlumb_endpoint_connected");
		});

		$('.checkanswer').click(function() {
			if ($("div[elid='c1']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c2']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c3']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c4']").hasClass("_jsPlumb_endpoint_connected")) {
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
				document.location.href = "6.php#screen2";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {

					$('#container').find('li > img').remove();

					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});

		setTimeout(function(){
			jsPlumb.bind("ready", function() {
		
					<?php if ($language == 'ar_EG') : ?>
		
						var startpointOptions = { paintStyle:{ fillStyle:"#057499", strokeStyle: "#00A7D4", lineWidth: 3 },isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Left"] };
						var endpointOptions = { paintStyle:{ fillStyle:"#057499" }, isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Right"] };
						var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
						var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);
		
					<?php else : ?>
		
						var startpointOptions = { paintStyle:{ fillStyle:"#6F57E9", strokeStyle: "#787AFA", lineWidth: 3 },isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Right"] };
						var endpointOptions = { paintStyle:{ fillStyle:"#6F57E9" },isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Left"] };
						var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
						var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);
		
					<?php endif; ?>
		
					jsPlumb.bind("jsPlumbConnection", function(conn) {
						if (conn.sourceId == 'c1') {
							answer1 = conn.targetId;
							conn.connection.setPaintStyle({
						    	strokeStyle: "#E14769", lineWidth: 3,
							}); 
						} else if (conn.sourceId == 'c2') {
							answer2 = conn.targetId;
							conn.connection.setPaintStyle({
						    	strokeStyle: "#EDB80A", lineWidth: 3,
							}); 
						} else if (conn.sourceId == 'c3') {
							answer3 = conn.targetId;
							conn.connection.setPaintStyle({
						    	strokeStyle: "#9BBF21", lineWidth: 3,
							}); 
						} else if (conn.sourceId == 'c4') {
							answer4 = conn.targetId;
							conn.connection.setPaintStyle({
						    	strokeStyle: "#F16D2D", lineWidth: 3,
							}); 
						}  
		
						$('#reset').click(function() { 
							jsPlumb.detach(conn);
		
							checkAnswer = 0;
						});
					});
				});
		}, 0.3);
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
