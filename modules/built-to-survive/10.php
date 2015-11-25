<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(10, $_SESSION['smid']);
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
.bg { background-image: url('images/10/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
p { text-align: left; }
h1 { color: #916235; }
#buttons .next, img.back-toggle-screen { display:none; }
#screen2 { display: none; }
#screen1 p:first-child { padding-top: 0; }
#screen1 .pic { height: 220px; margin: 0 auto; width: 700px; }
#screen1 .pic img { height: 100%; float: left; margin-right: 10px; }
#screen2 .pic { height: 170px; margin: 0 auto; width: 798px; }
#screen2 .pic img { height: 100%; float: left; margin-right: 10px; }
.text-left { width: 75%; float: left; }
.pic-right { width: 23%; height: 275px; float: right; padding-top: 10px; }
.pic-right img { height: 100%; }
<?php if($language == "es_ES") { ?>
		h1 { font-size:32px; }
		p { font-size: 22px; }
	<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .pic { height: auto; width: 100%; }
	#screen2 .pic img { height: auto; width: 230px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about being built to survive"); ?></h1>
				<p><?php echo _("<span class='key'>Humans</span> also adapt. The physical characteristics of populations change as their diverse individual members survive and reproduce at different rates. For example, humans and other mammals have similar internal organs such as a heart for pumping blood, lungs for breathing air, a stomach for digestion, and veins and arteries to move blood flow. They also have similar external members such as arms, legs, and a face with eyes, ears, and a mouth."); ?></p>
				<div class="pic">
					<img src="images/10/warriors.jpg">
					<img src="images/10/inuit.jpg">
				</div>
				<p><?php echo _("People adapt in biological and cultural ways. Over a period of time genetic changes may take place while adapting to a specific environment. Human body form is an example. People in tropical climates became tall and lean to survive in the heat, and arctic and mountain people became short and wide to survive in the cold."); ?></p>
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("Humans also pass on adaptations through their culture. Some social animals may have simple cultural adaptations, but only humans have complex ones. Due to these cultural adaptations, people have adapted to almost all of the different habitats on earth. By imitating, learning, and inventing technology, people survive in areas such as humid tropical forests, harsh deserts, and arctic wastelands."); ?></p>
				<div class="pic">
					<img src="images/10/students.jpg">
					<img src="images/10/digi-eye.jpg">
					<img src="images/10/theater.jpg">
				</div>
				<div class="text-left">
					<p><?php echo _("A specific adaptation that make human beings unique from animals is human brain, which is the largest brain in proportion to body size of all living things. From poetry to technology, there is no comparison in the world to the human intellect. Humans are also unique among all living things in their capacities for language, culture, emotion, relationships, imagination, creativity, expression, purpose, determination, morality, love, and adoration."); ?></p>
				</div>
				<div class="pic-right">
					<img src="images/10/monalisa.jpg">
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Can humans adapt too?"); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		if(hash != "") {
			$('h1').fadeOut();
			$('.screens').hide();
			$('#screen2').fadeIn();
			$('a.readmore-toggle').fadeOut(function(){
				$('a.next-toggle').fadeIn();
			});
		}
		
		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = '9.php';
			} if($('#screen2').is(':visible')) {
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
			$('h1').fadeOut();
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
