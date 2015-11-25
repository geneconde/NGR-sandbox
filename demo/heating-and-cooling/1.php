<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'heating-and-cooling';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $smc->updateStudentLastscreen(1, $_SESSION['smid']);
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
		.h1 { color: #37a1de; text-align: center; font-size: 35px; }

		.bg { background-image: url('images/1/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position: relative; }
		.bg img { margin: 0 auto; }

		#hc { bottom: 0; padding-bottom: 55px; position: absolute; line-height: 84px; }
		#hc img { border: none; width: 760px; padding-left: 10px; }
		#hc img { border: none; }
		#start img { width: 70px; padding-top: 13px; padding-left: 10px; cursor: pointer; } 
		
		@-ms-keyframes wiggle{0%{-ms-transform:rotate(3deg);}50%{-ms-transform:rotate(-3deg);}100%{-ms-transform:rotate(3deg);}}
		@-moz-keyframes wiggle{0%{-moz-transform:rotate(3deg);}50%{-moz-transform:rotate(-3deg);}100%{-moz-transform:rotate(3deg);}}
		@-webkit-keyframes wiggle{0%{-webkit-transform:rotate(3deg);}50%{-webkit-transform:rotate(-3deg);}100%{-webkit-transform:rotate(3deg);}}
		@keyframes wiggle{0%{transform:rotate(3deg);}50%{transform:rotate(-3deg);}100%{transform:rotate(3deg);}}
		img.wiggle-me:hover{-ms-animation:wiggle .3s 2;-moz-animation:wiggle .3s 2;-webkit-animation:wiggle .3s 2;animation:wiggle .3s 2;}
		html[dir="rtl"] #start img { float: right; }
		html[dir="rtl"] #banner { float: left; }
		html[dir="rtl"] #hc { margin-right: 30px; }
		#dp_swf_engine { display: none; }

	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		#hc { bottom: 150px; padding-bottom: 55px; }
		#hc img#banner { width: 610px; }
	}

	@media only screen and (max-width: 1250px) {
		#start img {padding-left:0px;}
	}	
	a#start {
	    width: 155px !important;
	    font-size: 20px !important;
	    color: white !important;
	    background: url('images/1/start.png')center no-repeat !important;
	    text-align: center !important;
	    background-size: 80px 82px !important;
	    padding: 25px !important;
	    text-align: center !important;
	}
	a#start:hover {
	    animation: wiggle .3s 155 !important;
	}
	#hc img {
	    float: left !important;
    	width: 713px !important;
	}

	@media only screen and (max-width: 960px) {
		#hc img {
		    float: left !important;
		    width: 80% !important;
		}
	}
	#audio {
	    background: orange;
	    border-radius: 5px;
	    border: 1px;
	    cursor: pointer;
	    position: absolute;
	    top: 33px;
	    left: 52px;
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
			<br>
			<div id="target">
				<button onclick="audio()" id="audio">Play</button><p class='h1'><?php echo _("Welcome to the Heating and Cooling module"); ?>, <?php echo $user->getFirstName() . "!" ?> </p>
				<div id="hc" >
					<img src="images/1/hc.png" id="banner"> 
					<!-- <a href="2.php" id="start"><img id="startimg" class="wiggle-me" src="images/1/start.png" alt="<?php echo _('Start'); ?>"><?php echo _("Start"); ?></a> -->
					<a href="2.php" id="start" class="wiggle-me"><?php echo _("Start"); ?></a>
				</div>
			</div>
			<audio id="player" controls style="display: none"></audio>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!") ?></strong></section></section>
	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/AudioAligner.js"></script>

	<?php include("setlocale.php"); ?>

	<script type="text/javascript">
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
			aligner.align('media/H&C Welcome.mp3', 'media/H&C Welcome.json');
		});
	</script>
</body>
</html>
