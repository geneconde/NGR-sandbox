<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
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
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/3/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #4F8AD3; }
img.back-toggle-answer, #buttons .next { display: none; }
p { color: #000; text-align: left; padding: 0; }
#answer p { color: #fff; }
.img-container { height: 200px; width: 100%; margin-top: 15px; }
.img-container img { height: 100% }

img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}

.pic { height: 160px; float: left; width: 33%; text-align: center; }
.pic img { height: 100%; margin-right: 20px; cursor: pointer; margin: 0 auto; }
.pic p { font-size: 24px; text-align: center; color: #002980; }

.orange { color: rgb(150, 97, 0); }
.darkgreen { color: #4D6800; }
.brown { color: #47362A; }
.blue { color: #314AAF; }
.purple { color: #A804D1; }
.lightred { color: #AC3636; }

#answer p { padding-top: 15px; }

<?php if($language == "es_ES") { ?>
	h1 { font-size:28px; }
<?php } ?>
html[dir="rtl"] .pic p { text-align: center; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 35px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question" class="screens">
				<h1><?php echo _("Checking what you know... about being built to survive"); ?></h1>
				<p><?php echo _("Owls survive by eating mice and other small animals and by protecting themselves against animals that might eat them. Look at the images below and click on all the things that help owls survive."); ?></p>
				<div class="img-container">
					<div class="pic">
						<img src="images/3/owl1.jpg" class="border">
						<p><span class="lightred"><?php echo _("Able to fly"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/3/owl2.jpg" class="border">
						<p><span class="darkgreen"><?php echo _("Different color of feather"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/3/owl3.jpg" class="border">
						<p><span class="brown"><?php echo _("Strong claws"); ?></span></p>
					</div>
				</div>
				<div class="img-container">
					<div class="pic">
						<img src="images/3/owl4.jpg" class="border">
						<p><span class="orange"><?php echo _("Hooked beak"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/3/owl5.jpg" class="border">
						<p><span class="blue"><?php echo _("Long tail feathers"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/3/owl6.jpg" class="border">
						<p><span class="purple"><?php echo _("Night vision"); ?></span></p>
					</div>
				</div>
			</div>
			<div id="answer" class="screens">
				<p><?php echo _("All of the features mentioned help owls survive in some way. Their night vision allows them to find prey at night and protect themselves. They can fly without making much noise. They have special feathers that minimize the sound of their wings flapping. The strong claws can grab the prey and the hooked beak will help tear it. The color of the owl's feathers help it blend in with the environment."); ?></p>

			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		if(hash == 'answer') {
			$('.screens').hide();
			$('h1').fadeOut();
			$('#answer').show(function () {
				$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				$('.bg').css('background-image', 'url("images/3/owl-bg.jpg")');
				$('.pic img').unbind('click').attr('disabled', 'disabled');
			});
		}
	
		$(".pic img").each(function() {
			var image = $(this);
			image.click(function() {
				if(image.hasClass('border-off')) {
					image.removeClass('border-off');
				} else {
					image.addClass('border-off');
				}
			});
		});

		$('a.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = '2.php';
			} else if($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('h1').fadeIn(); 
					$('.bg').css('background-image', 'url("images/3/bg.jpg")');
					$('.img-container').appendTo($('#question'));
					$('.pic img').removeClass('disabled');
					$('.pic img').removeClass('borderSelect');
					$('.pic img').bind('click');
				});
			}
		});
		
				
		$('a.check-toggle').click(function(){
			$('h1').fadeOut();
			$('#question').fadeOut(function(){ 
				$('#answer').fadeIn();
				$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('.bg').css('background-image', 'url("images/3/owl-bg.jpg")');
			});
		});
	});
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing for flight..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>