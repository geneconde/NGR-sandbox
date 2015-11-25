<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'heating-and-cooling';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
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
		.h1 { color: #28CDFC; font-size: 35px; margin-left: 50px; }
		p { text-align: left; }

		.bg { background-image: url('images/4/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position: relative; }

		.image { margin-top: 20px; }
		.image img { margin-right: 20px; }
		.image img:last-child { margin-right: 0; }
		html[dir="rtl"] p { text-align: right; }
		#dp_swf_engine { display: none; }

		@media only screen and (max-width: 1250px) {
			h2, p, li {font-size:20px !important;}
			.image img {height: 200px; margin-top: -15px;}
		}
		@media only screen and (max-width: 960px) {
			h2, p, li {font-size:18px !important;}
			.image img {height: 200px; margin-top: -15px;}
		}
		#audio {
		    background: orange;
		    border-radius: 5px;
		    border: 1px;
		    cursor: pointer;
		    position: absolute;
		    top: 12px;
		    left: 21px;
		    min-width: 49px;
		}
		.word-data { -x-background: #ffffee; }
		.current-word { color: orange; }
		.aligned-word:hover {
			cursor: pointer;
			color: orange;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="target">
				<button onclick="audio()" id="audio">Play</button><p class="h1"><?php echo _("Reviewing big ideas... about heating and cooling"); ?></p>

				<p><?php echo _("<span class='key'>Heat</span> is a form of energy that causes atoms and molecules, the particles of matter, to <span class='key'>vibrate</span> or move around faster. When heat energy is taken away from matter the particles vibrate less and move around more slowly."); ?></p>
				
				<p><?php echo _("How fast or slowly the tiny particles of matter vibrate or move around is called <span class='key'>temperature</span>. The faster the particles move, the higher the temperature is. The more slowly the particles move, the lower the temperature is. How much heat energy is needed to raise or lower the temperature of matter depends on the amount of matter involved. The more matter there is, the more heat energy has to be exchanged to raise or lower the temperature. The heat energy of something is the total amount of energy."); ?></p>
				
				<div class="image">
					<img src="images/4/cold.jpg" alt="Hot">
					<img src="images/4/hot.jpg" alt="Cold">
				</div>
			</div>
			<audio id="player" controls style="display: none"></audio>
		</div>
	</div>

	<div id="buttons">
		<a href="3.php#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Learning science is cool!"); ?></strong></section></section>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/AudioAligner.js"></script>
	<?php include("setlocale.php"); ?>

	<script>
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

		$(document).ready(function() {
		    var audio = document.getElementById('player');
			if (!(audio.canPlayType && (audio.canPlayType('audio/mp3') || audio.canPlayType('audio/mpeg')) )) {
				alert('Please use a browser that can play MP3s like Chrome, Safari, IE9');
			}
			var aligner = new AudioAligner(document.getElementById('target'), audio);
			aligner.align('media/4RBI.mp3', 'media/4RBI.json');
		});
	</script>

</body>
</html>
