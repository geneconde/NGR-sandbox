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
<script src="scripts/raphael.js"></script>
<script src="scripts/jquery.usmap.js"></script>
<script src="scripts/color.jquery.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { overflow: hidden; }
.bg { background-image: url('images/14/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }
#buttons .next { display: none; }
h1 { color: #003399; }
h3 { margin:0; padding: 0 10px; font-weight:normal; text-align: center; font-size: 16px; }
p { margin:0; font-size: 24px; padding: 10px; color: #000; text-align: center; }

#hexaflip { margin: 0 auto; }

#answer { display: none; }
#choices { float:left; width: 45%; text-align: center; margin: 5px 10px; }
#choices p { margin-left: 40px; text-align: left; }
#answer-icon { display:inline-block; height: 30px; margin-right: 10px; }
#answer h1 { padding-bottom: 20px; }
#answer p:nth-child(2) { padding-top: 5px !important; }
#answer #hexaflip { margin-top: 15px; }
.img-div { width: 100%; margin: 0 auto; text-align: center; }

#map-group { width: 420px; float: right; margin: 5px 10px; }
#map-group h2 { padding: 0 !important; font-size: 20px; }
#map { width: 87%; height: 250px; border: 1px solid chocolate; margin: 0 auto; }
#map svg { left: 0 !important; }
#zone1, #zone2, #zone3, #zone4 { float: left; width: 50px; height: 35px; margin-right: 5px; }
#zone1 { background-color: #fff; }
#zone2 { background-color: #ffff00; }
#zone3 { background-color: #ff9900; }
#zone4 { background-color: #ff0000; }
#zones { width: 130px; margin: 0 auto; padding-top: 10px; }
#zones h3 { text-align: left; }
article { padding-top: 5px; }
<?php if($language == "zh_CN") { ?>
   #choices p { font-size: 22px; margin-left: 0; }
   #zones { width: 400px; }
   
<?php } else if ($language == "ar_EG") {?>
  #zones { width: 220px; }
<?php } else if ($language == "es_ES") {?>
  #zones { width: 340px; }
<?php } ?>

html[dir="rtl"] #choices p { text-align: right; }
html[dir="rtl"] #answer p { width: 800px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#choices { width: 250px; }
	#choices p { margin-left: 0; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	#map-group { margin: -20px 10px 0; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?> </h1>
				<h2><?php echo _("Look at the map below. Use the key to determine which area in the United States has the least risk of having a tornado."); ?></h2>
				<div id="choices">
					<h3><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></h3>
					<!--<h3 class="red"><?php echo _("Click, hold and slide mouse up or down."); ?></h3><br>-->
					<div id="hexaflip"></div>
					<div class="clear" id="b4hex"></div><br>
					<p><?php echo _("A. The Northeast - New England"); ?></p>
					<p><?php echo _("B. The Great Lakes Region"); ?></p>
					<p><?php echo _("C. Florida and Texas"); ?></p>
					<p><?php echo _("D. California and Western US"); ?></p>
				</div>
				<div id="map-group">
					<h3><?php echo _("Hover your mouse on each US State abbreviation to highlight their location."); ?></h3>
					<div id="map"></div>
					<div id="zones">
						<h3><?php echo _("WIND ZONES"); ?></h3>
						<article>
							<div id="zone1"></div>
							<h3><?php echo _("ZONE I"); ?></h3>
							<h3><?php echo _("(130mph)"); ?></h3>
						</article>
						<article>
							<div id="zone2"></div>
							<h3><?php echo _("ZONE II"); ?></h3>
							<h3><?php echo _("(160mph)"); ?></h3>
						</article>
						<article>
							<div id="zone3"></div>
							<h3><?php echo _("ZONE III"); ?></h3>
							<h3><?php echo _("(200mph)"); ?></h3>
						</article>
						<article>
							<div id="zone4"></div>
							<h3><?php echo _("ZONE IV"); ?></h3>
							<h3><?php echo _("(250mph)"); ?></h3>
						</article>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="img-div"><img id="imganswer" src=""></div>
				<p><span id="textanswer"></span></p>
				<p><img src="" id="answer-icon"><span id="answer1"></span></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<script src="scripts/hexaflip.js"></script>
	<script>
		var hexa,
            images = [
                './images/14/a.png',
                './images/14/b.png',
                './images/14/c.png',
                './images/14/d.png'
            ];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 150 });
    </script>
	<section id="preloader"><section class="selected"><strong><?php echo _("And the first quiz question is..."); ?></strong></section></section>
	<script>
	var textstr = "";
	var answer = "";
	var answered = 1;
	$(document).ready(function() {
		$('a.back-toggle').click(function() {
			if($('#question').is(':visible')){
				document.location.href = "13.php";
			} else if ($('#answer').is(':visible')){
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer-icon').removeClass('img-align');
					$('#b4hex').before($('#hexaflip'));
				});	
			}
		});
		
		$('a.check-toggle').click(function(){
			$('#question').fadeOut(function(){
				$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				$('#answer').fadeIn();
				window.location.hash = "#answer";

				var hexavalue = hexa.getValue();
				if (hexavalue == './images/14/a.png') answer = "A";
				if (hexavalue == './images/14/b.png') answer = "B";
				if (hexavalue == './images/14/c.png') answer = "C";
				if (hexavalue == './images/14/d.png') answer = "D";

				if(answer == "D") {
					textstr = "<?php echo _("Correct, the western states of the US are in Zone I which have the least tornado risk."); ?>";
					$('#textanswer').text('<?php echo _("D. California and Western US"); ?>');
					$('#imganswer').attr("src","images/14/d.png");
					$('#answer-icon').attr("src", "images/19/correct.png");
					$('#answer1').addClass('green');
				} else {
					textstr = '';
					if(answer == "A") {
						textstr = "<?php echo _("No, the Northeastern states are in Zone II which have a higher risk than Zone I."); ?>";
						$('#textanswer').text('<?php echo _("A. The Northeast - New England"); ?>');
						$('#imganswer').attr("src","images/14/a.png");
					} else if (answer == "B") {
						textstr = "<?php echo _("Not quite, that region is mostly orange- in Zone III."); ?>";
						$('#textanswer').text('<?php echo _("B. The Great Lakes Region"); ?>');
						$('#imganswer').attr("src","images/14/b.png");
					} else if (answer == "C") {
						textstr = "<?php echo _("No, Florida and Texas are in zone III, they have a high risk of having a tornado."); ?>";
						$('#textanswer').text('<?php echo _("C. Florida and Texas"); ?>');
						$('#imganswer').attr("src","images/14/c.png");
					}
					$('#answer-icon').attr("src", "images/19/wrong.png");
					$('#answer-icon').addClass('img-align');
					$('#answer1').addClass('red');
				}
				$('#answer1').text(textstr);
				if (answered == 0) {
					saveAnswer('natural-hazards-qq1-a', answer);
					answered = 1;
				}
			});
		});
		
		$('#map').usmap({
			showLabels: true,
			stateHoverStyles: {fill: '#007FFF'},
			stateStyles: {fill: 'white', 'stroke': '#999','stroke-width': 1},
			stateSpecificStyles: {
				'HI': {fill: 'yellow'},
				'NM': {fill: 'yellow'},
				'CO': {fill: 'yellow'},
				'WY': {fill: 'yellow'},
				'MT': {fill: 'yellow'},
				'ND': {fill: 'yellow'},
				'MN': {fill: 'yellow'},
				'ME': {fill: 'yellow'},
				'NH': {fill: 'yellow'},
				'MA': {fill: 'yellow'},
				'RI': {fill: 'yellow'},
				'CT': {fill: 'yellow'},
				'MD': {fill: 'yellow'},
				'DE': {fill: 'yellow'},
				'NJ': {fill: 'yellow'},
				'VA': {fill: 'yellow'},
				'NY': {fill: 'yellow'},
				'VT': {fill: 'yellow'},
				'KS': {fill: 'red'},
				'MO': {fill: 'red'},
				'OK': {fill: 'red'},
				'AR': {fill: 'red'},
				'TN': {fill: 'red'},
				'KY': {fill: 'red'},
				'IN': {fill: 'red'},
				'IL': {fill: 'red'},
				'IA': {fill: 'orange'},
				'NE': {fill: 'orange'},
				'SD': {fill: 'orange'},
				'WI': {fill: 'orange'},
				'TX': {fill: 'orange'},
				'LA': {fill: 'orange'},
				'AL': {fill: 'orange'},
				'MS': {fill: 'orange'},
				'GA': {fill: 'orange'},
				'FL': {fill: 'orange'},
				'SC': {fill: 'orange'},
				'NC': {fill: 'orange'},
				'WV': {fill: 'orange'},
				'PA': {fill: 'orange'},
				'OH': {fill: 'orange'},
				'MI': {fill: 'orange'},
			  } 
		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
