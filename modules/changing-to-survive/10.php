<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(10, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('changing-to-survive');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'],$problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/10/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #7eb12c; border-right: 1px dashed #7eb12c; }
h1 { color: #3F2704; font-size: 28px; }
h2 { color: #7A4618; margin-bottom: 20px; text-align: center; padding-top: 1%; }
#scenario div { width: 90%; margin: 10px auto; }
#scenario div img { width: 47%; margin: 0 1%; } 
	
img.next-toggle, img.back-toggle-screen { display:none; }

#problem p { padding-top: 10px; }
#problem { display: none; }
#problem h2 { margin-bottom: 0; padding-top: 10px; }
#text { z-index: 99; position: relative; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; background-color: rgba(255, 255, 255, 0.50); padding: 5px; }
.col { margin: 20px auto 0; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius:10px; padding:10px; width: 600px; max-width: 100%; height: 300px; }
textarea { height: 100%; width: 100%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; font-size: 20px; outline: none; padding: 10px; resize: none; font-family: 'PlaytimeRegular'; }

<?php if($language == "es_ES") { ?>
		h2 { padding: 0; margin: 0;}
<?php } ?>

html[dir="rtl"] h2 {text-align: center;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="scenario">
				<h1><?php echo _("Using what you know... about changing to survive... to solve a problem"); ?></h1>
				<h2><?php echo _("The Scenario"); ?></h2>
				<p><?php echo _("You are a scientist working on a cloning project. Cloning is extracting DNA from an animal or plant, and inserting it into another cell to create an exact copy of the original living thing. You are part of a team, cloning an animal that is used as a protein source for humans. You begin to question the impact of the research you are doing."); ?></p>
				<div>
				</div>
			</div>
			
			<div class="screens" id="problem">
				<h2><?php echo _("The Problem"); ?></h2>
				<p><?php echo _("Using what you now know about artificial selection and the importance of having a variety of animals and plants, list three concerns you have with this project. Your teammates might argue that there are benefits to spreading superior genes. What issues would you bring up when stating your concerns? Type them into the textbox below."); ?></p>
				<article class="col">
					<textarea id="probanswer" name="probanswer" row="20" col="40" placeholder="<?php echo _('Click here to start typing your answer...'); ?>"></textarea>
				</article>
			</div>
			
		</div>
	</div>
	
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#problem" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _('Read More'); ?>"></a>
		<a href="11.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Scientist in the laboratory..."); ?></strong></section></section>
	<script>
		var hash = window.location.hash.slice(1);

		$(document).ready(function() {
			/* screen refresh */
			if(hash != "") {
				//alert(hash)
				$('.screens').hide();
				$('#'+hash).show(function () {
					if(hash = 'problem') { //refresh on screen2
						$('#screen2').fadeIn();
						
						setInterval('swapImages()', 1000);
						setInterval('swapImages2()', 1000);
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
			
			/* screen transition */	
			$('img.back-toggle').click(function(){
				if($('#scenario').is(':visible')) {
					document.location.href= "9.php";
				} else if ($('#problem').is(':visible')) {
					$('img.next-toggle').fadeOut(function() { $('img.readmore-toggle').fadeIn(); });
					$('#problem').fadeOut(function(){
						$('#scenario').fadeIn();
					});
				}
			});
			
			$('img.readmore-toggle').click(function(){
				$('img.readmore-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
				$('#scenario').fadeOut( function(){
					$('#problem').fadeIn();
					window.location.hash = '#problem';
				});
			});
			
			$('img.next-toggle').click( function(e) {
				if ($('#probanswer').val().length < 1)  {
					e.preventDefault();
					alert('<?php echo _("Please type your answer."); ?>');
				} else {
					save();
					$('img.next-toggle').parent().attr('href','11.php');
				}
			});

			var answered = <?php echo $answered; ?>

			function save() {
				var answer = $('#probanswer').val();
				
				if (answered == 0) {
					saveMeta('changing-to-survive', answer);
					answered = 1;
				}
			}

		});
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
