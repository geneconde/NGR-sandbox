<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'how-animals-behave';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
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
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/button.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/blink.js"></script>
<style>	
	 html { background-color: #FFFFFF; }
	 body { display: none; }	
     h1 { font-size: 32px }
	.bg { 
		background: url(images/bg/qbg.jpg) 0 0 no-repeat;  
		background-size: 100% 100%; 
		width:100%; 
		height:100%; 
		position:relative; 
	}
	#buttons .next { display: none; }

	#answer { font-size: 24px; display: none; padding-top: 2% }
	#answer p{ font-size: 24px;  margin: 0 auto; width: 100%}
	#answerimg { margin-left: 7%;  padding-top: 5% }
	#answer img { width: 30%; margin-left: 10%; border-radius: 10px; }
	.choices-container { margin-left: 12%; width: 90%; }	
	.choices-container img { width: 67%; border: solid white; border-radius: 10px; -webkit-transition: all .3s ease; cursor: pointer}	
	.choices-container div{
		float: left;
		font-size: 24px;
		text-align: center;
		width: 300px; height: 200px; margin: 2%
	}

	html[dir="rtl"] .center { text-align: right !important; }
	html[dir="rtl"] #answerimg { margin-right:7%;margin-left:0; }
	html[dir="rtl"] #answer img { margin-right: 10%;margin-left:0; }
	<?php if($language == "es_ES") { ?>
		h1 { font-size:24px; }
		.choices-container div { font-size: 23px; }
	<?php } ?>
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		#answer { padding-top: 40px; }
	}	
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		.choices-container { margin: 0 auto; width: 92%; }
	}	

</style>
</head>
<body>
	<div class="wrap">

		<div class="bg">
			
			<div id="screen1">
			<h1><?php echo _("Checking what you already know… about how organisms behave"); ?></h1>
				<h2><?php echo _("Click on <span class='blink'>all</span> the correct statements below."); ?></h2>
						<div class="choices-container">	
							<div><img src="images/3/1.jpg" class="grayscale" id="img1"> <br>
								<span id="s1"> <?php echo _("All animals have brains."); ?></span>
							</div>
							<div><img src="images/3/2.jpg" class="grayscale" id="img2"> <br>
								<span id="s2"> <?php echo _("All animals are able to respond to their environments."); ?></span>
							</div>
						
							<div><img src="images/3/3.jpg" class="grayscale" id="img3"> <br>
								<span id="s3"><?php echo _("Animals only respond to food and danger."); ?></span>
							</div>
							
							<div><img src="images/3/4.jpg" class="grayscale" id="img4"> <br>
								<span id="s4"><?php echo _("Animals do not have memories like humans do."); ?></span>
							</div>
							
						</div>
			</div>			
			<div id="answer">				
				<p class="center">
					<?php echo _("Some animals have specialized cells, tissues, and organs that control their interactions like the brain does, and others have brains more or less similar to our own.  Animals can sense the world around them, and sometimes even remember and learn.  Some animals have long memories. All animals are able to respond to their environments.  Read on to learn more about how organisms respond to their environment."); ?></p>				
					<div id="answerimg">					
						<img src="images/3/1.jpg">					
						<img src="images/3/2.jpg">					
						<img src="images/3/3.jpg">					
						<img src="images/3/4.jpg">				
					</div>			
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>	
<script>
	var question = $('#screen1'),
		answer = $('#answer'),
		check = $('a.checkanswer'),
		back = $('a.back'),
		next = $('a.next');

		$('.blink').blink({ speed: 500, blinks: 1000 });

		check.on('click', function() {

			check.fadeOut( function () {
				next.fadeIn();
			});
			
			
			back.fadeIn();

			question.fadeOut(function() {
				answer.fadeIn();
			});

			addHash('#answer');
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "2.php";
			} else {
				answer.fadeOut(function(){
					question.fadeIn();
					next.fadeOut( function () {
						check.fadeIn();
					});
					removeHash();
				});
				
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
			});

			addHash('#answer');
		}
</script>
<script>
var img1 = 0;var img2 = 0;var img3 = 0;var img4 = 0;
	$('.blink').blink({ speed: 500, blinks: 1000 });			
	var hash = window.location.hash.slice(1);	
	$(document).ready(function() {	
			$('.grayscale').on('click',function(){		
				  if ($(this).attr('id') == 'img1') {		
					if ( img1 == 0) {			
						$('#img1').css('border-color', ' #AF4009');	
						$('#s1').css('color', ' #AF4009');		
						img1 = 1;
				} else {		
						$('#img1').css('border-color', ' white');	
						$('#s1').css('color', ' black');		
						img1 = 0;		
					}		
				}
				  if ($(this).attr('id') == 'img2') {
					if ( img2 == 0) {		
						$('#img2').css('border-color', ' #AF4009');	
						$('#s2').css('color', ' #AF4009');		
						img2 = 1;			
				} else {		
						$('#img2').css('border-color', ' white');			
						$('#s2').css('color', ' black');		
						img2 = 0;		
					}	
				}
				  if ($(this).attr('id') == 'img3') {	
					if ( img3 == 0) {		
						$('#img3').css('border-color', ' #AF4009');		
						$('#s3').css('color', ' #AF4009');		
						img3 = 1;		
				} else {		
						$('#img3').css('border-color', ' white');		
						$('#s3').css('color', ' black');	
						img3 = 0;		
					}		
				} 
				  if ($(this).attr('id') == 'img4') {	
					if ( img4 == 0) {		
						$('#img4').css('border-color', ' #AF4009');		
						$('#s4').css('color', ' #AF4009');	
						img4 = 1;		
						
				} else {		
						$('#img4').css('border-color', ' white');	
						$('#s4').css('color', ' black');	
						img4 = 0;		
						}		
					}	
				});	
				
			});
			</script>	
			<section id="preloader">		<section class="selected">			<strong><?php echo _("Preparing dog food..."); ?></strong>		</section>	</section>
<?php require("setlocale.php"); ?>
</body>
</html>