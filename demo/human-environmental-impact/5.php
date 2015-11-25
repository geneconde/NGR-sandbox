<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'human-impact-qc1-a');
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
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #008000; }
		h2 { color: #F84D82; margin: 5px 0; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/5/bg.jpg); }

		#question1 input[type="radio"] { display: none; }
		#question1 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question1 input[type="radio"]:checked + label img { border: 4px solid #00A7D4; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; }
		#question1 input[type="radio"]:checked + label span { color: #00A7D4; }
		#question1 div span { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; font-size: 20px; }
		#question1 div.grid_3 { text-align: center; }
		label img { width: 115px; margin: 0 5%; height: 85px; }
		.ac-custom input[type="radio"]:checked + label { color: #777; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #777; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer1 p { text-align: left; margin: 0; font-size: 22px; }

		html[dir=rtl] #answer1 p { text-align: center; }

		#buttons .next { display: none; }
		#question1 .clear { height: 40px; }

		#container { float: left; z-index: 99; margin-top: -40px; height: 300px; }

		#col1,#col2 { height: 110px; margin-top: 40px;}
		#col2 { margin-top: 45px; }

		#col1 li, #col2 li { float: left; font-size: 18px; text-align: center; margin: 0; display: inline-block; width: 22.5%;  }
		.lBox img, .rBox img { width: 80px; height: 80px; margin: 0 auto; display: block;}
		#col1 li div, #col2 li div { margin: 0 auto; }
		#col1 li:nth-of-type(2), #col2 li:nth-of-type(2) { margin: 0 5px; width: 28%; }
		li:nth-of-type(2) .lBox img, li:nth-of-type(2) .rBox img { width: 80px; }


		.lBox { width: auto; }
		.rBox { width: auto; line-height: 18px; }

		.lBox p { margin: 0 auto; padding: 0 5px; height: 32px; line-height: 17px; text-align: center; }

		#reset { background-color: #00A7D4; cursor: pointer; margin: 30px auto 0; border-radius: 5px; text-align: center; cursor: pointer; color: #fff; }
		#reset:hover { background-color: #74BC3D; }


		html[dir=rtl] .rBox { padding-left: 0; }

		._jsPlumb_endpoint { cursor: pointer; z-index: 1000; }
		._jsPlumb_element_dragging { margin-top: 0; } 
		
		#answer2 #container li > img { width: auto; margin: 0 0 0 14px; float: left; }
		#question2 li > img { display: none; }
		#answer1 .grid_3 p { text-align: center; }
		#answer1 .feedback { margin-top: 25px; }

		h2{
			font-size: 21px;
			line-height: 25px;
		}

		<?php if ($language == 'es_ES') : ?>
			h2 { font-size: 20px; }
			p { font-size: 20px; }

			@media screen and (max-width: 1250px){
				h2{
					line-height: 18px;
				}
				label img { width: 60%;}
				p, span { line-height: 20px;}
			}

			@media screen and (max-width: 825px){
				#c2 p { font-size: 18px; }
			}

		<?php endif; ?>	
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px)  { #col1 p { margin-bottom: 5px; } }
		<?php if($language == 'ar_EG') { ?>
			svg { overflow: visible !important; }
			circle { fill: rgb(242, 67, 69) !important; }
			div._jsPlumb_endpoint:nth-child(5) circle,
			div._jsPlumb_endpoint:nth-child(6) circle,
			div._jsPlumb_endpoint:nth-child(7) circle,
			div._jsPlumb_endpoint:nth-child(8) circle {
			    stroke: rgb(0, 167, 212) !important;
			    stroke-width: 2px !important;
			}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following activities you do every day has <span class='blink'>no</span> negative effect on the environment?"); ?></h2>
							
							<div class="grid_3">
								<input type="radio" id="a" name="q1" value="A">
								<label for="a"><img src="assets/5/a.jpg"><span><?php echo _("Eating breakfast"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b" name="q1" value="B">
								<label for="b"><img src="assets/5/b.jpg"><span><?php echo _("Going to school"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="c" name="q1" value="C">
								<label for="c"><img src="assets/5/c.jpg"><span><?php echo _("Watching TV"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d" name="q1" value="D">
								<label for="d"><img src="assets/5/e.jpg"><span><?php echo _("None of the above"); ?></span></label>
							</div>
											
							
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. For each example of human impact on the environment shown in the top row, drag the dot from that image to the dot on the image in the bottom row that will match the natural environment that was impacted."); ?></h2>

							<div class="container grid_12">
								
								<div id="container" class="grid_10">
									
									<div class="clear"></div>
									<ul id="col1">
										<li><div class='lBox' id="c1"><p><?php echo _("Shipping Port"); ?></p><img src="assets/5/ca.jpg" /></div></li>
										<li><div class='lBox' id="c2"><p><?php echo _("Hydroelectric Dam Generator"); ?></p><img src="assets/5/cb.jpg" /></div></li>
										<li><div class='lBox' id="c3"><p><?php echo _("Clear-Cut Logging"); ?></p><img src="assets/5/cc.jpg" /></div></li>
										<li><div class='lBox' id="c4"><p><?php echo _("Farm"); ?></p><img src="assets/5/cd.jpg" /></div></li>
									</ul>
									<div class="clear"></div>
									<ul id="col2">
										<li><div class='rBox' id="ca"><img src="assets/5/c1.jpg" /><?php echo _("Forest"); ?></div></li>
										<li><div class='rBox' id="cb"><img src="assets/5/c2.jpg" /><?php echo _("Coastline"); ?></div></li>
										<li><div class='rBox' id="cc"><img src="assets/5/c3.jpg" /><?php echo _("Meadow or Field"); ?></div></li>
										<li><div class='rBox' id="cd"><img src="assets/5/c4.jpg" /><?php echo _("River"); ?></div></li>
									</ul>
	
								</div>
								
								<div class="grid_2">
									<p id="reset"><?php echo _("Reset"); ?></p>
								</div>
							</div>

						</div>
												
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
						
						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following activities you do everyday has <span class='blink'>no</span> negative effect on the environment?"); ?></h2>

							<div class="grid_12">
								<div class="grid_3">
									<p><?php echo _("You answered..."); ?></p>
									<div class="image"></div>
									<p class="answer"></p>
								</div>
								
								<div class="feedback grid_9"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. For each example of a natural environment in the top row, drag from the dot on the image to a dot on an image in the bottom row that shows what the impact on that natural environment might be to meet human needs."); ?></h2>
	
							<div class="answer grid_12"></div>
							<div class="feedback grid_12"></div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="4.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check…"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.jsPlumb-1.4.1-all-min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		$('input.q1').on('change', function(evt) {
		   if($('input.q1:checked').length == 3) {
		       this.checked = false;
		   }
		});
		
		$('#grey').append($('#table'));
		$('.show_table span').click(function() {
			$('#grey').fadeIn();
		});
		$('.close').click(function() {
			$('#grey').fadeOut();
		});

		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '', // question b 1st answer
			answer3 = '',
			answer4 = '',
			answer5 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());
			$('#answer1 .image').html($('#question1 input:radio:checked').parent().find('img').clone());

			answer1 = $('#question1 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong - Eating breakfast requires farms to make your food – cereal, eggs, and bacon, whatever you eat. And these farms had to change whatever habitat existed before it became a farm, so farms have a great environmental impact to make food for us."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong - Going to school is a big one. It requires transportation such as a car or a bus – which requires fuel like gasoline and oil. And the school was built from lots of materials from the environment – like your house – but even more. Then the environment, where the school is located, had to be destroyed to make room for the school."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong - Watching TV requires electricity that usually comes from burning fossil fuel or damming rivers. An exception might be if your house uses solar powered electricity. But even then, you're probably watching TV in your house which required wood and other materials to build it that were taken from the environment."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Right!! Actually - all of a student's daily activities have some negative effect on the environment."); ?></p>");


			if (answered == 0) {
				saveAnswer('human-impact-qc1-a', answer1); // Correct answer: E

				answered = 1;
			}
			
			//start question2 save()
			
			//$('#answer2 .answer').html($('.container').html());
				
			if ( answer2 == 'cb' && answer3 == 'cd' && answer4 == 'ca' && answer5 == 'cc' ) {
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You got it! Shipping ports require a coastline on the seacoast or a large lake. Hydroelectric dam requires a river to dam up to create a reservoir to store water that will fall through the generators in the dam producing electricity. Logging and clear cutting happen in the forest natural environment. Farms are usually the result of plowing and replacing the natural environments of fields and meadows."); ?></p>");
			} else {
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! Shipping ports require a coastline on the seacoast or a large lake. Hydroelectric dam requires a river to dam up to create a reservoir to store water that will fall through the generators in the dam producing electricity. Logging and clear cutting happen in the forest natural environment. Farms are usually the result of plowing and replacing the natural environments of fields and meadows."); ?></p>");
			}

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer1); // Correct answer: d
				saveAnswer('module-qq#-b', answer2); // Correct answer: ca
				saveAnswer('module-qq#-c', answer3); // Correct answer: cb
				saveAnswer('module-qq#-d', answer4); // Correct answer: cb
				saveAnswer('module-qq#-e', answer5); // Correct answer: cb

				answered = 1;
			}
			//end question2 save()
		}

		$('#reset').click(function() {
			clear();
		});
		
		function clear(){
			checkAnswer = 0; 
		
			answer2 = '';
			answer3 = '';
			answer4 = '';
			answer5 = '';
			
			$("div[elid='c1']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c2']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c3']").removeClass("_jsPlumb_endpoint_connected");
			$("div[elid='c4']").removeClass("_jsPlumb_endpoint_connected");
		}
		
		$('.checkanswer').click(function() {
			
			if ($("div[elid='c1']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c2']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c3']").hasClass("_jsPlumb_endpoint_connected") &&
				$("div[elid='c4']").hasClass("_jsPlumb_endpoint_connected") &&
				$('input:radio:checked').length == 1 
				) {
				checkAnswer = 1;
			} else {
				checkAnswer = 0;
			}
			
			if (checkAnswer == 0 ) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
				
				//question b
				
				jsPlumb.bind("ready", function() {
					// get all connected answers
					var sourcecon = jsPlumb.getConnections({source: e}) ;
			        for(i=0; i<sourcecon.length; i++) 
			        {
			            var target = sourcecon[i].targetId;
			            var source = sourcecon[i].sourceId;
			           
						if (source == 'c1') {
							answer2 = target;
						} else if (source == 'c2') {
							answer3 = target;
						} else if (source == 'c3') {
							answer4 = target;
						} else if (source == 'c4') {
							answer5 = target;
						}
			        }
			        
	     			console.log(answer1 + " " + answer2 + " " + answer3 + " " + answer4 + " " + answer5);
	    		});
	    		
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "4.php#screen2";
			} else if ($('#answers').is(':visible')) {
				
				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});
		
		//jsplumb
		
		setTimeout(function(){

			jsPlumb.bind("ready", function() {
						

						<?php if ($language == 'ar_EG') : ?>

							var startpointOptions = { isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Bottom"],setDragAllowedWhenFull:true };
							var endpointOptions = { isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Top"],setDragAllowedWhenFull:true };
							var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
							var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

						<?php else : ?>

							var startpointOptions = { paintStyle:{ fillStyle:"#F24345", strokeStyle: "#00A7D4", lineWidth: 3 }, isSource: true, container: $('#container'), connector: ["Straight"], anchors: ["Bottom"],setDragAllowedWhenFull:true };
							var endpointOptions = { paintStyle:{ fillStyle:"#F24345" }, isTarget: true, container: $('#container'), connector: ["Straight"], anchors: ["Top"],setDragAllowedWhenFull:true, setDraggable:false };
							var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
							var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);

						<?php endif; ?>

						jsPlumb.bind("jsPlumbConnection", function(conn) {
							//change line color
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
