<?php 
require_once '../../session.php';
$_SESSION['cmodule'] = 'how-animals-behave';
require_once '../../verify.php';
require_once 'locale.php';

if($user->getType() == 2) {
	$uf->updateStudentLastscreen(12, $_SESSION['smid']);
	$problem = $uf->getModuleProblem('how-animals-behave');
	$sa = $uf->getProblemAnswer2($_SESSION['smid'],$problem['meta_ID']);
	$answered = ($sa ? 1 : 0 );
} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo _("How Animals Behave"); ?></title>

	<link rel="stylesheet" type="text/css" href="styles/locale.css" />
	<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
	<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" /><link rel="stylesheet" type="text/css" href="styles/global.css" />

	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/button.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/saveanswer.js"></script>

	<style>	
		html { background-color: #FFFFFF; }
		body { display: none; }
		h1 { font-size: 27px; color: #B95B1B }	h2 { text-align: center; width: 100%; margin: 0px; color: #077079}		p { width: 100%}
		.bg { 
			background: url(images/12/bg.jpg) 0 0 no-repeat;  
			background-size: 100% 100%; 
			width:100%; 
			height:100%; 
			position:relative; 
		}
		.container {
			margin-top: 2%;
		}

		.container img {
			-webkit-border-radius: 12px; /* Android ≤ 1.6, iOS 1-3.2, Safari 3-4 */
			border-radius: 12px; /* Android 2.1+, Chrome, Firefox 4+, IE 9+, iOS 4+, Opera 10.50+, Safari 5+ */
			/* useful if you don't want a bg color from leaking outside the border: */
			background-clip: padding-box; /* Android 2.2+, Chrome, Firefox 4+, IE 9+, iOS 4+, Opera 10.50+, Safari 4+ */
		}

		#buttons .next { display: none; }

		#screen1 p { width: 100%; margin: 0 auto; display: block }
		#screen1 img { width: 60%; margin: 0 auto; display: block }	
		#screen2 p{ width: 100%; margin: 0 auto; display: block }
		#screen2 { display: none; padding-top: 2%}
		textarea {		width: 60%;		margin: 30px auto 0;		padding: 10px;		display: block;		border: 0;		outline: none;		-moz-border-radius: 10px;		-webkit-border-radius: 10px;		border-radius: 10px;		font-family: PlaytimeRegular;		font-size: 20px;		resize: none;
		}	.wrap {	border-left: 1px dashed #B95B1B; border-right: 1px dashed #B95B1B; }	

		html[dir="rtl"] p { text-align: right; }
		<?php if($language == "es_ES") { ?>
			h1, p { font-size:22px; }
			<?php } ?>

			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
				#screen2 { padding-top: 35px; }
			}	

		</style>
	</head>

	<body>

		<div class="wrap">
			<div class="bg">	
				<h1><?php echo _("Using what you know... about how organisms behave... to solve a problem"); ?></h1>
				<div id="screen1">
					<h2><?php echo _("The Scenario"); ?></h2>
					<p><?php echo _("You are working for a family to interview and hire a babysitter for twin boys. As a behavioral psychologist, you understand what a demanding position this is. You decide to test the candidates on many levels, most importantly how they react to different stimuli. Not everyone works well under pressure: decision making, safety issues, being able to entertain the children, are just some issues to consider."); ?></p>				<img src="images/12/twins.jpg" />						
				</div>

				<div id="screen2">
					<h2><?php echo _("Your Task"); ?></h2>
					<p><?php echo _("Using what you now know about how everyone acts and responds in different ways to changes and stimuli, come up with three scenarios about how you would test the interviewees for the babysitting job. Explain what you are testing with each stimulus you suggest in the textbox below."); ?></p>

					<div class="container">
						<textarea placeholder="<?php echo _("Click here to start typing your answer..."); ?>" id="textAnswer"  cols="60" rows="11" ></textarea>
					</div>
				</div>
			</div>
		</div>

		<div id="buttons">
			<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
			<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
			<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		</div>
		<script>
			var answered = <?php echo $answered; ?>;
			var studentAnswer = '';
			var hash = window.location.hash.slice(1);	
			$(document).ready(function() {
				if(hash == 'screen2') {		
					$('#screen1').hide();		
					$('h1').hide();			
					$('#screen2').show(function () {	
						$('a.readmore-toggle').fadeOut(function(){	
							$('a.next-toggle').fadeIn();		
						});		
					});		
				}		
				/* screen transition */	
				$('a.back-toggle').click(function(){	
					if( $('#screen1').is(':visible') ) {	
						$('a.back-toggle').attr('href','11.php');
					} else if( $('#screen2').is(':visible') ) {	
						$('#screen2').fadeOut(function(){ 		
							$('h1').fadeIn();				
							$('#screen1').fadeIn();			
							$('a.next-toggle').fadeOut(function(){	
								$('a.readmore-toggle').fadeIn();			
							});			
						});		
					}	
				});		
				$('a.readmore-toggle').click(function(){	
					$('h1').fadeOut();		
					$('#screen1').fadeOut(function(){	
						$('#screen2').fadeIn();  
						$('a.back-toggle').fadeIn(); 
					});		
					$('a.readmore-toggle').fadeOut();	
					$('a.next-toggle').fadeIn();	
				});			
				$('a.next-toggle').click(function(){
					save();
					if (!$('#textAnswer').val().length) {
						alert('<?php echo _("Please type your answer."); ?>');		
						//$('a.next-toggle').parent().attr('href','12.php#screen2');
					} else {	
						//$('a.next-toggle').parent().attr('href','13.php');	
					}	
				});		
			});

function save(){
	studentAnswer = $('#textAnswer').val();		
	if(answered == 0){
		saveMeta('how-animals-behave', studentAnswer);
		answered = 1;
	}
}
</script>
<section id="preloader">
	<section class="selected">
		<strong><?php echo _("Tiny twins"); ?></strong>
	</section>
</section>

<?php require("setlocale.php"); ?>
</body>
</html>