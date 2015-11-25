<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'human-impact-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Healthy Eating"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #8a0085; }
		h2 { color: #ff9a23;}
		
		.wrap { border-color: #FCF8ED; 
				border-left: 1px dashed #F593FF;
				border-right: 1px dashed #F593FF; 
		}
		.bg { background-image: url(assets/18/bg.jpg); overflow: hidden; }

		#container { position: relative; z-index: 99; margin-top: -40px; left: 2%; }

		#col1 { height: 200px; margin-top: 40px; }
		#col2 { height: 160px; margin-top: 40px; }
		#answer #col1 { height: 228px; margin-top: 15px;}

		#col1 li, #col2 li { font-size: 20px; float: left; text-align: center; width: 20%;}
		.lBox img, .rBox img { width: 84%; margin: 0 15px; }
		#col1 li div, #col2 li div { width: 100%; }

		.lBox { width: auto; padding-bottom: 10px;}
		.rBox { width: auto; }

		#reset { background-color: #00A7D4; cursor: pointer; margin: 0 auto 0; width: 140px; border-radius: 5px; text-align: center; cursor: pointer; color: #fff; }
		#reset:hover { background-color: #74BC3D; }


		html[dir=rtl] #container { right: 10%; }

		html[dir=rtl] #col1 { right: -90px; }
		html[dir=rtl] #col2 { right: -90px; }

		html[dir=rtl] .rBox { padding-left: 0; padding-right: 0; }

		._jsPlumb_endpoint { cursor: pointer; z-index: 1000; }
		._jsPlumb_element_dragging { margin-top: 0; } 
		._jsPlumb_endpoint_connected { }

		#answer { display: none; }
		#answer #reset { display: none;}
		#answer #container li > img { width: auto; margin: 0 0 0 14px; float: left; }

		/*html[dir=rtl] #answer #container img { margin: -26px -35px 0 0; float: right; } */

		#answer p { text-align: center; }
		#answer .feedback {  }
		.answer div { text-align: center; }
		.answer #col2 div { text-align: center; }
		#buttons .next { display: none; }
		.mtop { margin-top: -30px;}
		.text { display: inline-block; margin-top: 10px;}
		.fix1 { margin-top: -10px; padding-bottom: 10px; }

		<?php if($language == 'es_ES') : ?>

			p { line-height: 30px; }
			.feedback p {line-height: 22px; margin: 0;}
			.lBox { height: 180px; }

			@media only screen and (min-width: 910px) {
				.lBox { height: 185px; padding-bottom: 0; }
			}
		<?php endif; ?>

		@media only screen and (max-width: 800px) {
			.feedback p { margin: 0;}
		}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?></h1>
						<h2 class="grid_12"><?php echo _("Match the foods on the top with what they contain on the bottom."); ?></h2>

						<div class="container grid_12">
							<div id="container">
								<ul id="col1" class='grid_12'>
									<li><div class='lBox' id="c1"><img src="assets/18/milk.jpg" /><?php echo _("Milk"); ?>	</div></li>
									<li><div class='lBox' id="c2"><img src="assets/18/corn.jpg" /><?php echo _("Whole Cornmeal"); ?>	</div></li>
									<li><div class='lBox' id="c3"><img src="assets/18/avocado.jpg" /><?php echo _("Avocados"); ?></div></li>
									<li><div class='lBox' id="c4"><img src="assets/18/fried-chicken.jpg" /><?php echo _("Chicken"); ?></div></li>
									<li><div class='lBox' id="c5"><img src="assets/18/grape-fruit.jpg" /><?php echo _("Grape Fruit"); ?>	</div></li>
								</ul>
								<div class="clear"></div>
								<ul id="col2" class='grid_12'>
									<li><div class='rBox' id="ca"><span class="text"><?php echo _("Protein"); ?></span><img src="assets/18/protein.jpg" /></div></li>
									<li><div class='rBox' id="cb"><span class="text"><?php echo _("Iron"); ?></span><img src="assets/18/iron.jpg" /></div></li>
									<li><div class='rBox' id="cc"><span class="text"><?php echo _("Natural Oils"); ?></span><img src="assets/18/natural-oils.jpg" /></div></li>
									<li><div class='rBox' id="cd"><span class="text"><?php echo _("Calcium"); ?></span><img src="assets/18/calcium.jpg" /></div></li>
									<li><div class='rBox' id="ce"><span class="text"><?php echo _("Vitamin C"); ?></span><img src="assets/18/vitamin-c.jpg" /></div></li>
								</ul>

								<div class="clear"></div>
							</div>

						<div class="grid_12">
							<p id="reset"><?php echo _("Reset"); ?></p>
						</div>
						</div>
						
						<div class="clear"></div>

					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12 fix1"><?php echo _("You answered..."); ?></p>

						<div class="answer grid_12"></div>
						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="17.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Sorting ingredients..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.jsPlumb-1.4.1-all-min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<script>

	$(window).resize(function(){
		jsPlumb.repaintEverything();
	});

		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '',
			answer3 = '',
			answer4 = '',
			answer5 = '';

		function save() {
			//console.log(answer1 + ' ' + answer2 + ' ' + answer3 + ' ' + answer4 + ' ' + answer5);

			<?php if ($language == 'ar_EG') : ?>

				if (answer1 == 'cdcd') {
					$('#c1').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer2 == 'cbcb' || answer2 == 'ccca') {
					$('#c2').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer3 == 'cccc' || answer3 == 'ccca') {
					$('#c3').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer4 == 'caca') {
					$('#c4').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().prepend('<img src="assets/wrong.png">');
				}
				
				if (answer5 == 'cece') {
					$('#c5').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c5').parent().prepend('<img src="assets/wrong.png">');
				}

			<?php else : ?>

				if (answer1 == 'cdcd') {
					$('#c1').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer2 == 'cbcb') {
					$('#c2').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer3 == 'cccc' ) {
					$('#c3').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().prepend('<img src="assets/wrong.png">');
				}
				
				if (answer4 == 'caca') {
					$('#c4').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().prepend('<img src="assets/wrong.png">');
				}
				
				if (answer5 == 'cece') {
					$('#c5').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c5').parent().prepend('<img src="assets/wrong.png">');
				}

			<?php endif; ?>

			$('#answer .answer').html($('.container').html());
				
			if (answer1 == 'cdcd' && answer2 == 'cbcb' && answer3 == 'cccc' && answer4 == 'caca' && answer5 == 'cece' ) {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Correct! Milk has calcium, whole cornmeal has iron, avocados have natural oils, chicken has protein, and grapefruit has vitamin C. All these foods have even more in them than what is listed.'); ?></p>");
			} else {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Not quite. Milk has calcium, whole cornmeal has iron, avocados have natural oils, chicken has protein, and grapefruit has vitamin C. All these foods have even more in them than what is listed.'); ?></p>");
			}

			//console.log(answer1);
			//console.log(answer2);
			//console.log(answer3);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer1); // Correct answer: cc
				saveAnswer('module-qq#-b', answer2); // Correct answer: ca
				saveAnswer('module-qq#-c', answer3); // Correct answer: cb
				saveAnswer('module-qq#-d', answer4); // Correct answer: cb
				saveAnswer('module-qq#-e', answer5); // Correct answer: cb

				answered = 1;
			}
		}

		$('#reset').click(function() {
			clear();
		});
		
		function clear(){
			checkAnswer = 0; 
		
			answer1 = '';
			answer2 = '';
			answer3 = '';
			answer4 = '';
			answer5 = '';
			
			$("div[elid='c1']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c2']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c3']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c4']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c5']").removeClass("_jsPlumb_endpoint_connected");
		}
		
		$('.checkanswer').click(function() {
			if ($("div[elid='c1']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c2']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c3']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c4']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c5']").hasClass("_jsPlumb_endpoint_connected")
				) {
				checkAnswer = 1;
			} else {
				checkAnswer = 0;
			}

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				
				jsPlumb.bind("ready", function() {
					// get all connected answers
					var sourcecon = jsPlumb.getConnections({source: e}) ;
			        for(i=0; i<sourcecon.length; i++) 
			        {
			            var target = sourcecon[i].targetId;
			            var source = sourcecon[i].sourceId;
			           
						if (source == 'c1') {
							answer1 += target;
						} else if (source == 'c2') {
							answer2 += target;
						} else if (source == 'c3') {
							answer3 += target;
						} else if (source == 'c4') {
							answer4 += target;
						} else if (source == 'c5') {
							answer5 += target;
						} 
			        }
			        
	     			console.log(answer1 + " " + answer2 + " " + answer3 + " " + answer4 + " " + answer5);
	    		});

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
				document.location.href = "17.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() {
					$('.checkanswer').fadeIn();
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {
					
					$('#container').find('li > img').remove();
					$('#question').fadeIn();
					$( "#reset" ).trigger( "click" );
					window.location.hash = '';
				});
			}
		});

	setTimeout(function(){

		jsPlumb.bind("ready", function() {

			<?php if ($language == 'ar_EG') : ?>

				var startpointOptions = { isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Bottom"] };
				var endpointOptions = { isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Top"] };
				var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
				var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

			<?php else : ?>

				var startpointOptions = { isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Bottom"] };
				var endpointOptions = { isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Top"] };
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
				}else if (conn.sourceId == 'c4') {
					answer4 = conn.targetId;
				} else if (conn.sourceId == 'c5') {
					answer5 = conn.targetId;
				}  

				$('#reset').click(function() { 
					jsPlumb.detach(conn);

					checkAnswer = 0;
				});
			});
		});

	}, 500);

	
		
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>