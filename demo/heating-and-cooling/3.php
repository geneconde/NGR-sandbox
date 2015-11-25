<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'heating-and-cooling';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $smc->updateStudentLastscreen(3, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Heating and Cooling"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="css/locale.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/jpreloader.css" />
	<link rel="stylesheet" href="css/global.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		html, body {overflow: hidden;}
    	.h1 { font-size:34px; margin: 0; padding: 5px 0 !important; color: #236994; font-weight: 600; margin-left: 40px; }
		.off { background-position: 0 0; }
		.on { background-position: 0 -31px; }

		.images { width: 72%; margin: 20px auto; overflow: hidden; }
		.images div { float: left; }
		.images div img { margin: 0 10px; }
		.images div p { padding: 0; }

		.bg { background-image: url('images/3/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position: relative; }
		.bg li:last-child { margin-bottom: 0; }

		.ac-custom { padding: 0 3em; max-width: 900px; margin: 10px auto 0; }
		.ac-custom ul, .ac-custom ol { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
		.ac-custom li { margin: 0 auto; padding: 0 0; position: relative; }
		.ac-custom label { display: inline-block; position: relative; padding: 0 0 0 40px; vertical-align: top; cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
		.ac-custom input[type="checkbox"], .ac-custom label::before { width: 27px; height: 26px; top: 50%; left: 0; margin-top: -13px; position: absolute; cursor: pointer; }

		#question input[type=checkbox] { display: none;  }
		#question label::before { content: ''; background: url(images/3/checkbox.png) left top no-repeat; width: 27px; height: 26px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }

		#question input[type="checkbox"]:checked + label::before { background-position: left bottom; }
		html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom label::before { right: -40px; }
		#answer { display: none; margin: 0 auto; text-align: center; width: 95%; }
		#answer p { color: #fff; padding-top: 10px !important; }
		#dp_swf_engine { display: none; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
			.images { width: 615px; }
			#answer { padding-top: 35px; }
		}	

		@media only screen and (max-width: 1250px) {
			h2, p, li {font-size:20px !important;}
			.images {width:90%;}
			div#answer {
			    padding-top: 45px;
			}
		}	
		#buttons .next { display: none; }

		#choice1, #choice2, #choice3, #choice4 {
		    background: orange;
		    border-radius: 5px;
		    border: 1px;
		    cursor: pointer;
		    min-width: 49px;
		    margin-top: 10px;
		}
		#audio {
		    background: orange;
		    border-radius: 5px;
		    border: 1px;
		    cursor: pointer;
		    position: absolute;
		    top: 16px;
	    	left: 1%;
		    min-width: 49px;
		}
		#fb {
		    background: orange;
		    border-radius: 5px;
		    border: 1px;
		    cursor: pointer;
		    min-width: 49px;
		    margin-right: 5px;
		    float: left;
		    position: relative;
		    top: 16px;
		    left: 35px;
		}
		.word-data { -x-background: #ffffee; }
		.current-word { color: orange; }
		.aligned-word:hover {
			cursor: pointer;
			color: orange;
		}
		.btn-container {
			position: absolute;
    		left: 16px;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<div id="target" class="grid_12">
					<button onclick="audio()" id="audio">Play</button>
					<p class="h1"><?php echo _("Checking what you already know... about heating and cooling"); ?></p>
					<p><?php echo _("When you sit at the dinner table, you probably wait until your food gets cool enough to eat, but you drink your water while it is still cold."); ?></p>
					<p><?php echo _("Click on <span class='blink'>ALL</span> the correct statements you think are related to why our food get cooler, but our drinks get warmer at the dinner table."); ?></p>
				</div>
				<audio id="player" controls style="display: none"></audio>
				<audio id="playera" controls style="display: none"></audio>
				<audio id="playerb" controls style="display: none"></audio>
				<audio id="playerc" controls style="display: none"></audio>
				<audio id="playerd" controls style="display: none"></audio>
				<audio id="playerfb" controls style="display: none"></audio>
				
				<div class="images">
					<div><img src="images/3/a.jpg" alt="A"><p>A</p></div>
					<div><img src="images/3/b.jpg" alt="B"><p>B</p></div>
					<div><img src="images/3/c.jpg" alt="C"><p>C</p></div>
					<div><img src="images/3/d.jpg" alt="D"><p>D</p></div>
				</div>
				<div class="btn-container">
					<button onclick="choice1()" id="choice1">Play</button><br>
					<button onclick="choice2()" id="choice2">Play</button><br>
					<button onclick="choice3()" id="choice3">Play</button><br>
					<button onclick="choice4()" id="choice4">Play</button>
				</div>
				<section>
					<form class="ac-custom ac-checkbox" autocomplete="off">
						<ul>
							<li><div id="targeta"><input id="cb1" name="cb1" type="checkbox"><label for="cb1">A. <?php echo _("Heat energy from the food flows into the cooler air around it."); ?></label></div>
							<li><div id="targetb"><input id="cb2" name="cb2" type="checkbox"><label for="cb2">B. <?php echo _("Heat energy from the air flows into the cooler drink."); ?></label></div></li>
							<li><div id="targetc"><input id="cb3" name="cb3" type="checkbox"><label for="cb3">C. <?php echo _("Cold energy from the drink flows into to the surrounding air."); ?></label></div></li>
							<li><div id="targetd"><input id="cb4" name="cb4" type="checkbox"><label for="cb4">D. <?php echo _("Cold energy from the surrounding air flows into the food."); ?></label></div></li>
						</ul>
					</form>
				</section>
			</div>

			<div id="answer">
				<button onclick="fb()" id="fb">Play</button><p><?php echo _("If you marked A and B, you are on the right track. Heat energy only goes from something hot to something cold. As you go through this module, you may be surprised to find out that there really isn’t any such thing as <span class='key'>cold energy</span>."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>	

	<section id="preloader"><section class="selected"><strong><?php echo _("Hot and cold"); ?></strong></section></section>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/AudioAligner.js"></script>
	<script>
		var question = $('#question'),
		answer = $('#answer'),
		check = $('a.checkanswer'),
		back = $('a.back'),
		next = $('a.next');

		$('.blink').blink({ speed: 500, blinks: 1000 });

		check.on('click', function() {
			var checkAnswer = $('input:checkbox:checked').length;
			var audio = document.getElementById("player"); 
			if(checkAnswer == '')
			{
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				check.fadeOut( function () {
					next.fadeIn();
				});
				
				
				back.fadeIn();

				question.fadeOut(function() {
					audio.pause();
					audio.currentTime = 0;
					$('.bg').css('background-image','url(images/3/bg2.jpg)');
					answer.fadeIn();
					window.location.hash = "#answer";
				});
			}
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "2.php";
			} else {
				$('.bg').css('background-image','url(images/3/bg.jpg)');
				answer.fadeOut();
				question.fadeIn();
				next.fadeOut( function () {
					check.fadeIn();
				});
				removeHash();
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = '';

		if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
			check.fadeOut();
			back.fadeIn();
			next.fadeIn();

			question.fadeOut(function() {
				answer.fadeIn();
				$('.bg').css('background-image','url(images/3/bg2.jpg)');
			});

			window.location.hash = "#answer";
		}

		function audio() { 
		    var txt = $('#audio').html();
		    var audio = document.getElementById("player"); 
			if(txt == 'Play') {
				audio.play();
				$('#audio').html("Stop");
			}
			else {
				audio.pause();
				audio.currentTime = 0;
				$('#audio').html("Play");
			}
			audio.addEventListener("ended", function() {
		          audio.currentTime = 0;
		          $('#audio').html("Play");
		    });
		}

		function choice1() { 
		    var txt = $('#choice1').html();
		    var audio = document.getElementById("playera"); 
			if(txt == 'Play') {
				audio.play();
				$('#choice1').html("Stop");
			}
			else {
				audio.pause();
				audio.currentTime = 0;
				$('#choice1').html("Play");
			}
			audio.addEventListener("ended", function() {
		          audio.currentTime = 0;
		          $('#choice1').html("Play");
		    });
		}

		function choice2() { 
		    var txt = $('#choice2').html();
		    var audio = document.getElementById("playerb"); 
			if(txt == 'Play') {
				audio.play();
				$('#choice2').html("Stop");
			}
			else {
				audio.pause();
				audio.currentTime = 0;
				$('#choice2').html("Play");
			}
			audio.addEventListener("ended", function() {
		          audio.currentTime = 0;
		          $('#choice2').html("Play");
		    });
		}

		function choice3() { 
		    var txt = $('#choice3').html();
		    var audio = document.getElementById("playerc"); 
			if(txt == 'Play') {
				audio.play();
				$('#choice3').html("Stop");
			}
			else {
				audio.pause();
				audio.currentTime = 0;
				$('#choice3').html("Play");
			}
			audio.addEventListener("ended", function() {
		          audio.currentTime = 0;
		          $('#choice3').html("Play");
		    });
		}

		function choice4() { 
		    var txt = $('#choice4').html();
		    var audio = document.getElementById("playerd"); 
			if(txt == 'Play') {
				audio.play();
				$('#choice4').html("Stop");
			}
			else {
				audio.pause();
				audio.currentTime = 0;
				$('#choice4').html("Play");
			}
			audio.addEventListener("ended", function() {
		          audio.currentTime = 0;
		          $('#choice4').html("Play");
		    });
		}

		function fb() { 
		    var txt = $('#fb').html();
		    var audio = document.getElementById("playerfb"); 
			if(txt == 'Play') {
				audio.play();
				$('#fb').html("Stop");
			}
			else {
				audio.pause();
				audio.currentTime = 0;
				$('#fb').html("Play");
			}
			audio.addEventListener("ended", function() {
		          audio.currentTime = 0;
		          $('#fb').html("Play");
		    });
		}

		$(document).ready(function() {
		    var audio = document.getElementById('player');
			if (!(audio.canPlayType && (audio.canPlayType('audio/mp3') || audio.canPlayType('audio/mpeg')) )) {
				alert('Please use a browser that can play MP3s like Chrome, Safari, IE9');
			}
			var aligner = new AudioAligner(document.getElementById('target'), audio);
			aligner.align('media/3CWYK.mp3', 'media/3CWYK.json');


		    var choice1 = document.getElementById('playera');
			if (!(choice1.canPlayType && (choice1.canPlayType('audio/mp3') || choice1.canPlayType('audio/mpeg')) )) {
				alert('Please use a browser that can play MP3s like Chrome, Safari, IE9');
			}
			var alignera = new AudioAligner(document.getElementById('targeta'), choice1);
			alignera.align('media/3aCWYK.mp3', 'media/3aCWYK.json');


		    var choice2 = document.getElementById('playerb');
			if (!(choice2.canPlayType && (choice2.canPlayType('audio/mp3') || choice2.canPlayType('audio/mpeg')) )) {
				alert('Please use a browser that can play MP3s like Chrome, Safari, IE9');
			}
			var alignerb = new AudioAligner(document.getElementById('targetb'), choice2);
			alignerb.align('media/3bCWYK.mp3', 'media/3bCWYK.json');


		    var choice3 = document.getElementById('playerc');
			if (!(choice3.canPlayType && (choice3.canPlayType('audio/mp3') || choice3.canPlayType('audio/mpeg')) )) {
				alert('Please use a browser that can play MP3s like Chrome, Safari, IE9');
			}
			var alignerc = new AudioAligner(document.getElementById('targetc'), choice3);
			alignerc.align('media/3cCWYK.mp3', 'media/3cCWYK.json');


		    var choice4 = document.getElementById('playerd');
			if (!(choice4.canPlayType && (choice4.canPlayType('audio/mp3') || choice4.canPlayType('audio/mpeg')) )) {
				alert('Please use a browser that can play MP3s like Chrome, Safari, IE9');
			}
			var alignerd = new AudioAligner(document.getElementById('targetd'), choice4);
			alignerd.align('media/3dCWYK.mp3', 'media/3dCWYK.json');


		    var fb = document.getElementById('playerfb');
			if (!(fb.canPlayType && (fb.canPlayType('audio/mp3') || fb.canPlayType('audio/mpeg')) )) {
				alert('Please use a browser that can play MP3s like Chrome, Safari, IE9');
			}
			var alignerfb = new AudioAligner(document.getElementById('answer'), fb);
			alignerfb.align('media/3FB.mp3', 'media/3FB.json');
		});
	</script>
	
	<?php include("setlocale.php"); ?>
</body>
</html>
