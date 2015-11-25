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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
var answered = 1;
var answer = null;
$(document).ready(function() {
	
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	// $('img.check-toggle').hover(function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>.png'; });
	// $('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	// $('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	
	$('img.back-toggle').click(function(){
		if( $('#question').is(':visible') ) {
			document.location.href= "18.php";
		} else {
			$('#decomposer').fadeOut(function(){ $('#question').fadeIn();   $('h1 span').fadeOut();  });
			$('img.next-toggle').fadeOut(function(){  $('img.check-toggle').fadeIn(); });
		}
	});
	

	/* screen transition */	
	$('img.check-toggle').click(function(){
	
		var atLeastOneIsChecked = $('input[name="answer[]"]:checked').length > 0;
		
		if( atLeastOneIsChecked == false ){
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			
			$('#question').fadeOut(function(){  
				$('#decomposer').fadeIn();   
				$('h1 span').fadeIn();  
				$('img.back-toggle').fadeIn(); 
			});
			$('img.check-toggle').fadeOut(function(){  
				$('img.next-toggle').fadeIn(); });
			
			if (answered == 0) { 
				saveAnswer('food-chains-qq6-a', answer);
			}
			answered = 1;
		}
	});

	$("input[type=checkbox]").click(function(){
		$('input:checkbox').removeAttr('checked');
		$(this).attr("checked","checked");
		if ($(this).attr("value") == 'a') {
			$('.h2cr').html('<?php echo _("Nope!"); ?>'); 
			$('.h3cr').html('<?php echo _("Decomposers only eat dead plants and animals."); ?>'); 
			$('.h2then').fadeOut();
			answer = 'A';
		} else if ($(this).attr("value") == 'b') {
			$('.h2cr').html('<?php echo _("Nope!"); ?>'); 
			$('.h3cr').html("<?php echo _("Decomposers don't hunt or eat other living things."); ?>"); 
			$('.h2then').fadeOut(); 
			answer = 'B';
		} else if ($(this).attr("value") == 'c') {
			$('.h2cr').html('<?php echo _("Nope!"); ?>'); 
			$('.h3cr').html('<?php echo _("Only plants can make energy from the sun."); ?>'); 
			$('.h2then').fadeOut();
			answer = 'C';
		} else if ($(this).attr("value") == 'd') {
			$('.h2cr').html('<?php echo _("If you answered..."); ?>'); 
			$('.h3cr').html('<?php echo _("D. to feed on dead material"); ?>'); 
			$('h2.h2then').fadeIn();
			answer = 'D';
		}
	});
});
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #C9A64D; border-right: 1px dashed #C9A64D; padding: 0 2px; }
.bg { background-color:#F8F4E1;  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: palevioletred; }
h2,h3 { margin:0; padding: 0 10px; font-weight:normal; font-size:23px;}
h3 { font-size: 40px;}

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle{  display:none; }

.brown { color: brown; }
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.switch {
  float: left;
  margin-right: 20px;
  position: relative;
}

html[dir="rtl"] .switch {
  float: right;
  margin-right: 10px;
  margin-left: 20px;
}

.switch label {
  width: 100%;
  height: 100%;
  position: relative;
  display: block;
}

.switch input {
  top: 0; 
  right: 0; 
  bottom: 0; 
  left: 0;
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  -moz-opacity: 0;
  opacity: 0;
  z-index: 100;
  position: absolute;
  width: 100%;
  height: 100%;
  cursor: pointer;
}

.switch.demo1 { width: 80px; height: 80px; }

.switch.demo1 label {
  border-radius: 50%;
  background: #eaeaea;
  box-shadow: 
      0 3px 5px rgba(0,0,0,0.25),
      inset 0 1px 0 rgba(255,255,255,0.3),
      inset 0 -5px 5px rgba(100,100,100,0.1),
      inset 0 5px 5px rgba(255,255,255,0.3);
}

.switch.demo1 label:after {
  content: "";
  position: absolute;
  top: -8%; right: -8%; bottom: -8%; left: -8%;
  z-index: -1;
  border-radius: inherit;
  background: #ddd;
  background: -moz-linear-gradient(#ccc, #fff);
  background: -ms-linear-gradient(#ccc, #fff);
  background: -o-linear-gradient(#ccc, #fff);
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#ccc), to(#fff));
  background: -webkit-linear-gradient(#ccc, #fff);
  background: linear-gradient(#ccc, #fff);
  box-shadow: 
    inset 0 2px 1px rgba(0,0,0,0.15),
    0 2px 5px rgba(200,200,200,0.1);
}

.switch.demo1 label:before {
  content: "";
  position: absolute;
  width: 40%;
  height: 40%;
  border-radius: inherit;
  left: 31%;
  top: 28%;
  background: #969696;
  background: radial-gradient(40% 35%, #ccc, #969696 60%);
  box-shadow:
      inset 0 2px 4px 1px rgba(0,0,0,0.3),
      0 1px 0 rgba(255,255,255,1),
      inset 0 1px 0 white;
}

.switch.demo1 input:checked ~ label {
  background: #dedede;
  background: -moz-linear-gradient(#dedede, #fdfdfd);
  background: -ms-linear-gradient(#dedede, #fdfdfd);
  background: -o-linear-gradient(#dedede, #fdfdfd);
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#dedede), to(#fdfdfd));
  background: -webkit-linear-gradient(#dedede, #fdfdfd);
  background: linear-gradient(#dedede, #fdfdfd);
}

.switch.demo1 input:checked ~ label:before {
  background: #25d025;
  background: radial-gradient(40% 35%, #5aef5a, #25d025 60%);
  box-shadow:
      inset 0 3px 5px 1px rgba(0,0,0,0.1),
      0 1px 0 rgba(255,255,255,0.4),
      0 0 10px 2px rgba(0, 210, 0, 0.5);
}

.switch.demo1 input:checked ~ label.wrong:before {
  background: #CF0909;
  background: radial-gradient(40% 35%, #D4787F, #CF0909 60%);
  box-shadow:
      inset 0 3px 5px 1px rgba(0,0,0,0.1),
      0 1px 0 rgba(255,255,255,0.4),
      0 0 10px 2px rgba(207, 9, 9, 0.5);
}


#decomposer { text-align:center;}
#decomposer p{ font-size: 28px; margin: 20px 0; width: 100%;}


.decomposer-images ul { width: 100%; margin:0;padding:0;}
.decomposer-images ul li { float:left; display:inline; list-style-type: none; width:22%; margin: 1.5%;}
.decomposer-images ul li img { max-width:100%; height:auto; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}


.orange { color: orange; }
.brown { color: brown; }
.violet { color: #4222BA;}
.darkgreen { color: #3B770E;}
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }
	h3 { font-size: 25px;}
	.switch.demo1 { width: 40px; height: 40px; }
}

@media screen and (max-width:480px) {
	h1 { font-size: 20px; }		
	.buttons { text-align: center;}
	
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
	h3 { font-size: 20px;}
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
	
}

@media screen and (orientation:portrait) {
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("Quiz Question #6"); ?> <span class="hidden">- <?php echo _("How did I do?"); ?></span></h1>
			<div id="question">
				<h2><?php echo _("Which role does a decomposer play in a food chain?"); ?></h2>
				<br/>
				<h3><div class="switch demo1"><input name="answer[]" type="checkbox" value="a"><label></label></div> <span class="orange bold"><?php echo _("A"); ?></span>. <?php echo _("to consume living plants"); ?></h3>
				<br/><br/><br/><div class="clear"></div>
				<h3><div class="switch demo1"><input name="answer[]" type="checkbox" value="b"><label></label></div> <span class="brown bold"><?php echo _("B"); ?></span>. <?php echo _("to hunt herbivores"); ?></h3>
				<br/><br/><br/><div class="clear"></div>
				<h3><div class="switch demo1"><input name="answer[]" type="checkbox" value="c"><label></label></div> <span class="violet bold"><?php echo _("C"); ?></span>. <?php echo _("to make its own food from the sun"); ?></h3>
				<br/><br/><br/><div class="clear"></div>
				<h3><div class="switch demo1"><input name="answer[]" type="checkbox" value="d"><label></label></div> <span class="darkgreen bold"><?php echo _("D"); ?></span>. <?php echo _("to feed on dead material"); ?></h3>
				<div class="clear"></div>
			</div>
			<div id="decomposer" class="hidden">
				<div class="decomposer-images">
					<ul>
						<li><img class="float fly" src="images/19/mushroom.jpg" alt=""/><br/><span class="purple bold"><?php echo _("mushroom"); ?></span></li>
						<li><img class="float fly2" src="images/19/slug.jpg" alt=""/><br/><span class="red bold"><?php echo _("slug"); ?></span></li>
						<li><img class="float slug" src="images/19/earthworm.jpg" alt=""/><br/><span class="orange bold"><?php echo _("earthworm"); ?></span></li>
						<li><img class="float worm" src="images/19/bacteria.jpg" alt=""/><br/><span class="green bold"><?php echo _("bacteria"); ?></span></li>
					</ul>
				</div>
				<div class="clear"></div>
				<h2 class="h2cr"><?php echo _("If you answered..."); ?></h2>
				<br/>
				<h3 class="h3cr" class="darkgreen bold"><?php echo _("D. to feed on dead material"); ?></h3>
				<br/>
				<h2 class="h2then"><?php echo _("Then you are correct!"); ?></h2>
				<br/>
				<h2 class="h2then" class="brown"><?php echo _("Decomposers are consumers because they feed off the living things that die."); ?></h2>
			</div>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons">
				<a href="20.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
				<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/checkanswer.png" title="<?php echo _("Check answer"); ?>"></a>
			</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Almost over, almost over"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>