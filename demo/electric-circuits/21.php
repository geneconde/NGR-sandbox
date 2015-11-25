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

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

			<link rel="stylesheet" href="css/grid.css">
	
	<style>
		.lBox p {
		    height: 33px !important;
		}
		.lBox img, .rBox img {
		    width: 70% !important;
		    margin: 0 auto;
		    height: 75% !important;
		}
		h1{ color: #D27A00; margin-top: 10px;}
		p{ color: #00424B; }
		li{ color: #AF5C51; }			
		
		.wrap { border-color: #FF00FF; }
		.bg { background-image: url(assets/21/QQ.jpg); overflow: hidden;}

		#container { position: relative;}

		#col1 { height: 150px; margin-top: 10px; }
		#col2 { margin-top: 60px; }

		#col1 li, #col2 li { font-size: 20px; float: left; text-align: center; width: 25%; }
		.lBox img, .rBox img { width: 100px; margin: 0 auto; height: 100px; }
		#col1 li div, #col2 li div { width: 100%; }
		
		.lBox { width: auto; height: 142px; }
		.lBox p { height: 42px; margin: 0; padding: 0 5px; line-height: 20px; }	
		.rBox { width: auto; }

		#reset { background-color: #d93c3e; cursor: pointer; margin: 30px auto; width: 140px; border-radius: 5px; text-align: center; cursor: pointer; color: #fff; }
		#reset:hover { background-color: #792122; }		


		._jsPlumb_endpoint { cursor: pointer; z-index: 1000; }
		._jsPlumb_endpoint:nth-of-type(n+8) { cursor: default; z-index: 1000; }
		._jsPlumb_element_dragging { margin-top: 0; } 
		._jsPlumb_endpoint_connected { margin-top: 0; }

		#answer { display: none; }
		
		#answer #container li > img { width: auto; margin: 0 0 0 14px; float: left; }
		html[dir=rtl] #answer #container li > img { float: right; }

		#answer p { text-align: center; }
		.answer div { text-align: left; }
		#col2 div, #col1 div  { text-align: center; }
		#buttons .next { display: none; }	
		
		@media only screen and (min-device-width: 768px) and (max-width: 1250px) { .container_12 .grid_12{ margin: 0px 8px 0px; } .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
		#answer .feedback p{ margin: 10px auto 0; }
		
		
	</style>
<style type="text/css"></style></head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #6")?></h1>
						<!-- <h2 class="grid_12"></h2> -->
						<h2 class="grid_12"><?php echo _("Drag lines between the objects to connect  the modern device powered by electricity to the older versions powered by hand."); ?></h2>
						<div class="container grid_12">
							<div id="container">								
								<div class="clear"></div>
								<ul id="col1" class="grid_12">
									<li><div class="lBox _jsPlumb_endpoint_anchor_" id="c1"><p></p><img src="assets/21/21a1.jpg"></div></li>
									<li><div class="lBox _jsPlumb_endpoint_anchor_" id="c2"><p></p><img src="assets/21/21a2.jpg"></div></li>
									<li><div class="lBox _jsPlumb_endpoint_anchor_" id="c3"><p></p><img src="assets/21/21a3.jpg"></div></li>
									<li><div class="lBox _jsPlumb_endpoint_anchor_" id="c4"><p></p><img src="assets/21/21a4.jpg"></div></li>
								</ul>
								<div class="clear"></div>
								<ul id="col2" class="grid_12">
									<li><div class="rBox _jsPlumb_endpoint_anchor_" id="ca"><img src="assets/21/21a5.jpg"><p></p></div></li>
									<li><div class="rBox _jsPlumb_endpoint_anchor_" id="cb"><img src="assets/21/21a6.jpg"><p></p></div></li>
									<li><div class="rBox _jsPlumb_endpoint_anchor_" id="cc"><img src="assets/21/21a7.jpg"><p></p></div></li>
									<li><div class="rBox _jsPlumb_endpoint_anchor_" id="cd"><img src="assets/21/21a8.jpg"><p></p></div></li>
								</ul>

								<div class="clear"></div>
							<div class="_jsPlumb_endpoint  _jsPlumb_endpoint_anchor_ ui-draggable ui-droppable" style="position: absolute; height: 26px; width: 26px; left: 99.46875px; top: 169px;">
								
									<circle cx="13" cy="13" r="10" version="1.1" xmlns="http://www.w3.org/1999/xhtml" style="" fill="#F24345" stroke="#00A7D4" stroke-width="3">
									</circle>
							</div>
							<div class="_jsPlumb_endpoint  _jsPlumb_endpoint_anchor_ ui-draggable ui-droppable" style="position: absolute; height: 26px; width: 26px; left: 306.984375px; top: 169px;">
								
									<circle cx="13" cy="13" r="10" version="1.1" xmlns="http://www.w3.org/1999/xhtml" style="" fill="#F24345" stroke="#00A7D4" stroke-width="3">
									</circle>
							</div>
							<div class="_jsPlumb_endpoint  _jsPlumb_endpoint_anchor_ ui-draggable ui-droppable" style="position: absolute; height: 26px; width: 26px; left: 514.5px; top: 169px;">
								
									<circle cx="13" cy="13" r="10" version="1.1" xmlns="http://www.w3.org/1999/xhtml" style="" fill="#F24345" stroke="#00A7D4" stroke-width="3">
									</circle>
								
							</div>
							<div class="_jsPlumb_endpoint  _jsPlumb_endpoint_anchor_ ui-draggable ui-droppable" style="position: absolute; height: 26px; width: 26px; left: 722.015625px; top: 169px;">
								
									<circle cx="13" cy="13" r="10" version="1.1" xmlns="http://www.w3.org/1999/xhtml" style="" fill="#F24345" stroke="#00A7D4" stroke-width="3">
									</circle>
								
							</div>
							<div class="_jsPlumb_endpoint  _jsPlumb_endpoint_anchor_ ui-draggable ui-droppable" style="position: absolute; height: 20px; width: 20px; left: 102.46875px; top: 240px;">
								
									<circle cx="10" cy="10" r="10" version="1.1" xmlns="http://www.w3.org/1999/xhtml" style="" fill="#F24345" stroke="none">
									</circle>
								
							</div>
							<div class="_jsPlumb_endpoint  _jsPlumb_endpoint_anchor_ ui-draggable ui-droppable" style="position: absolute; height: 20px; width: 20px; left: 309.984375px; top: 240px;">
								
									<circle cx="10" cy="10" r="10" version="1.1" xmlns="http://www.w3.org/1999/xhtml" style="" fill="#F24345" stroke="none">
									</circle>
								
							</div>
							<div class="_jsPlumb_endpoint  _jsPlumb_endpoint_anchor_ ui-draggable ui-droppable" style="position: absolute; height: 20px; width: 20px; left: 517.5px; top: 240px;">
								
									<circle cx="10" cy="10" r="10" version="1.1" xmlns="http://www.w3.org/1999/xhtml" style="" fill="#F24345" stroke="none">
									</circle>
								
							</div>
							<div class="_jsPlumb_endpoint  _jsPlumb_endpoint_anchor_ ui-draggable ui-droppable" style="position: absolute; height: 20px; width: 20px; left: 725.015625px; top: 240px;">
								
									<circle cx="10" cy="10" r="10" version="1.1" xmlns="http://www.w3.org/1999/xhtml" style="" fill="#F24345" stroke="none">
									</circle>
								
							</div>
						</div>
						</div>
						
						<div class="clear"></div>

						<div class="grid_12">
							<p id="reset"><?php echo _("Reset"); ?></p>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #6 - How did I do?"); ?></h1>

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
        <a href="22.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
        <a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
    </div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.jsPlumb-1.4.1-all-min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to  when ported in the modules folder */
			checkAnswer = 0,
			answer1 = [],
			answer2 = [],
			answer3 = [],
			answer4 = [],
			answer5 = [];

		function save() {
			answer1.sort(); answer2.sort(); answer3.sort(); answer4.sort(); answer5.sort();
			console.log(answer1 + ' ' + answer2 + ' ' + answer3 + ' ' + answer4 + ' ' + answer5);
	
			if (answer1 == 'cd') {
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

				if (answer4 == 'cc') {
					$('#c4').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().prepend('<img src="assets/wrong.png">');
				}

			$('#answer .answer').html($('.container').html());
				
			if (answer1 == 'cd' && answer2 == 'ca' && answer3 == 'cb' && answer4 == 'cc' ) {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it!  A washing machine, a clock, a drill and a mixer.  All these items used to be powered by hand, but are now powered by electricity.!"); ?></p>");
			} else {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite!  A modern electric washing machine looks quite different from the hold hand-powered version.  The same goes for the hand drill and mixer.  Although the objects look quite different from their historical counterparts, they allow us to do the same jobs with less effort."); ?></p>");
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
				alert("Please select your answer.");
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
				document.location.href = "20.php";
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

			
				var startpointOptions = { paintStyle:{ fillStyle:"#F24345", strokeStyle: "#00A7D4", lineWidth: 3 }, isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Bottom"], maxConnections: -1,setDragAllowedWhenFull:true };
				var endpointOptions = { paintStyle:{ fillStyle:"#F24345" }, isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Top"], maxConnections: -1,setDragAllowedWhenFull:true, setDraggable:false };
				var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
				var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

			
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

</body></html>