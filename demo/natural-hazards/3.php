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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>
.bg { background-image: url('images/3/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }
#answer { display: none; max-width: 95%; margin: 0 auto; text-align: center; }
#answer p { text-align: left !important; }
h1 { margin:0; font-size: 35px; padding: 10px 0; font-weight: bold; color: darkslateblue; } 
p, label { margin:0; font-size: 24px; padding: 10px; color: #000; }
label, input {  margin: 20px 0px !important; }
input { margin-left: 10px !important; }
.pic { height: 300px; text-align: center; }
.pic img { height: 100%; }
img.next-toggle { display: none; }
.bold { font-weight: bold; }
input[type="checkbox"] { opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="checkbox"] + label span { background: url('images/3/checkbox.png') left top no-repeat; position: relative; margin: 0 10px 0 0; padding:0 0 0 30px; cursor: pointer; line-height: 37px; min-height: 50px; display: inline-block; z-index:0; font-size: 24px; float: left; background-position: -31px 0; }
input[type="checkbox"]:checked + label span { background-position: 0 0; }
label { vertical-align: bottom; line-height: 24px; cursor: pointer; }
.text-label { vertical-align: middle; width: 850px; }

html[dir="rtl"] input[type="checkbox"] + label span { float: right; margin: 0 0 0 10px; padding:0 30px 0 0;}
html[dir="rtl"] #answer p { text-align: right !important;}

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 32px; }
<?php endif; ?>
/* @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	.buttons-back a img { width: 60px; }
	.buttons-back { position: absolute !important; bottom: 2% !important; left: 2% !important; }
	.buttons { position: absolute !important; bottom: 2% !important; right: 2% !important; }	
}	 */
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	#answer { padding-top: 20px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.text-label { width: auto; }
	/* #answer { padding-top: 20px; } */
}	
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question" class="screens">
				<h1><?php echo _("Checking what you know... about natural hazards"); ?></h1>
				<h2><?php echo _("Which of the following statements are true?"); ?></h2>
				<div id="choices">
					<input type="checkbox" name="choices" id="a" data-name="A">
					<label for="a"><span></span>
						<div class="text-label">A. <?php echo _("Natural disasters happen very rarely and these events are just the bad luck of the people that are affected."); ?></div>
					</label><br>
					<input type="checkbox" name="choices" id="b" data-name="B">
					<label for="b"><span></span>
						<div class="text-label">B. <?php echo _("Hazards are random in both time and place and just bad luck."); ?></div>
					</label><br>
					<input type="checkbox" name="choices" id="c" data-name="C">
					<label for="c"><span></span>
						<div class="text-label">C. <?php echo _("A 30-year, 100-year, or 500-year flood means that these are set time intervals between flooding events."); ?></div>
					</label><br>
					<input type="checkbox" name="choices" id="d" data-name="D">
					<label for="d"><span></span>
						<div class="text-label">D. <?php echo _("Floods are rare, atypical, almost unnatural events rather than normal river behavior."); ?></div>
					</label><br>
					<input type="checkbox" name="choices" id="e" data-name="E">
					<label for="e"><span></span>
						<div class="text-label">E. <?php echo _("None of the above are true."); ?></div>
					</label>
				</div>
			</div>
			<div id="answer" class="screens">
				<br>
				<p><?php echo _("None of the above statements are correct. Natural disasters happen all the time around the world."); ?></p>
				<p><?php echo _("Natural hazards are not caused by bad luck."); ?></p>
				<p><?php echo _("Continue with the module and read about natural disasters and natural hazards and how scientists study them."); ?></p>
				<br>
				<div class="pic">
					<img src="images/3/hazards.jpg">
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("How often do they happen?"); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		if(hash == 'answer') {
			$('.screens').hide();
			$('#answer').show(function () {
				$('a.check-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			});
		}

		$('a.check-toggle').click(function(){
			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#question').fadeOut(function(){
				$('#answer').fadeIn(); 
			}); 
		});
		
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = "2.php";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); }); 
				$('#answer').fadeOut(function(){
					$('#question').fadeIn();
				});
			}

		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
