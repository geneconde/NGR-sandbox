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

	<title><?php echo _("Human Environmental Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #00A7D4; }
		h2 { color: #F84D82; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/17/bg.jpg); }

		#container { position: relative; z-index: 99; margin-top: -40px; left: 2%; }

		#col1 { height: 150px; margin-top: 40px; }
		#col2 { margin-top: 60px; }

		#col1 li, #col2 li { font-size: 20px; float: left; text-align: center; width: 25%; }
		.lBox img, .rBox img { width: 100px; margin: 0 auto; height: 100px; }
		#col1 li div, #col2 li div { width: 100%; }
		
		.lBox { width: auto; height: 142px; }
		.rBox { width: auto; }

		#reset { background-color: #00A7D4; cursor: pointer; margin: 0 auto 0; width: 140px; border-radius: 5px; text-align: center; cursor: pointer; color: #fff; }
		#reset:hover { background-color: #74BC3D; }

		/*html[dir=rtl] #container { right: 10%; }

		html[dir=rtl] #col1 { right: 40px; width: 100px !important; }
		html[dir=rtl] #col2 { right: 360px; width: 365px !important; }

		html[dir=rtl] .rBox { padding-left: 0; padding-right: 20px; }*/

		._jsPlumb_endpoint { cursor: pointer; z-index: 1000; }
		._jsPlumb_endpoint:nth-of-type(n+8) { cursor: default; z-index: 1000; }
		._jsPlumb_element_dragging { margin-top: 0; } 
		._jsPlumb_endpoint_connected { margin-top: 0; }

		#answer { display: none; }
		#answer #c2 span { font-size: 17px; }
		#answer #c3 span { font-size: 17px; }
		#answer div.feedback p{font-size: 21px; line-height: 26px;}
		
		#answer #container li > img { width: auto; margin: 0 0 0 14px; float: left; }

		/*html[dir=rtl] #answer #container img { margin: -26px -35px 0 0; float: right; }*/

		#answer p { text-align: center; }
		#answer .feedback {  }
		.answer div { text-align: left; }
		#col2 div, #col1 div  { text-align: center; }
		#buttons .next { display: none; }
		
		
		.lBox p { height: 42px; margin: 0; padding: 0 5px; line-height: 20px; }
		
			#col2 { margin-top: 40px; }

			@media all and (max-width: 1250px){
				#answer .rBox p { margin: 0;}
			#answer div.feedback p{font-size: 20px;}
			}

			@media all and (max-width: 877px){
				#col1 li:nth-child(2) p { font-size: 16px;}
			}

			@media all and (max-width: 877px){
				.answer p { font-size: 18px; }
				.feedback p { line-height: 24px !important; }
			}
			

		<?php if ($language == 'es_ES') : ?>
			#answer #col1 { margin-top: 30px; }
			#answer div.feedback p{margin-top: 0;}
			#answer > p { margin-top: 0; }
		<?php endif; ?>	
		
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
		<?php if($language == 'ar_EG') { ?>
			circle {
			    fill: rgb(242, 67, 69) !important;
			}
			div._jsPlumb_endpoint:nth-child(6) circle,
			div._jsPlumb_endpoint:nth-child(7) circle,
			div._jsPlumb_endpoint:nth-child(8) circle,
			div._jsPlumb_endpoint:nth-child(9) circle {
			    stroke: rgb(0, 167, 212) !important;
			    stroke-width: 2px !important;
			}
			svg { overflow: visible !important; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #2"); ?></h1>
						<!-- <h2 class="grid_12"><?php //echo _("For each example of human impact on the environment shown in the bootom row, connect the image to the top row onto the picture of the original natural environment that was impacted. Some items have multiple answers."); ?></h2> -->
						<h2 class="grid_12"><?php echo _("For each example of human impact on the environment shown in the top row, drag the dot from that image to the dot on the image in the bottom row that will match the natural environment that was impacted."); ?></h2>
						<div class="container grid_12">
							<div id="container">								
								<div class="clear"></div>
								<ul id="col1" class='grid_12'>
									<li><div class='lBox' id="c1"><p><?php echo _("Shipping Port"); ?></p><img src="assets/5/ca.jpg" /></div></li>
									<li><div class='lBox' id="c2"><p><?php echo _("Hydroelectric Dam Generator"); ?></p><img src="assets/5/cb.jpg" /></div></li>
									<li><div class='lBox' id="c3"><p><?php echo _("Clear-cut Logging"); ?></p><img src="assets/5/cc.jpg" /></div></li>
									<li><div class='lBox' id="c4"><p><?php echo _("Farm"); ?></p><img src="assets/5/cd.jpg" /></div></li>
								</ul>
								<div class="clear"></div>
								<ul id="col2" class='grid_12'>
									<li><div class='rBox' id="ca"><img src="assets/5/c1.jpg" /><p><?php echo _("Forest"); ?></p></div></li>
									<li><div class='rBox' id="cb"><img src="assets/5/c2.jpg" /><p><?php echo _("Coastline"); ?></p></div></li>
									<li><div class='rBox' id="cc"><img src="assets/5/c3.jpg" /><p><?php echo _("Meadow or Field"); ?></p></div></li>
									<li><div class='rBox' id="cd"><img src="assets/5/c4.jpg" /><p><?php echo _("River"); ?></p></div></li>
								</ul>

								<div class="clear"></div>
							</div>
						</div>
						
						<div class="clear"></div>

						<div class="grid_12">
							<p id="reset"><?php echo _("Reset"); ?></p>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="18.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Effects of human impact"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.jsPlumb-1.4.1-all-min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = [],
			answer2 = [],
			answer3 = [],
			answer4 = [],
			answer5 = [];

		function save() {
			answer1.sort(); answer2.sort(); answer3.sort(); answer4.sort(); answer5.sort();
			console.log(answer1 + ' ' + answer2 + ' ' + answer3 + ' ' + answer4 + ' ' + answer5);
	
			<?php if ($language == 'ar_EG') : ?>

				if (answer1 == 'cb') {
					$('#c1').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().append('<img src="assets/wrong.png">');
				}

				if (answer2 == 'cd') {
					$('#c2').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().append('<img src="assets/wrong.png">');
				}

				if (answer3 == 'ca') {
					$('#c3').parent().append('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().append('<img src="assets/wrong.png">');
				}

				if (answer4 == 'cc') {
					$('#c4').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().prepend('<img src="assets/wrong.png">');
				}
				
			<?php else : ?>

				if (answer1 == 'cb') {
					$('#c1').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer2 == 'cd') {
					$('#c2').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer3 == 'ca') {
					$('#c3').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().prepend('<img src="assets/wrong.png">');
				}
				
				if (answer4 == 'cc') {
					$('#c4').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().prepend('<img src="assets/wrong.png">');
				}
				

			<?php endif; ?>

			$('#answer .answer').html($('.container').html());
				
			if (answer1 == 'cb' && answer2 == 'cd' && answer3 == 'ca' && answer4 == 'cc' ) {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You got it! Shipping ports require a coastline on the seacoast or a large lake. Hydroelectric dam requires a river to dam up to create a reservoir to store water that will fall through the generators in the dam producing electricity. Logging and clear cutting happen in the forest natural environment. Farms are usually the result of plowing and replacing the natural environments of fields and meadows."); ?></p>");
			} else {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! Can you make additional connections? Shipping ports require a coastline on the seacoast or a large lake. Hydroelectric dam requires a river to dam up to create a reservoir to store water that will fall through the generators in the dam producing electricity. Logging and clear cutting happen in the forest natural environment. Farms are usually the result of plowing and replacing the natural environments of fields and meadows."); ?></p>");
			}

			//console.log(answer1);
			//console.log(answer2);
			//console.log(answer3);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer1); // Correct answer: cc
				saveAnswer('module-qq#-b', answer2); // Correct answer: ca
				saveAnswer('module-qq#-c', answer3); // Correct answer: cb
				saveAnswer('module-qq#-d', answer4); // Correct answer: cb

				answered = 1;
			}
		}

		$('#reset').click(function() {
			clear();
		});
		
		function clear(){
			checkAnswer = 0; 
		
			answer1 = [];
			answer2 = [];
			answer3 = [];
			answer4 = [];
			
			$("div[elid='c1']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c2']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c3']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c4']").removeClass("_jsPlumb_endpoint_connected");
		}
		
		$('.checkanswer').click(function() {
			if ($("div[elid='c1']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c2']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c3']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c4']").hasClass("_jsPlumb_endpoint_connected") 
				) {
				checkAnswer = 1;
			} else {
				checkAnswer = 0;//0
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
							answer1.push(target);
						} else if (source == 'c2') {
							answer2.push(target);
						} else if (source == 'c3') {
							answer3.push(target);
						} else if (source == 'c4') {
							answer4.push(target);
						} else if (source == 'c5') {
							answer5.push(target);
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
				document.location.href = "16.php";
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

		jsPlumb.bind("ready", function() {

			<?php if ($language == 'ar_EG') : ?>

				var startpointOptions = { isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Bottom"], maxConnections: -1,setDragAllowedWhenFull:true };
				var endpointOptions = { isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Top"], maxConnections: -1,setDragAllowedWhenFull:true };
				var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
				var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

			<?php else : ?>

				var startpointOptions = { paintStyle:{ fillStyle:"#F24345", strokeStyle: "#00A7D4", lineWidth: 3 }, isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Bottom"], maxConnections: -1,setDragAllowedWhenFull:true };
				var endpointOptions = { paintStyle:{ fillStyle:"#F24345" }, isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Top"], maxConnections: -1,setDragAllowedWhenFull:true, setDraggable:false };
				var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
				var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

			<?php endif; ?>

			jsPlumb.bind("jsPlumbConnection", function(conn) {
				if (conn.sourceId == 'c1') {
					conn.connection.setPaintStyle({
				    	strokeStyle: "#F84D82", lineWidth: 3,
					}); 
				} else if (conn.sourceId == 'c2') {
					conn.connection.setPaintStyle({
				    	strokeStyle: "#00A7D4", lineWidth: 3,
					}); 
				} else if (conn.sourceId == 'c3') {
					conn.connection.setPaintStyle({
				    	strokeStyle: "#FFB322", lineWidth: 3,
					}); 
				} else if (conn.sourceId == 'c4') {
					conn.connection.setPaintStyle({
				    	strokeStyle: "#74BC3D", lineWidth: 3,
					}); 
				} else if (conn.sourceId == 'c5') {
					conn.connection.setPaintStyle({
				    	strokeStyle: "#5F5F53", lineWidth: 3,
					}); 
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