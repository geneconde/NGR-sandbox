<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/svgmodernizr.custom.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
body { color: #fff; font-size: 24px; }
.bg { background-image: url('images/18/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #d4c08b; }
h2 { color: #fff; padding-bottom: 5px; }
p { color: orange; font-weight: normal; }
#answer p { color: #fff; }
img.back-toggle-answer, #buttons .next { display: none; }
#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
#answer .pic { height: 200px; text-align: center; float: none; margin: 0 auto; }
#answer .pic img { height: 100%; width: 267px; }

table { border-spacing: 1; margin: 0 auto; padding: 0; line-height: 24px; }
th { height: 35px; width: 190px; color: #fff; border: 3px solid #fff99d; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
td { height: 50px; width: 190px; border: 3px solid #f49e9c; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; padding: 5px; margin: 0 auto; text-align: center; top: 0; left: 0; }

#choices { height: 110px; margin: 0 auto: width: 100%; }
#choices .pic { height: 100%; float: left; width: 25%; text-align: center; }
#choices .pic img { height: 100%; width: 175px; margin-right: 20px; cursor: pointer; margin: 0 auto; }
#choices .pic p { font-size: 24px; text-align: center; padding: 0; }
img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}

.lightpurple { color: #c893e9; }
.pink { color: #ff9dad; }
.lightyellow { color: #dee994; }
.brown { color: #442328; }

html[dir='rtl'] span#answer1 { font-size: 22px; }

html[dir="rtl"] .answer-item p { width: 95% !important; }
html[dir="rtl"] #answer-icon { margin-right: 0; margin-left: 10px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("Geologists are people who study rocks and minerals. They often use physical properties to identify things. A student had a mineral sample that was gray in color and had a hardness of 6. The mineral made a white streak when scraped on a ceramic plate."); ?></h2>
				<table>
					<tr>
						<th><?php echo _("COLOR"); ?></th>
						<th><?php echo _("HARDNESS"); ?></th>
						<th><?php echo _("STREAK"); ?></th>
						<th><?php echo _("MINERAL"); ?></th>
					</tr>
					<tr>
						<td><?php echo _("gray, black or reddish brown"); ?></td>
						<td>6</td>
						<td><?php echo _("red"); ?></td>
						<td><?php echo _("Hematite"); ?></td>
					</tr>
					<tr>
						<td><?php echo _("black"); ?></td>
						<td>6</td>
						<td><?php echo _("black"); ?></td>
						<td><?php echo _("Magnetite"); ?></td>
					</tr>
					<tr>
						<td><?php echo _("red, reddish brown, brown or black"); ?></td>
						<td>6.5 - 7.5</td>
						<td><?php echo _("white"); ?></td>
						<td><?php echo _("Garnet"); ?></td>
					</tr>
					<tr>
						<td><?php echo _("gray or white"); ?></td>
						<td>6 - 6.5</td>
						<td><?php echo _("white"); ?></td>
						<td><?php echo _("Feldspar"); ?></td>
					</tr>
				</table>
				<p><?php echo _("According to the table above, the mineral sample was most likely:"); ?></p>
				<div id="choices">
					<div class="pic">
						<img src="images/18/hematite.png" id="a1" class="border" data-name="A">
						<p><span class="brown"><?php echo _("Hematite"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/18/magnetite.png" id="b1" class="border" data-name="B">
						<p><span class="lightyellow"><?php echo _("Magnetite"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/18/garnet.png" id="c1" class="border" data-name="C">
						<p><span class="pink"><?php echo _("Garnet"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/18/feldspar.png" id="d1" class="border" data-name="D">
						<p><span class="lightpurple"><?php echo _("Feldspar"); ?></span></p>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<p><?php echo _("You answered..."); ?></p>
					<div class="pic"><img id="imganswer"></div>
					<p><span id="textanswer"></span></p>
					<p><img src="" id="answer-icon"><span id="answer1"></span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var answer = '';
	var textstr = '';
	//var answered = 0;
	var nullAnswer = false;
	$(document).ready(function() {
		$("#choices img").each(function() {
			var image = $(this);
			var imgVal = $(this).data('name');

			image.click(function() {
				clearBorders();
				//if(answer != imgVal) {
					image.addClass('border-off');
					answer = imgVal;
				//}
			});
		});
	
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "17.php";
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer-icon').removeClass('img-align');
					$('#textanswer').removeClass('brown');
					$('#textanswer').removeClass('lightyellow');
					$('#textanswer').removeClass('pink');
					$('#textanswer').removeClass('lightpurple');
					window.location.hash = '';
				});
			}
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert('<?php echo _("Please select your answer."); ?>');
				nullAnswer = false;
			} else {
				$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					window.location.hash = '#answer';
					

					/* For Checking */
					if (answer == "D") {
						textstr = "<?php echo _("Correct, feldspar is most likely the sample mineral."); ?>";
						$('#textanswer').text('<?php echo _("Feldspar"); ?>');
						$('#textanswer').addClass('lightpurple');
						$('#imganswer').attr("src","images/18/feldspar.png");
						$('#answer-icon').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
					} else {
						if (answer == "A") {
							textstr = "<?php echo _("Not quite, hematite made a red streak. Feldspar is most likely the sample which made a white streak."); ?>";
							$('#textanswer').text("<?php echo _("Hematite"); ?>");
							$('#textanswer').addClass('brown');
							$('#imganswer').attr("src","images/18/hematite.png");
						} else if (answer == "B") {
							textstr = "<?php echo _("Not quite, magnetite is black in color. Feldspar is most likely the sample which is gray."); ?>";
							$('#textanswer').text("<?php echo _("Magnetite"); ?>");
							$('#textanswer').addClass('lightyellow');
							$('#imganswer').attr("src","images/18/magnetite.png");
						} else if (answer == "C") {
							textstr = "<?php echo _("No, garnet is not the same color, nor does the hardness range match the sample mineral. Feldspar is most likely the sample mineral."); ?>";
							$('#textanswer').text("<?php echo _("Garnet"); ?>");
							$('#textanswer').addClass('pink');
							$('#imganswer').attr("src","images/18/garnet.png");
						}
						$('#answer-icon').attr("src", "images/others/wrong2.png");
						$('#answer-icon').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					/* End Checking */
					
					/*
					if(answered == 0) {
						saveAnswer('properties-of-matter-qq5-a',answer);
					} // end save to db
					*/
				});	// end question fade
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function clearBorders() {
		$('#choices img').each(function() {
			$(this).removeClass('border-off');
		});
	}
	
	function checkNull() {
		if(answer == '') {
			nullAnswer = true; 
		}
	}
    </script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Dazzling minerals"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
