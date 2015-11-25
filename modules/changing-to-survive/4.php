<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
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
<script src="scripts/responsiveslides.js"></script>
<style>
h1 { color: #b77f4e !important; }
.bg { background-image: url('images/4/bg.png'); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #cf5fd3; border-right: 1px dashed #cf5fd3; }

img.next-toggle, img.back-toggle-screen { display:none; }
#screen1 .col1 { width: 50%; float: left; }
#screen1 .col2 { width: 50%; float: right; margin-top: 4%;}
#screen1 p, #screen2 p, #screen3 p { font-size: 23px; padding-top: 15px; }
#screen2 p { font-size: 22px; }
#screen1 p:last-of-type { float: left; }
#fossil { width: 400px; float: right; }
#fossil div{  display:none;  position:absolute;}
#fossil div.active{  width: 400px;  display:block;  margin:0 auto;}
#fossil div img{  width: 400px;  display:block;  margin:0 auto;}
#fossil div.active span{ text-align: center; font-size: 24px; padding: 5px;bottom: 0;width: 400px;position: absolute; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; background-color: rgba(128, 128, 128, .9); color: #fff; }

#screen3 img { width: 290px; }
#screen3 .placeholder { margin: 20px 0 0 120px; }
#screen3 .placeholder img { margin-right: 20px; }
#screen3 .placeholder img:last-child { margin-right: 0px; }
#screen3 p:last-of-type { text-align: center; color: #FFA100; padding: 1%; }

#screen2 img { display: block; margin: 0 auto; margin: 2% auto 0; }
#screen2, #screen3 { display: none; }

<?php if($language == "zh_CN") { ?>
		#screen1 > p:last-of-type { padding-top: 70px; }
		#screen1 .col2 { margin-top: 2%; }
<?php } ?>
html[dir="rtl"] #screen3 .placeholder {margin: 20px 120px 0 0;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("Reviewing big ideas... about changing to survive"); ?></h1>
				<div class="col1">
					<p><?php echo _("The world as we know it today is changing, and it has been changing for a long time. It's often hard to accept the changes that have occurred in Earth's history. We find fish fossils thousands of miles from any modern ocean, and thousands of feet up on the tops of mountains. We find the remains of tropical animals in areas that endure harsh winters. Observations like these ammonites found in the Himalayas are tough to put together with the world we know each day."); ?></p>
				</div>
				<div class="col2">
					<div id="fossil">
							<div class="active"> <img src="images/4/1.jpg" /><span><?php echo _("Fossil of prehistoric fish"); ?></span></div>
							<div> <img src="images/4/2.jpg" /><span><?php echo _("Fish fossil"); ?></span></div>
							<div> <img src="images/4/3.jpg" /><span><?php echo _("Ammonite"); ?></span></div>
							<div> <img src="images/4/4.jpg" /><span><?php echo _("Fossilized ammonite"); ?></span></div>
					</div>
				</div>
				<p><?php echo _("The key is that Earth is very, very old. A good estimate of the age of the earth is 4.5 billion years. Most of that time, Earth was a planet without life. Only during the past 500 million years has life emerged and evolved into the variety of plants and animals we see today."); ?></p>
			</div>
			
			<div class="screens" id="screen2">
				<p><?php echo _("<span class='key'>Fossils</span> tell us things about how life has changed from the simple organisms that inhabited our planet hundreds of millions of years ago, to the complex array of life we see today. They show us life forms no longer present on Earth. Fossils tell us what animals lived in which parts of the world, and can even give us solid clues about how they moved around as conditions changed. For example, the structures of their backs and hips let us know whether they walked on four legs, two legs, swam, or even flew."); ?></p>
				<img src="images/4/evolve.jpg" />
				<p><?php echo _("In 2004, the fossil remains of a half-fish, half-amphibian were found. This fossil confirmed theories about how land-dwelling four-limbed animals evolved from their fish ancestors. The animal shown in the middle is an example that bridges the gap between two quite different animals."); ?></p>
			</div>
			
			<div class="screens" id="screen3">
				<p><?php echo _("We often think of fossils as only belonging to extinct types of plants and animals. In many cases, modern versions of fossil species still exist. Limestone is a type of rock made when the shells of ocean shellfish fill up with sand and mud after they die. The types of fossils found in limestone found thousands of miles from any ocean are very similar to the corals and shellfish living in oceans today. When we combine evidence from many fossils from various locations, we can even come up with explanations for some of the dramatic events of Earth history."); ?></p>
				<div class="placeholder">
					<img src="images/4/a.jpg" />
					<img src="images/4/b.jpg" />
				</div>
				<p><?php echo _("Fossil ammonites in limestone rock"); ?></p>
			</div>
			
		</div>
	</div>
	
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#screen2" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _('Read More'); ?>"></a>
		<a href="5.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Studying Earth's history..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 3; // Set number of screens for this page
	
	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				if(screen == screenCount) {
					$('img.readmore-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn(); });
				} else if (screen == 2) {
				}
			});
		}

		/* Back Transition - change to the corresponding number of screens */
		$('img.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "3.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function (){
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('img.next-toggle').fadeOut(function() { $('img.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut(function (){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			}
		});

		/* Read More Screen Transition */
		$('img.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				$('#screen1').fadeOut(function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {
				$('img.readmore-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
				$('#screen2').fadeOut(function(){
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});
			}
		});
		
		setInterval('swapImages()', 4000);
	}); // end doc ready 
	
	function swapImages(){
		var active = $('#fossil .active');
		var next = ($('#fossil .active').next().length > 0) ? $('#fossil .active').next() : $('#fossil div:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
