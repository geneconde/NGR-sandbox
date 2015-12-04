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
    	h1 { font-size:34px; margin: 0; padding: 5px 0; color: #236994; font-weight: 600; }
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

		#buttons .next { display: none; }

		#qa {
		    position: relative;
		    top: -4px;
		}
		#fb {
			margin-right: 5px;
		    position: relative;
		    top: -3px;
		}
		.audio-btn {
		    background: orange;
		    border-radius: 5px;
		    border: 1px;
		    cursor: pointer;
		    min-width: 30px;
		    vertical-align: middle;
		    margin-right: 5px;
		}
		.audio-btn:focus { outline: 0; }
		.choices-btn {
			width: 35px;
			float: left;
			line-height: 30px;
			margin-left: 13px;
		}

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
			h1 { padding-top: 40px; }
			.choices-btn {
			    line-height: 23px;
			    margin-left: 24px;
			}
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><button id="qa" value="Play" class="audio-btn"><i class="fa fa-play"></i></button><?php echo _("Checking what you already know... about heating and cooling"); ?></h1>
				<p><?php echo _("When you sit at the dinner table, you probably wait until your food gets cool enough to eat, but you drink your water while it is still cold."); ?></p>
				<p><?php echo _("Click on <span class='blink'>ALL</span> the correct statements you think are related to why our food get cooler, but our drinks get warmer at the dinner table."); ?></p>

				<audio id="3CWYK" controls style="display: none">
					<source src="" type="audio/mpeg">
				</audio>
				
				<div class="images">
					<div><img src="images/3/a.jpg" alt="A"><p>A</p></div>
					<div><img src="images/3/b.jpg" alt="B"><p>B</p></div>
					<div><img src="images/3/c.jpg" alt="C"><p>C</p></div>
					<div><img src="images/3/d.jpg" alt="D"><p>D</p></div>
				</div>
				<div class='choices-btn'>
					<button id="choice1" value="Play" class="audio-btn"><i class="fa fa-play"></i></button>
					<button id="choice2" value="Play" class="audio-btn"><i class="fa fa-play"></i></button>
					<button id="choice3" value="Play" class="audio-btn"><i class="fa fa-play"></i></button>
					<button id="choice4" value="Play" class="audio-btn"><i class="fa fa-play"></i></button>
				</div>
				<section>
					<form class="ac-custom ac-checkbox" autocomplete="off">
						<ul>
							<li><input id="cb1" name="cb1" type="checkbox"><label for="cb1">A. <?php echo _("Heat energy from the food flows into the cooler air around it."); ?></label></li>
							<li><input id="cb2" name="cb2" type="checkbox"><label for="cb2">B. <?php echo _("Heat energy from the air flows into the cooler drink."); ?></label></li>
							<li><input id="cb3" name="cb3" type="checkbox"><label for="cb3">C. <?php echo _("Cold energy from the drink flows into the surrounding air."); ?></label></li>
							<li><input id="cb4" name="cb4" type="checkbox"><label for="cb4">D. <?php echo _("Cold energy from the surrounding air flows into the food."); ?></label></li>
						</ul>
					</form>
				</section>
			</div>

			<div id="answer">
				<p><button id="fb" value="Play" class="audio-btn"><i class="fa fa-play"></i></button><?php echo _("If you marked A and B, you are on the right track. Heat energy only goes from something hot to something cold. As you go through this module, you may be surprised to find out that there really isn’t any such thing as <span class='key'>cold energy</span>."); ?></p>
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
		var audio = document.getElementById("3CWYK");

		$('.blink').blink({ speed: 500, blinks: 1000 });

		check.on('click', function() {
			var checkAnswer = $('input:checkbox:checked').length;
			if(checkAnswer == '')
			{
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				check.fadeOut( function () {
					next.fadeIn();
				});
				
				
				back.fadeIn();

				question.fadeOut(function() {
					$('.bg').css('background-image','url(images/3/bg2.jpg)');
					answer.fadeIn();
					window.location.hash = "#answer";
				    audio.pause();
				    $(".audio-btn").html('<i class="fa fa-play"></i>');
					$(".audio-btn").val("Play");
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
			    audio.pause();
			    $(".audio-btn").html('<i class="fa fa-play"></i>');
				$(".audio-btn").val("Play");
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

		$(document).ready(function() {
			$(".audio-btn").click(function (){
				$('.audio-btn').html('<i class="fa fa-play"></i>');
			    var txt = $(this).val();
			    var id = $(this).attr('id');
			    var audio = document.getElementById("3CWYK");
		    	if(id=='qa'){
		    		if($("#3CWYK").attr('src') != "media/3CWYK.mp3")
			    		$('#3CWYK').attr('src', "media/3CWYK.mp3");
			    } else if (id=='choice1') {
		    		if($("#3CWYK").attr('src') != "media/3aCWYK.mp3")
			    		$('#3CWYK').attr('src', "media/3aCWYK.mp3");
			    } else if (id=='choice2') {
		    		if($("#3CWYK").attr('src') != "media/3bCWYK.mp3")
			    		$('#3CWYK').attr('src', "media/3bCWYK.mp3");
			    } else if (id=='choice3') {
		    		if($("#3CWYK").attr('src') != "media/3cCWYK.mp3")
			    		$('#3CWYK').attr('src', "media/3cCWYK.mp3");
			    } else if (id=='choice4') {
		    		if($("#3CWYK").attr('src') != "media/3dCWYK.mp3")
			    		$('#3CWYK').attr('src', "media/3dCWYK.mp3");
			    } else if (id=='fb') {
		    		if($("#3CWYK").attr('src') != "media/3FB.mp3")
			    		$('#3CWYK').attr('src', "media/3FB.mp3");
			    }

				if(txt == 'Play') {
					audio.play();
					$(this).html('<i class="fa fa-pause"></i>');
					$(this).val("Pause");
				}
				else if (txt == 'Pause') {
					audio.pause();
					$(this).html('<i class="fa fa-play"></i>');
					$(this).val("Play");
				}
				$('#3CWYK').bind("ended", function() {
			        $('#3CWYK').currentTime = 0;
					$('.audio-btn').html('<i class="fa fa-play"></i>');
			        $('.audio-btn').val("Play");
			    });
			});
		});
	</script>
	
	<?php include("setlocale.php"); ?>
</body>
</html>
