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

	<title><?php echo _("Module Title"); ?></title>

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
			
		
		.bg { background-image: url(bg.jpg); }

		#container { position: relative;}

		#col1 { height: 150px; margin-top: 40px; }
		#col2 { margin-top: 60px; }

		#col1 li, #col2 li { font-size: 20px; float: left; text-align: center; width: 25%; }
		.lBox img, .rBox img { width: 100px; margin: 0 auto; height: 100px; }
		#col1 li div, #col2 li div { width: 100%; }
		
		.lBox { width: auto; height: 142px; }
		.lBox p { height: 42px; margin: 0; padding: 0 5px; line-height: 20px; }	
		.rBox { width: auto; }

		#reset { background-color: #000; cursor: pointer; margin: 30px auto; width: 140px; border-radius: 5px; text-align: center; cursor: pointer; color: #fff; }
		#reset:hover { background-color: #000; }		


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
		
		
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #"); ?></h1>
						<!-- <h2 class="grid_12"><?php //echo _("For each example of human impact on the environment shown in the bootom row, connect the image to the top row onto the picture of the original natural environment that was impacted. Some items have multiple answers."); ?></h2> -->
						<h2 class="grid_12"><?php echo _("Question goes here."); ?></h2>
						<div class="container grid_12">
							<div id="container">								
								<div class="clear"></div>
								<ul id="col1" class='grid_12'>
									<li><div class='lBox' id="c1"><p><?php echo _("label"); ?></p><img src="" /></div></li>
									<li><div class='lBox' id="c2"><p><?php echo _("label"); ?></p><img src="" /></div></li>
									<li><div class='lBox' id="c3"><p><?php echo _("label"); ?></p><img src="" /></div></li>
									<li><div class='lBox' id="c4"><p><?php echo _("label"); ?></p><img src="" /></div></li>
								</ul>
								<div class="clear"></div>
								<ul id="col2" class='grid_12'>
									<li><div class='rBox' id="ca"><img src="" /><p><?php echo _("label"); ?></p></div></li>
									<li><div class='rBox' id="cb"><img src="" /><p><?php echo _("label"); ?></p></div></li>
									<li><div class='rBox' id="cc"><img src="" /><p><?php echo _("label"); ?></p></div></li>
									<li><div class='rBox' id="cd"><img src="" /><p><?php echo _("label"); ?></p></div></li>
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
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
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
	
			if (answer1 == 'ca') {
					$('#c1').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c1').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer2 == 'cb') {
					$('#c2').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer3 == 'cc') {
					$('#c3').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer4 == 'cd') {
					$('#c4').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().prepend('<img src="assets/wrong.png">');
				}

			$('#answer .answer').html($('.container').html());
				
			if (answer1 == 'ca' && answer2 == 'cb' && answer3 == 'cc' && answer4 == 'cd' ) {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct!"); ?></p>");
			} else {
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong!"); ?></p>");
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
				document.location.href = "#";
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