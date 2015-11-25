<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/cycle.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #d25b00; clear: both; }
.wrap { border-left: 1px dashed #d2e7d8; border-right: 1px dashed #d2e7d8; }
.bg { background: url('images/8/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

#screen1 { overflow: hidden; }
#screen1 img { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
#screen1 p { float: left; width: 500px; }
#images { float: right; }
#images img { border-radius: 10px;width:330px;height:220px; }
#images .cycle { margin-top: 10px; }
#screen2 { display: none; text-align: center; }
#screen2 p { text-align: left; padding-top: 10px; }
#screen2 img { text-align: center; margin-top: 20px; }
#buttons .next { display: none; } 

html[dir="rtl"] #screen2 p { text-align: right; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 p { width: 375px; }
}	
	@media only screen and (max-width: 1250px){
		div#screen1 { padding-top: 33px; }
		div#screen2 { padding-top: 33px; }

	}
	@media only screen and (max-width: 960px){
		#screen1 p {
		    float: left;
		    width: 50%;
		    font-size: 22px;
		    line-height: 23px;
		}	
		#screen2 p {
		    line-height: 25px;
		}
	}
	<?php if($language == "es_ES") { ?>
		h1 { font-size: 33px; }
		p { font-size: 21px; }
		@media only screen and (max-width: 960px){
			#screen1 p {
			    float: left;
			    width: 50%;
			    font-size: 21px;
			    line-height: 20px;
			}	
		}
	<?php } ?>

	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about ecosystems interactions"); ?></h1>
				<p><?php echo _("How do animals adapt to live in different ecosystems? Some animals adapt to different habitats, and some animals do well just the way they are. It depends on the species and on the ecosystem. An adaptation is a change in the body structure, processes or behavior of a specie that has evolved over a period of generations. All surviving species have adapted to different climates and conditions over the years. For example, animals that live in cold climates have thick fur, and animals that live in warm climates have bodies that help them stay cool. Animals also adapt in different ways to help them find food in their habitat. For example, a snake that lives in the desert that eats small animals would probably have a hard time staying warm and finding food in an arctic environment."); ?></p>

				<div id="images">
					<div class="cycle">
						<img src="images/8/1.jpg">
						<img src="images/8/2.jpg">
						<img src="images/8/3.jpg">
					</div>

					<div class="cycle">
						<img src="images/8/4.jpg">
						<img src="images/8/5.jpg">
						<img src="images/8/6.jpg">
					</div>
				</div>
			</div>

			<div id="screen2" class="screens">
				<p><?php echo _("Parrots were brought to the Hawaiian Islands as pets and were either released or escaped. Hawaii turns out to be excellent habitat for parrots and they have reproduced in the wild. Unfortunately, many native Hawaiian birds have difficulty competing with parrots for food and are nearing extinction. Plants or animals living in wild spaces outside their native ranges, such as these parrots now found in Hawaii, are known as <span class=\"key\">invasive species</span>. Invasive species create problems for native species either by preying upon the natives for food, or by out-competing them for food and other resources."); ?></p>
				<img src="images/8/parrots.jpg">
			</div>
			<div id="screen3" class="screens">
			
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Adapting to environment..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/jquery.bookblock.js"></script>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here
	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				$('h1').fadeOut();
				if(screen < screenCount) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); }); // if last screen, removes read more and shows next
				}
			});
		}
		
		/* Back Transition - change to the corresponding number of screens */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if($('#screen2').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
				$('#screen2').fadeOut(function (){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			}
		});

		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('h1').fadeOut();
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		});
	});
	</script>

	<script>$('.cycle').cycle({fx:'fade'});</script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
