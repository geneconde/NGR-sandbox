<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/captionHoverEffects.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<style>
.bg { background-image: url('images/6/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #ffa100; border-right: 1px dashed #ffa100; }
h1 { color: #A56800; }
img.next-toggle, img.back-toggle-screen { display:none; }
p { padding-top: 1%; }

#screen1 div, #screen2 div { margin-top: 1%; }
#screen1 .col2 img { display: block; width: 400px; margin-left: 20px; }
#screen1 .col2 p { width: 400px; width: 400px; margin-left: 20px; text-align: center; }

#screen2 .col1 { width: 49%; }
#screen2 .col2 { width: 50%; margin-top: 0%; }
#screen2 .col2 img { display: block; width: 400px; margin-left: 20px; }
#screen2 .col2 p { text-align: center; color: #2648B6; width: 400px; margin-left: 20px; }

#screen2 { display: none; }
.col1 { float: left; width: 50%; }
.col2 { float: right; width: 50%; }
.col2 p { color: black !important; font-size: 20px; margin-top: 10px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("More big ideas... about changing to survive"); ?></h1>
				<p><?php echo _("Over the course of more than 4 billion years of earth history, living things have changed enough to account for all of the diversity of the life we see on our planet now, and all of the life we have evidence for in the past."); ?></p>
				
				<div class="col1">
					<p><?php echo _("<span class='key'>Evolution</span> happens because changes, called mutations, sometimes occur in the DNA that carries the information that makes living things what they are. There are different forms of change: natural selection, artificial selection, sexual selection, and punctuated equilibrium. <span class='key'>Natural selection</span> is when some organisms survive and reproduce more often than others, and their characteristics are passed along, and the population becomes more like them over time."); ?></p>
				</div>
				
				<div class="col2">
					<img src="images/6/kangaroo.jpg" />
					<p><?php echo _("The Albino Eastern Gray Kangaroo shows an example of color mutation in animals"); ?></p>
				</div>
			</div>
			
			<div class="screens" id="screen2">
				<p><?php echo _("In <span class='key'>sexual selection</span>, one sex (usually females) chooses their mates for reasons unique to each species. <span class='key'>Punctuated equilibrium</span> is usually associated with natural disasters. When a disaster like a volcanic eruption or meteorite impact occurs, which members of a population survive is largely a matter of luck. The traits passed into later generations are those belonging to the survivors. <span class='key'>Artificial selection</span> is when humans are involved in choosing which plants or animals can mate and form later generations. Artificial selection is the basis of modern forms of agriculture."); ?></p>
				<div class="col1">
					<p><?php echo _("Selective breeding based on some favored characteristics is an example of artificial selection. For many generations, farmers have allowed only the most productive plants and animals to reproduce. The strongest bulls are mated with cows that produce the most milk. Tall, vigorous corn plants are mated with those that are tolerant of drought."); ?></p>
				</div>
				<div class="col2">
					<img src="images/6/chihuahua.jpg" />
					<p><?php echo _("The Chihuahua and Great Dane show the different sizes of dogs. This is an example of selective breeding."); ?></p>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#screen2" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _('Read More'); ?>"></a>
		<a href="7.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Evolution of living things"); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2; // Set number of screens for this page
	
	$(document).ready(function() {
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen = screenCount) { //refresh on screen2
					$('#screen2').fadeIn();
					$('img.readmore-toggle').fadeOut( function(){
						$('img.next-toggle').fadeIn();
					});
				} else {
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('img.back-toggle').fadeIn();
					$('img.next-toggle').fadeOut(function(){$('img.readmore-toggle').fadeIn();});
				}
			});
		}

		$('img.readmore-toggle').click(function(){
			$('#screen1').fadeOut(function(){
				$('#screen2').fadeIn();
				$('img.readmore-toggle').fadeOut( function(){
					$('img.next-toggle').fadeIn();
				});
				
			});
		});

		$('img.back-toggle').click(function(){
			if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('img.back-toggle').fadeIn();
					$('img.next-toggle').fadeOut(function(){$('img.readmore-toggle').fadeIn();});
				});
			}else{
				$('img.back-toggle').parent().attr('href','5.php');
			}
		});
	});
	
	</script>
	
	<script src="scripts/toucheffects.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
