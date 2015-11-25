<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
html { overflow: hidden; }
.bg { background-image: url('images/6/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
h1 { color: #E08F36; }
p { color: white; text-align: left; }
#buttons .next, img.back-toggle-screen { display:none; }
#screen2 { display: none; }
#images { height: 300px; margin: 0 auto; width: 565px; }
#images > div:last-child { float: right }
#images .pic { height: 100%; float: left; }
#images .pic:first-child { margin-right: 50px; min-width: 255px; }
#images .pic img { height: 100%; min-width:255px; width: 255px; border: 1px solid rgba(255, 255, 255, 0); }
#screen2 .pic { height: 160px; margin: 0 auto; }
#screen2 .pic img { height: 100%; float: left; }
#screen2 .pic img:not(:last-child) { margin-right: 15px; }
#fpic2, #fpic3, #spic2, #spic3 { display: none; }
<?php if($language == "es_ES") { ?>
		h1 { font-size:32px; }
		#screen1 p { font-size:22px; }
	<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .pic { height: auto; margin: 0; }
	#screen2 .pic img { width: 165px; height: auto; }
	#screen2 p:last-child { clear: both; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about being built to survive"); ?></h1>
				<p><?php echo _("<span class='key'>Birds</span> are known for their wings, intricate feathers, and hollow bone structure--all of which enable them to fly. However, not all birds fly. An exception is the ostrich, the largest bird on Earth. Ostriches cannot fly, yet their adapted long legs and sleek build enable them to run quite fast, up to 40 miles per hour."); ?></p>
				<p><?php echo _("A bird's anatomy also includes beaks, thin legs, and small heads and brains for their body size. Birds vary greatly in their <span class='key'>diversity</span> (differences). One spectacular species is the peregrine falcon. The peregrine falcon can reach speeds of up to 200 miles per hour when it dives– the fastest speed capable of any creature on Earth."); ?></p>
				<div id="images">
					<div class="pic">
						<img id="fpic1" src="images/6/ostrich.jpg">
						<img id="fpic2" src="images/6/ostrich2.jpg">
						<img id="fpic3" src="images/6/ostrich3.jpg">
					</div>
					<div class="pic">
						<img id="spic1" src="images/6/falcon.jpg">
						<img id="spic2" src="images/6/falcon2.jpg">
						<img id="spic3" src="images/6/falcon3.jpg">
					</div>
				</div>
				
			</div>
			<div id="screen2" class="screens">
				<br>
				<p><?php echo _("Another category of living things is <span class='key'>insects</span>. One of the most commonly known insect is the <span class='key'>beetle</span>. The beetle kind is known for most of its members having two pairs of wings. The front pair of wings encompasses the back pair in a hard, shell-like structure. This tough exterior protects the beetle's wings and body."); ?></p>
				<br>
				<div class="pic">
					<img src="images/6/beetle.jpg">
					<img src="images/6/beetle2.jpg">
					<img src="images/6/beetle3.jpg">
					<img src="images/6/beetle4.jpg">
				</div>
				<br>
				<p><?php echo _("One of the largest beetles is the rhinoceros beetle, pictured to the right. Growing as large as 6 inches in length, this creature is one of the strongest living things on Earth for its size. It can lift or carry over 100 times its own body weight!"); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Setting up camp..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#screen2').show();
			$('h1').fadeOut();
			$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
		}
		
		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function (){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
					window.location.hash = '';
				});
			}
		});

		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			$('h1').fadeOut();
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				window.location.hash = '#screen2';
			});
		});
		
		setInterval('swapImages1()', 4000);
		setTimeout(function() {
			setInterval('swapImages2()', 4000);
		}, 2000);
	});
	
	function swapImages1(){
	  if($('#fpic1').is(':visible')) {
		$('#fpic1').fadeOut(1000);
		$('#fpic2').delay(1300).fadeIn(1000);
	  } else if ($('#fpic2').is(':visible')) {
		$('#fpic2').fadeOut(1000);
		$('#fpic3').delay(1300).fadeIn(1000);
	  } else {
		$('#fpic3').fadeOut(1000);
		$('#fpic1').delay(1300).fadeIn(1000);
	  }
	  
	}
	
	function swapImages2(){
	  if($('#spic1').is(':visible')) {
		$('#spic1').fadeOut(1000);
		$('#spic2').delay(1300).fadeIn(1000);
	  } else if ($('#spic2').is(':visible')) {
		$('#spic2').fadeOut(1000);
		$('#spic3').delay(1300).fadeIn(1000);
	  } else {
		$('#spic3').fadeOut(1000);
		$('#spic1').delay(1300).fadeIn(1000);
	  }
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
