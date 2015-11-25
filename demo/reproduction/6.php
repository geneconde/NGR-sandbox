<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
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
<script src="scripts/responsiveslides.js"></script>
<style>
.bg { background-image: url('images/6/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #64D0F7; border-right: 1px dashed #64D0F7; }
h1 { color: #67643D; }
img.next-toggle, img.back-toggle-screen { display:none; }
/* p { padding-top: 1%; } */
.rslides ( width:380px; )
.rslides img { width:380px; }
#screen1 div { margin-top: 1%; }
#screen1 div div { float: left; }
#screen1 .placeholder { width: 46%; margin: 0 2%; }
#screen1 .placeholder p { text-align: center; width: 100%; }
#screen1 .rslides { width: 100%; }
#screen1 .rslides li { width: 100%; }
#screen1 .rslides img {  }

#buttons .next { display: none; }
#screen2 { display: none; }
.col1 { float: left; width: 50%; margin-top: 10%; }
.col1 .placeholder { width:95%; }
.col2 { float: right; width: 50%; margin-top: 10%; }
<?php if($language == "es_ES") { ?>
	p { font-size: 22px; }
<?php } ?> 
html[dir="rtl"] h1 { font-size: 34px; }
html[dir="rtl"] #screen1 p { font-size: 21px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("More big ideas... about reproduction"); ?></h1>
				
				<p><?php echo _("Some types of living things are able to reproduce one individual at a time, by dividing or having small parts break off from the parent. This is common in microbes and in many types of plants. This type of reproduction is called <span class=\"key\">asexual</span>, and results in <span class=\"key\">offspring</span> that are exact copies of their parents."); ?></p>
				<p><?php echo _("Other organisms require two parents for reproduction to occur. Each parent contributes equally to each offspring, so that offspring always have characteristics of both parents. This type of reproduction is called <span class=\"key\">sexual reproduction</span>, and involves males (who contribute sperm) and females (who contribute eggs). This type of reproduction often involves complex mating behaviors that help determine which individuals will choose each other as partners. This is common in animals."); ?></p>
				<div>
					<div class="placeholder">
						<ul class="rslides">
						  <li><img src="images/6/ls1.jpg" /></li>
						  <li><img src="images/6/ls2.jpg"></li>
						</ul>
						<p><?php echo _("Sexual Reproduction"); ?></p>
					</div>
					<div class="placeholder">
						<ul class="rslides">
						  <li><img src="images/6/rs1.jpg" /></li>
						  <li><img src="images/6/rs2.jpg"></li>
						</ul>
						<p><?php echo _("Asexual Reproduction"); ?></p>
					</div>
				</div>
			</div>
			
			<div class="screens" id="screen2">
				<div class="col1">
					<div class="placeholder">
						<ul class="rslides">
						  <li><img src="images/6/s3a.jpg" /></li>
						  <li><img src="images/6/s3b.jpg"></li>
						</ul>
					</div>
				</div>
				<div class="col2">
					<p><?php echo _("Depending on the type of reproductions, similarities between parents and offspring may differ. Asexual reproduction results in offspring exactly like the parent; and sexual reproduction leads to offspring who resemble their parents, but are not copies. Each generation produces unique combinations of characteristics that enable the species to be capable of surviving any number of problems which may occur in nature. Much of the beauty of nature is related to the amazing variety of plant and animal reproductive anatomy and behavior."); ?></p>
				</div>
			</div>
			
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Enumerating hereditary characteristics..."); ?></strong></section></section>
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
					$('a.readmore-toggle').fadeOut( function(){
						$('a.next-toggle').fadeIn();
					});
				} else {
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.readmore-toggle').fadeIn();});
				}
			});
		}

		$('a.readmore-toggle').click(function(){
			$('#screen1').fadeOut(function(){
				$('#screen2').fadeIn();
				$('a.readmore-toggle').fadeOut( function(){
					$('a.next-toggle').fadeIn();
				});
				
			});
		});

		$('a.back-toggle').click(function(){
			if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.readmore-toggle').fadeIn();});
				});
			}else{
				$('a.back-toggle').attr('href','5.php');
			}
		});
		//slides
		$(".rslides").responsiveSlides();
	});
	
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
