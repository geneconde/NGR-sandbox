<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		p { text-align: left; }
		.bg { background-image: url(images/10/bg.jpg); }

		#screen2, #screen3 { display: none; position: relative; }
		#screen1 p { padding-bottom: 10px; font-size:23px; }
		#screen2 p { padding-bottom: 20px; }
		#screen2 p, #screen3 p:first-child, #screen3 { padding-top: 20px; }

		#screen1 div.first { overflow: hidden; }
		#screen1 div.first p { text-align: justify; }
		#screen1 div.first div { float: left; width: 510px; }
		#screen1 div.first img { float: right; margin-right: 10px; }
		#slide1 { background: rgba(18, 165, 197, .1); border: 2px solid #12a5c5; border-radius: 12px; padding: 20px; margin: 20px auto; position: relative; width: 80%; min-height: 140px; }
		#slide1 .data { overflow: hidden; }
		#slide1 .data img { float: left; margin-right: 20px; }
		#slide1 .data p { padding-top: 30px; }
		#slide1 .arrows { width: 100%; z-index: 999; position: absolute; }
		#slide1 .arrows #s1left { position: absolute; left: -100px; cursor: pointer; top: -100px; }
		#slide1 .arrows #s1right { position: absolute; right: -60px; cursor: pointer; top: -100px; }

		#screen2 { overflow: hidden; }
		#screen2 p { float: left; width: 450px; }
		#screen2 p:last-child { padding-top: 10px; width: 100%; clear: both; float: none; }
		#screen2 img { float: right; margin-top: 30px; }


		#slide2 { background: rgba(18, 165, 197, .1); border: 2px solid #12a5c5; border-radius: 12px; padding: 20px; margin: 20px auto; position: relative; width: 80%; min-height: 140px; }
		#slide2 .data { overflow: hidden; }
		#slide2 .data img { float: left; margin-right: 20px; }
		#slide2 .data p { font-size: 22px; padding-top: 10px; }
		#slide2 .arrows { width: 100%; z-index: 999; position: absolute; }
		#slide2 .arrows #s3left { position: absolute; left: -100px; cursor: pointer; top: -120px; }
		#slide2 .arrows #s3right { position: absolute; right: -60px; cursor: pointer; top: -120px; }
	
		html[dir="rtl"] #slide1 .arrows #s1left { left:-60px; }
		html[dir="rtl"] #slide2 .arrows #s3left { left:-60px; }
		html[dir="rtl"] #slide1 .arrows #s1right{ right:-100px; }
		html[dir="rtl"] #slide2 .arrows #s3right { right:-100px; }
		html[dir="rtl"] p { text-align: right; }
		html[dir="rtl"] div.second p:first-child { padding-bottom: 0;padding-top: 10px; }
		<?php if($language == "es_ES") { ?>
			p { font-size:22px !important; }
		<?php } ?>
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
			#screen2, #screen3 { padding-top: 35px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#slide1 { padding: 10px; margin: 0 auto; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#screen1 div.first div { width: 400px; }
			#slide1, #slide2 { width: 75%; }
			#screen2 p { width: 330px; }
		}	
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="screen1">
				<h1><?php echo _("More big ideas... about how animals respond"); ?></h1>
				
				<div class="first">
					<div>
						<p><?php echo _("Memories are the stuff of poems and song. They shape our relationships with other people and the world around us. They can bring on strong feelings; make us remember tiny details; or they can be hard to hold on to. We form new memories all the time, and, sometimes, like on test days, we are challenged to repeat them to solve problems."); ?></p>
						<p><?php echo _("But what is a memory, anyway? A useful way to think of a memory is to think of a pattern."); ?></p>
					</div>

					<img src="images/10/memories.jpg">
				</div>

				<div class="second">
					<p><?php echo _("Browse through the slides below by clicking the left and right arrows"); ?>.</p>
					<div id="slide1" class="slide">
						<div id="s11" class="data">
							<img src="images/10/openingbook.jpg">
							<p><?php echo _("The words printed on a page are a pattern that we recognize as information."); ?></p>
						</div>

						<div id="s12" class="data">
							<img src="images/10/dog.jpg">
							<p><?php echo _("A video image is actually a pattern of tiny dots on a screen that we recognize as a picture."); ?></p>
						</div>

						<div id="s13" class="data">
							<img src="images/10/cd.jpg">
							<p><?php echo _("A compact disc (CD) or digital video disc (DVD) stores information as a series of tiny pits that cause light to reflect in a pattern computers can recognize."); ?></p>
						</div>

						<div class="arrows">
							<img src="images/10/left.png" width="70" height="45" id="s1left">
							<img src="images/10/right.png" width="70" height="45" id="s1right">
						</div>
					</div>

					<p><?php echo _("In our brains, <span class='key'>memories</span> are patterns of connections between neurons."); ?></p>
				</div>
			</div>

			<div id="screen2">
				<p><?php echo _("These memory patterns form when cells communicate with one another. One nerve cell sends a message to another by releasing chemicals into the space between. This space is called the <span class='key'>synapse</span>. Whenever a cell communicates with another cell, their next interaction becomes quicker and easier. When this communication happens a few times, a temporary pattern is formed. We call this a <span class='key'>short-term memory</span>. When the communication happens many times, the pattern lasts a very long time. This is a <span class='key'>long-term memory</span>."); ?></p>

				<img src="images/10/memory.jpg">

				<p><?php echo _("So, how do you improve your own memory? Certainly, some people are just better able to remember details than others, but everyone can learn a few skills to improve their own memories. Bookstores have entire sections on memory improvement, and a quick Internet search brings up thousands of hits. Here are just a few simple tools:"); ?></p>
			</div>

			<div id="screen3">
				<p><?php echo _("Browse through the slides below by clicking the left and right arrows"); ?>.</p>
				<div id="slide2" class="slide">
					<div id="s31" class="data">
						<img src="images/10/chunking.jpg">
						<p><?php echo _("<span class='key'>Chunking</span>: Avoid memorizing lists and random facts, and find ways to group them together. For example, when you try to remember a grocery list think of the dairy items together, the fruits together, the vegetables together, and so on."); ?></p>
					</div>

					<div id="s32" class="data">
						<img src="images/10/imagery.jpg">
						<p><?php echo _("<span class='key'>Imagery</span>: In your mind, think of the things you need to remember as being in places. Try to 'see' the dairy aisle in your mind. Try to visualize the produce section and remember where different fruits and vegetables are located."); ?></p>
					</div>

					<div id="s33" class="data">
						<img src="images/10/practice.jpg">
						<p><?php echo _("<span class='key'>Practice</span>: Repeat the chunked or imagined information over and over. Flash cards are handy. Make a set and use them. Explain the information to a parent or friend. Practice, and practice frequently."); ?></p>
					</div>

					<div class="arrows">
						<img src="images/10/left.png" width="70" height="45" id="s3left">
						<img src="images/10/right.png" width="70" height="45" id="s3right">
					</div>
				</div> 

				<p><?php echo _("These tools, and many others, work by strengthening the connections between cells in the brain. The more often the memory pattern is exercised, the stronger it becomes, and the easier it is to use later."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Digging through the mind palace..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>
	
	<script src="scripts/jquery.js"></script>
	<script src="scripts/jquery-ui.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/cycle.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		more = $('a.readmore'),

		screen1 = $('#screen1'),
		screen2 = $('#screen2'),
		screen3 = $('#screen3'),
		screen4 = $('#screen4'),

		left1 = $('#s1left'),
		right1 = $('#s1right'),

		left2 = $('#s3left'),
		right2 = $('#s3right'),

		slides = $('.data'),

		currentSlide1 = 1,
		currentSlide2 = 1;

		slides.hide();
		
		$('#s1' + currentSlide1).show();
		
		right1.on('click', function() {
			$('#s1' + currentSlide1).hide('slide', {direction: 'right'}, 80, function() {
				if (currentSlide1 != 3) currentSlide1 += 1;
				else currentSlide1 = 1; 

				$('#s1' + currentSlide1).show('slide', {direction: 'left'}, 80);
			});
		});

		left1.on('click', function() {
			$('#s1' + currentSlide1).hide('slide', {direction: 'left'}, 80, function() {
				if (currentSlide1 != 1) currentSlide1 -= 1;
				else currentSlide1 = 3;

				$('#s1' + currentSlide1).show('slide', {direction: 'right'}, 80);
			});
		});

		$('#s3' + currentSlide2).show();
		
		right2.on('click', function() {
			$('#s3' + currentSlide2).hide('slide', {direction: 'right'}, 80, function() {
				if (currentSlide2 != 3) currentSlide2 += 1;
				else currentSlide2 = 1; 

				$('#s3' + currentSlide2).show('slide', {direction: 'left'}, 80);
			});
		});

		left2.on('click', function() {
			$('#s3' + currentSlide2).hide('slide', {direction: 'left'}, 80, function() {
				if (currentSlide2 != 1) currentSlide2 -= 1;
				else currentSlide2 = 3;

				$('#s3' + currentSlide2).show('slide', {direction: 'right'}, 80);
			});
		});

		more.on('click', function() {
			if (screen1.is(':visible')) { 	
				screen1.fadeOut(function() { 
					screen2.fadeIn();  
					back.fadeIn(); 
					more.parent().attr('href', '#screen3'); 
				});
				removeHash();
				addHash('#screen2');
			} else if (screen2.is(':visible')) {
				screen2.fadeOut(function() {
					screen3.fadeIn(); 
					back.fadeIn();
					back.parent().attr('href','#screen2');

				});
				more.fadeOut(function() { next.fadeIn(); });
				removeHash();
				addHash('#screen3');
			}
		});

		back.on('click', function() {
			if (screen1.is(':visible')) {
				document.location.href = "9.php";
			} else if (screen2.is(':visible')) {
				screen2.fadeOut(function() {
					more.fadeIn();
					screen1.fadeIn();
					back.fadeIn();
					more.parent().attr('href', '#screen2'); 
					back.parent().attr('href', '9.php');
					window.location.hash = '';
				});

				back.fadeOut();
				removeHash();
				addHash('#screen1');
			} else if (screen3.is(':visible')) {
				screen3.fadeOut(function() { screen2.fadeIn(); });		
				next.fadeOut(function() { more.fadeIn(); });
				removeHash();
				addHash('#screen2');
				//return false;
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#screen3") != -1 || oldURL.indexOf("11.php") != -1) {
			screen1.fadeOut();
			screen3.fadeIn();
			back.fadeIn();
			more.fadeOut();
			next.fadeIn();
			removeHash();
			addHash('#screen3');
		} else if (curURL.indexOf("#screen2") != -1) {
			screen1.fadeOut(function() { 
				screen2.fadeIn();
				back.fadeIn();
				more.parent().attr('href','#screen3');
			});

			removeHash();
			addHash('#screen2');
		}
	</script>
</body>
</html>
