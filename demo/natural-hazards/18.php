<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.wrap { border-left: 1px dashed #98A8FF; border-right: 1px dashed #98A8FF; overflow-y: hidden; }
.bg { background-image: url('images/18/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; overflow-y: hidden; }
#buttons .next { display: none; }

h1 { color: #003399; }
h2 { padding: 0; }
p { margin:0; font-size: 22px; padding: 0; color: #000; text-align: center; }

#answer { display: none; }
#choices1, #choices2 { width: 100%; margin: 0 auto; padding: 0; }
#question #choices1 { margin-top: 10px; }
.choice { width: 240px; height: 100%; margin-right: 10px; float: left; padding: 0 20px 5px 20px; margin: 0 auto; }
#answer-icon { display:inline-block; height: 30px; margin-right: 10px; }
.img-align { vertical-align: sub; }
#answer1 { padding-top: 10px; }

#hexaflip1, #hexaflip2, #hexaflip3, #hexaflip4, #hexaflip5, #hexaflip6 { margin: 0 auto; }
.hexaflip-cube .hexaflip-side { height: 101%; }

.geoweather { list-style: none; font-size: 16px; margin: 0 auto; padding: 0; text-align: center; background-color: #fff;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
width: 120px;
margin-top: 5px;
display: none;
z-index: 1;
overflow-x: visible;
overflow-y: hidden;
position: absolute;
margin-left: 60px;
}
.geoweather a { text-decoration: none; color: #000;  display: block; margin: 0; padding-top: 3px; }
.geoweather li { display: block; height: 20px; border-bottom: 1px solid #ccc; padding: 8px 5px 5px 5px; }
.geoweather li:first-child:hover { background-color: #ccc;
-webkit-border-top-left-radius: 10px;
-moz-border-radius-topleft: 10px; 
border-top-left-radius: 10px;
-webkit-border-top-right-radius: 10px;
-moz-border-radius-topright: 10px; 
border-top-right-radius: 10px;
z-index: 1;
}
.geoweather li:last-child:hover { background-color: #ccc;
-webkit-border-bottom-left-radius: 10px;
-moz-border-radius-bottomleft: 10px; 
border-bottom-left-radius: 10px;
-webkit-border-bottom-right-radius: 10px;
-moz-border-radius-bottomright: 10px; 
border-bottom-right-radius: 10px;
}
#question { position: relative; z-index: 5; }
.geoweather img { height: 20px;  vertical-align: text-bottom; float: left; margin-right: 5px; }
.choice span { margin: 0 auto; margin-top: 5px; display: block; font-size: 16px; width: 120px; background-color: #fff; border: 1px solid #2ba9e6;
cursor: pointer; text-align: center; vertical-align: middle; line-height: 30px; padding-top: 3px; }
.choice span img { height: 20px; vertical-align: text-bottom; float: left; margin-right: 5px; padding: 3px 0 0 5px; }
.choice a { text-decoration: none; color: #000;  display: block; margin: 0; }
#mark1 img, #mark2 img, #mark3 img, #mark4 img, #mark5 img, #mark6 img { display:inline-block; height: 30px; float: left; margin-top: 8px; margin-left: 20px; }

html[dir="rtl"] p { text-align: center; }
html[dir="rtl"] .geoweather { margin-right: 60px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.choice { width: 195px; }
	.geoweather { margin-left: 40px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	h2 { font-size: 22px; }
	#answer1 p { font-size: 20px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("Match each picture to its natural disaster by flipping or rotating the box to show the correct image that matches the label. Then, click on \"weather\" or \"geology\" under each illustration to show if each natural hazard is weather related or geology related."); ?></h2>
				<div id="choices1" class='data-choices'>
					<div class="choice" id="earthquake">
						<p><?php echo _("Earthquake"); ?></p>
						<div id="hexaflip1"></div>
						<div id="mark1"></div><span id="q1" class='checks' data-value="select"><?php echo _("Select"); ?><a data-name="none"></a></span>
						<ul class="geoweather">
							<li><img src="images/18/geological.png"><a href="#" data-name="geological"><?php echo _("Geological"); ?></a></li>
							<li><img src="images/18/weather.png"><a href="#" data-name="weather"><?php echo _("Weather"); ?></a></li>
						</ul>
					</div>
					<div class="choice" id="hurricane">
						<p><?php echo _("Hurricane"); ?></p>
						<div id="hexaflip2"></div>
						<div id="mark2"></div><span id="q2" class='checks' data-value="select"><?php echo _("Select"); ?><a data-name="none"></a></span>
						<ul class="geoweather">
							<li><img src="images/18/geological.png"><a href="#" data-name="geological"><?php echo _("Geological"); ?></a></li>
							<li><img src="images/18/weather.png"><a href="#" data-name="weather"><?php echo _("Weather"); ?></a></li>
						</ul>
					</div>
					<div class="choice" id="volcano">
						<p><?php echo _("Volcano"); ?></p>
						<div id="hexaflip3"></div>
						<div id="mark3"></div><span id="q3" class='checks' data-value="select"><?php echo _("Select"); ?><a data-name="none"></a></span>
						<ul class="geoweather">
							<li><img src="images/18/geological.png"><a href="#" data-name="geological"><?php echo _("Geological"); ?></a></li>
							<li><img src="images/18/weather.png"><a href="#" data-name="weather"><?php echo _("Weather"); ?></a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="b4"></div>
				<div id="choices2" class='data-choices'>
					<div class="choice" id="tsunami">
						<p><?php echo _("Tsunami"); ?></p>
						<div id="hexaflip4"></div>
						<div id="mark4"></div><span id="q4" class='checks' data-value="select"><?php echo _("Select"); ?><a data-name="none"></a></span>
						<ul class="geoweather">
							<li><img src="images/18/geological.png"><a href="#" data-name="geological"><?php echo _("Geological"); ?></a></li>
							<li><img src="images/18/weather.png"><a href="#" data-name="weather"><?php echo _("Weather"); ?></a></li>
						</ul>
					</div>
					<div class="choice" id="drought">
						<p><?php echo _("Drought"); ?></p>
						<div id="hexaflip5"></div>
						<div id="mark5"></div><span id="q5" class='checks' data-value="select"><?php echo _("Select"); ?><a data-name="none"></a></span>
						<ul class="geoweather">
							<li><img src="images/18/geological.png"><a href="#" data-name="geological"><?php echo _("Geological"); ?></a></li>
							<li><img src="images/18/weather.png"><a href="#" data-name="weather"><?php echo _("Weather"); ?></a></li>
						</ul>
					</div>
					<div class="choice" id="tornado">
						<p><?php echo _("Tornado"); ?></p>
						<div id="hexaflip6"></div>
						<div id="mark6"></div><span id="q6" class='checks' data-value="select"><?php echo _("Select"); ?><a data-name="none"></a></span>
						<ul class="geoweather">
							<li><img src="images/18/geological.png"><a href="#" data-name="geological"><?php echo _("Geological"); ?></a></li>
							<li><img src="images/18/weather.png"><a href="#" data-name="weather"><?php echo _("Weather"); ?></a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="b4"></div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1> 
				<p id="answertext"><span id="answer1"></span></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Weather or geology?"); ?></strong></section></section>
	<script src="scripts/hexaflip.js"></script>
    <script>
        var hexa1, hexa2, hexa3, hexa4, hexa5, hexa6;
		set1 = ['./images/18/tsunami.png','./images/18/earthquake.jpg','./images/18/tornado.png','./images/18/drought.png'];
		set2 = ['./images/18/volcano.png','./images/18/tsunami.png','./images/18/earthquake.jpg','./images/18/hurricane.png'];
		set3 = ['./images/18/drought.png','./images/18/hurricane.png','./images/18/volcano.png','./images/18/earthquake.jpg'];
		set4 = ['./images/18/hurricane.png','./images/18/tornado.png','./images/18/earthquake.jpg','./images/18/tsunami.png'];
		set5 = ['./images/18/earthquake.jpg','./images/18/drought.png','./images/18/tornado.png','./images/18/hurricane.png'];
		set6 = ['./images/18/tornado.png','./images/18/volcano.png','./images/18/drought.png','./images/18/tsunami.png'];

		for(var i = 1; i < 7; i++) {
			window["hexa" + i] = new HexaFlip(document.getElementById('hexaflip' + i), { set: window["set" + i] }, { size: 150 });
		}
    </script>
	<script>
	var sAnswer1, sAnswer2, sAnswer3, sAnswer4, sAnswer5, sAnswer6;
	var answered = 1;
	var counter;
	var textstr = '';
	var correct = true;
	var nullAnswer = false;
	$(document).ready(function() {
		/* Back Screen */
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = '17.php';
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');			
					$('#answer-icon').removeClass('img-align');
					$('#choices2').prependTo($('#question div.b4:last-child'));
					$('#choices1').prependTo($('#choices2'));
					correct = true;
					for (var i = 1; i < 7; i++) {
						$('#mark' + i).empty();
					}
					
					for(var i = 0; i < 6; i++) {
						window["hexa" + (i + 1)]._onTouchStart = function(e, cube) {
							e.preventDefault();
							cube.touchStarted = true;
							cube.holder.classList.add('no-tween');
							if (e.type === 'touchstart') {
								return cube.start = e.touches[0][this.eProp];
							} else {
								return cube.start = e[this.eProp];
							}
						};
					}
				});
			}
		});
		
		/* Check Answer */
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answers."); ?>");
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){
					$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
					$('#answer').fadeIn();   
					//correct answers for images
					var answers = ["./images/18/earthquake.jpg","./images/18/hurricane.png","./images/18/volcano.png","./images/18/tsunami.png","./images/18/drought.png","./images/18/tornado.png"]
					//correct answers for drop downs
					var answers2 = ["geological","weather","geological","geological","weather","weather"];
					
					for(var i = 0; i < 6; i++) {
						checkAnswer(i+1, answers[i], window["hexa" + (i + 1)].getValue(), answers2[i], $('#q' + (i + 1) + ' a').data('name'));
						window["hexa" + (i + 1)]._onTouchStart = function(e, cube) {
							return false;
						}
					}
					
					if(correct) {
						textstr = "<?php echo _("Correct! A tsunami is when massive harbor waves cause damage when they crash into land. A tornado is a funnel of air from the ground to the sky. These are all natural hazards that have many effects on the environment and people. A hurricane is a storm that forms at sea and strikes land. A drought is what happens when there is no rain for a long time, you can see the crackles in the land."); ?>";
						$('#answer1').addClass('green');
					} else {
						textstr = "<?php echo _("Not quite. A tsunami is when massive harbor waves cause damage when they crash into land. A tornado is a funnel of air from the ground to the sky. These are all natural hazards that have many effects on the environment and people. A hurricane is a storm that forms at sea and strikes land. A drought is what happens when there is no rain for a long time, you can see the crackles in the land."); ?>";
						$('#answer1').addClass('red');
					}
					
					$('#answer1').text(textstr);
					$('#choices2').prependTo($('#answer > p'));
					$('#choices1').prependTo($('#choices2'));	
					
					if(answered == 0) {
						saveAnswer('natural-hazards-qq5-a', sAnswer1);
						saveAnswer('natural-hazards-qq5-b', sAnswer2);
						saveAnswer('natural-hazards-qq5-c', sAnswer3);
						saveAnswer('natural-hazards-qq5-d', sAnswer4);
						saveAnswer('natural-hazards-qq5-e', sAnswer5);
						saveAnswer('natural-hazards-qq5-f', sAnswer6);
						anwered = 1;
					}
				}); // end question fade
			} // end else
		}); // end check answer
		
		$('.choice span').click( function() {
			if(!$('#answer').is(':visible')) {
				$(this).hide();
				var p = $(this).parent();
				var u = p.find($('.geoweather'));
				u.slideDown("fast");
			}
		});
		
		$('.geoweather li').click( function() {
			var selected = $(this).children().clone(true,true);
			var p = $(this).parent()
			var p2 = p.parent();
			var s = p2.find("span");
			var u = p2.find($('.geoweather'));
			u.hide();
			
			s.html(selected);
			s.delay(3000).show();
		});
	});

	function checkAnswer(index, answer, studentAnswer, answer2, studentAnswer2) {
		var check = $('<img src="images/18/correct.png">');
		var wrong = $('<img src="images/18/wrong.png">');
		
		if(studentAnswer == "./images/18/earthquake.jpg") window["sAnswer" + index] = "earthquake";
		else if(studentAnswer == "./images/18/hurricane.png") window["sAnswer" + index] = "hurricane";
		else if(studentAnswer == "./images/18/volcano.png") window["sAnswer" + index] = "volcano";
		else if(studentAnswer == "./images/18/tsunami.png") window["sAnswer" + index] = "tsunami";
		else if(studentAnswer == "./images/18/drought.png") window["sAnswer" + index] = "drought";
		else if(studentAnswer == "./images/18/tornado.png") window["sAnswer" + index] = "tornado";

		window["sAnswer" + index] = window["sAnswer" + index] + "-" + studentAnswer2;
		
		if(index!=4) {
			if(answer == studentAnswer && answer2 == studentAnswer2) {
				check.appendTo($('#mark' + index));
			} else {
				wrong.appendTo($('#mark' + index));
				correct = false;
			}
		} else {
			if(answer == studentAnswer && answer2 != "none") {
				check.appendTo($('#mark' + index));
				sAnswer4 = "tsunami-geological";
			} else {
			wrong.appendTo($('#mark' + index));
				correct = false;
			}
		}
	}
	
	function checkNull() {
		var checkData = $('.checks').data('value');
	
		   //when language != english, checks if #q1 has an image: this means that student has selected an answer for q1
		if(!$('#q1').find('img').length || !$('#q2').find('img').length || !$('#q3').find('img').length ||
			!$('#q4').find('img').length || !$('#q5').find('img').length || !$('#q6').find('img').length ) nullAnswer = true;
		   
	}	
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
