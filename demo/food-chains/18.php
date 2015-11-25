<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'food-chains';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Food Chains"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
var answered = 1;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	// $('img.check-toggle').hover(function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>.png'; });
	// $('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	// $('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	
	$('img.back-toggle').click(function(){
		if( $('#question').is(':visible') ) {
			document.location.href= "17.php";
		} else {
			$('#answer').fadeOut(function(){ $('#question').fadeIn();   $('h1 span').fadeOut();  });
			$('img.next-toggle').fadeOut(function(){  $('img.check-toggle').fadeIn(); });
		}
		
	});
	
	/* screen transition */	
	$('img.check-toggle').click(function(){
		$('#question').fadeOut(function(){ $('#answer').fadeIn();   $('h1 span').fadeIn();   $('img.play-toggle').fadeIn();  });
		$('img.check-toggle').fadeOut(function(){  $('img.next-toggle').fadeIn(); });
		$('img.back-toggle').fadeIn(); 
		//get answer here//get/set answer here		
		var hexavalue = hexa.getValue();
		var answer = null;
		if (hexavalue == './images/18/a.png') {
			$('.studentanswer').attr("src","images/18/a.png");
			$('.answerimage').attr("src","images/18/a.jpg");
			$('.h2cr').html('<?php echo _("Nope! Plants are not considered prey."); ?>');
			$('.studenttext').html('<?php echo _("a bee getting a nectar from a flower"); ?>');
			answer = 'A';
		}
		if (hexavalue == './images/18/b.png') {
			$('.studentanswer').attr("src","images/18/b.png");
			$('.answerimage').attr("src","images/18/b.jpg");
			$('.h2cr').html('<?php echo _("Nope! Carrots are plants and not considered prey."); ?>');
			$('.studenttext').html('<?php echo _("a rabbit feeding on a carrot"); ?>');
			answer = 'B';
		}
		if (hexavalue == './images/18/c.png') {
			$('.studentanswer').attr("src","images/18/c.png");
			$('.answerimage').attr("src","images/18/answer.jpg");
			$('.h2cr').html('<?php echo _("You are correct!"); ?>');
			$('.studenttext').html('<?php echo _("a lion hunting a zebra"); ?>');
			answer = 'C';
		}
		if (hexavalue == './images/18/d.png') {
			$('.studentanswer').attr("src","images/18/d.png");
			$('.answerimage').attr("src","images/18/d.jpg");
			$('.h2cr').html('<?php echo _("Nope! A mushroom is not considered a predator nor is tree bark considered prey."); ?>');
			$('.studenttext').html('<?php echo _("a mushroom feeding on a tree bark"); ?>');
			answer = 'D';
		}
		if (answered == 0) { saveAnswer('food-chains-qq5-a', answer); answered = 1;}
		
	});
	
	makeHexa();
});

$(window).resize(function(){
    makeHexa();
});

</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #feae9d; border-right: 1px dashed #feae9d; padding: 0 2px; }
.bg { background-color:#FFF0EC;  overflow: hidden; background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: mediumpurple; }
h2 { margin:0; padding: 0 10px; font-weight:normal; font-size:23px;}

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle {  display:none; }

#answer { text-align:center; background: url('images/18/pink.png') no-repeat center top;}
#foodweb { margin: 3%; width: 50%;}
html[dir="rtl"] #foodweb { text-align: right; }
#box { width: 40%; margin-top: 25px; }
#foodweb,#box { float:left; text-align: left; }
#foodweb img { height: 85px; width: auto; margin-left: 2%;}
#hexaflip { margin: 0 auto; }

img {-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; }

.orange { color: orange; }
.brown { color: brown; }
.violet { color: #4222BA;}
.darkgreen { color: #3B770E;}
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	#foodchain p { font-size: 23px;}	
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
	#foodchain p { font-size: 20px;}	
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }
	#foodchain p { font-size: 18px;}
}

@media screen and (max-width:480px) {
	h1 { font-size: 20px; }	
	#chain-items ul { width: 70%; }
	#chain-items ul li { float:none; display: list-item;width:70%; margin: 0 auto;}
	#chain-items ul li img { max-width: 30%; vertical-align:middle;}
	#chain-items ul.horizontal {display:none;}
	#chain-items ul.vertical {display:inline;}
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
}

@media screen and (orientation:portrait) {
	#foodweb,#box { width: 94%} 
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("Quiz Question #5"); ?> <span class="hidden">- <?php echo _("How did I do?"); ?></span></h1>
			<div id="question">
				<h2><?php echo _("Which of the following is an example of a predator-prey relationship?"); ?></h2>
				<div id="foodweb">
					<h2><span class="orange bold">A</span>. <?php echo _("a bee getting a nectar from a flower"); ?></h2>
						<img src="images/18/a.jpg">
					<h2><span class="brown bold">B</span>. <?php echo _("a rabbit feeding on a carrot"); ?> </h2>
						<img src="images/18/b.jpg">
					<h2><span class="violet bold">C</span>. <?php echo _("a lion hunting a zebra"); ?></h2>
						<img src="images/18/c.jpg">
					<h2><span class="darkgreen bold">D</span>. <?php echo _("a mushroom feeding on a tree bark"); ?> </h2>
						<img src="images/18/d.jpg">
					
				</div>
				<div id="box">
					<h2><?php echo _("Rotate or flip the 3D box below either up or down to set your answer."); ?></h2>
					<br/>
					<div id="hexaflip"></div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<div id="answer" class="hidden">
					<h2><?php echo _("You answered..."); ?></h2>
					<br/><img class="studentanswer" src="images/18/c.png"><br/>
					<h2 class="studenttext"><?php echo _("A lion hunting a zebra"); ?></h2><br/>
					<img class="answerimage" src="images/18/answer.jpg"><br/><br/>
					<h2 class="h2cr"><?php echo _("You are correct!"); ?></h2><br/><br/><br/><br/>
			</div>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="19.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
			<div class="buttons" ><a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/checkanswer.png" title="<?php echo _("Check answer"); ?>"></a></div>
	<script src="scripts/hexaflip.js"></script>
    <script>
		var hexa,
            images = [
                './images/18/a.png',
                './images/18/b.png',
                './images/18/c.png',
                './images/18/d.png'
            ];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 200 });
    </script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Last two!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>