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

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

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
		h1 { color: #F16D2D; }
		h2 { color: #765DF9; }
		
		.wrap { border-color: #048DBB; }
		.bg { background-image: url(assets/15/bg.jpg); }

		#container { position: relative; z-index: 99; margin-top: -40px; left: 5%; }

		#col1 { position: absolute; top: 100px; left: 40px; width: 280px !important; }
		#col2 { position: absolute; top: 100px; right: 140px; width: 240px !important; }

		#col1 li { padding: 5px 20px 5px 20px; font-size: 20px; }
		#col2 li { padding: 5px 0 5px 0; font-size: 20px; }

		#container li div { background: #8ADCE5; padding: 3px 15px; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
		/* #container li:first-of-type div { background: #FBE393; margin-bottom: 15px; } */
		
		.rBox { width: auto; padding-left: 20px; padding-right: 0; }

		#reset { background-color: #6F57E9; cursor: pointer; margin: 300px auto 0; width: 140px; border-radius: 5px; text-align: center; cursor: pointer; color: #fff; }
		#reset:hover { background-color: #787AFA; }

		html[dir=rtl] #container { right: 10%; }

		html[dir=rtl] #col1 { right: 40px; width: 100px !important; }
		html[dir=rtl] #col2 { right: 360px; width: 365px !important; }

		html[dir=rtl] .rBox { padding-left: 0; padding-right: 20px; }

		._jsPlumb_endpoint { cursor: pointer; z-index: 1000; }
		._jsPlumb_element_dragging { margin-top: 0; } 
		._jsPlumb_endpoint_connected { margin-top: 0; }

		#answer { display: none; }

		#answer #container img { width: auto; margin: 0 0 0 -30px; float: left; }

		html[dir=rtl] #answer #container img { margin: -26px -35px 0 0; float: right; }

		#answer p { text-align: center; }
		#answer .feedback { margin-top: 290px; }

		#buttons .next { display: none; }

		#col1-header { 			
			background: #FBE393; 
			margin-bottom: 15px; 
			width: 210px;
			height: 55px;
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
			height: 55px;
			position: absolute; 
			right: 141px; 
			top: 44px;
			padding: 0 6px;

			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		}

		@media all and (max-width: 960px) {
			#col1 { position: absolute; top: 100px; left: 0px; width: 280px !important; }
			#col2 { position: absolute; top: 100px; right: 100px; width: 240px !important; }
			#col1-header { left: 19px; }
			#col2-header { right: 101px; }
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
						<h1 class="grid_12"><?php echo _("Quiz Question #2"); ?></h1>
						<h2 class="grid_12"><?php echo _("Think about riding your bike. Match the properties of matter from the first column to the matter you use in the second column when you ride your bike."); ?></h2>

						<div class="container grid_12">
							<div id="container">
								
								<div id="col1-header">
									
									<?php echo _("Properties of Matter"); ?>

								</div>
								
								<ul id="col1">
									
									<li><div class='lBox' id="c1"><?php echo _("Hard and strong"); ?></div></li>
									<li><div class='lBox' id="c2"><?php echo _("Soft, tough, flexible"); ?></div></li>
									<li><div class='lBox' id="c3"><?php echo _("Waterproof and soft"); ?></div></li>
									<li><div class='lBox' id="c4"><?php echo _("Soft and warm"); ?></div></li>
									<li><div class='lBox' id="c5"><?php echo _("Flexible and tough"); ?></div></li>
								</ul>

								<div id="col2-header">
									
									<?php echo _("Parts of Bike and Rider"); ?>

								</div>

								<ul id="col2">
									<li><div class='rBox' id="ca"><?php echo _("Bike tire"); ?></div></li>
									<li><div class='rBox' id="cb"><?php echo _("Shirt"); ?></div></li>
									<li><div class='rBox' id="cc"><?php echo _("Bike frame"); ?></div></li>
									<li><div class='rBox' id="cd"><?php echo _("Bike seat"); ?></div></li>
									<li><div class='rBox' id="ce"><?php echo _("Girl's skin"); ?></div></li>
								</ul>

								<div class="clear"></div>
							</div>
						</div>

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
		<a href="16.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Riding a bike..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.jsPlumb-1.4.1-all-min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

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

				if (answer2 == 'ce') {
					$('#c2').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c2').parent().prepend('<img src="assets/wrong.png">');
				}

				if (answer3 == 'cd') {
					$('#c3').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c3').parent().prepend('<img src="assets/wrong.png">');
				}
				
				if (answer4 == 'cb') {
					$('#c4').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c4').parent().prepend('<img src="assets/wrong.png">');
				}
				
				if (answer5 == 'ca') {
					$('#c5').parent().prepend('<img src="assets/correct.png">'); 
				} else {
					$('#c5').parent().prepend('<img src="assets/wrong.png">');
				}

			<?php endif; ?>

			$('#answer .answer').html($('.container').html());
				
			if (answer1 == 'cc' && answer2 == 'ce' && answer3 == 'cd' && answer4 == 'cb' && answer5 == 'ca') {
				$('#answer .feedback').html("<p class='green grid_10 prefix_1 suffix_1 '><img src='assets/correct.png'><?php echo _('Correct! The bike frame needs to be hard and strong to support the rider; the girl’s skin needs to be soft to touch, flexible to move and tough so it doesn’t get cut easily; the bike seat needs to be waterproof to keep it dry and soft to be comfortable; the shirt needs to be soft and warm to be comfortable and keep you warm; and the bike tire needs to be flexible and tough.'); ?></p>");
			} else {
				$('#answer .feedback').html("<p class='red grid_10 prefix_1 suffix_1 '><img src='assets/wrong.png'><?php echo _('Wrong! The bike frame needs to be hard and strong to support the rider; the girl’s skin needs to be soft to touch, flexible to move and tough so it doesn’t get cut easily; the bike seat needs to be waterproof to keep it dry and soft to be comfortable; the shirt needs to be soft and warm to be comfortable and keep you warm; and the bike tire needs to be flexible and tough.'); ?></p>");
			}

			console.log(answer1);
			console.log(answer2);
			console.log(answer3);

			if (answered == 0) {
				saveAnswer('structures-and-properties-of-matter-qq2-a', answer1); // Correct answer: cc
				saveAnswer('structures-and-properties-of-matter-qq2-b', answer2); // Correct answer: ce
				saveAnswer('structures-and-properties-of-matter-qq2-c', answer3); // Correct answer: cd
				saveAnswer('structures-and-properties-of-matter-qq2-d', answer4); // Correct answer: cb
				saveAnswer('structures-and-properties-of-matter-qq2-e', answer5); // Correct answer: ca

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
				document.location.href = "14.php";
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

		$(document).ready();

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
					} else if (conn.sourceId == 'c5') {
						answer5 = conn.targetId;
						conn.connection.setPaintStyle({
					    	strokeStyle: "#C89F5D", lineWidth: 3,
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
