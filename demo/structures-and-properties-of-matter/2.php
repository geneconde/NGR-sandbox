<?php
	require_once '../tempsession.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #9BBF21; z-index: 10; }
		p {  z-index: 10; }
		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		
		.wrap { border-color: #D4F5EC; }
		.bg { background: url(assets/2/bg.jpg); overflow: hidden; }

		.container_12, .container_12 > .grid_12 { height: 100%; }

		.eyes {
		  width: 80px;
		  position: absolute;
		  margin: 40px 0 0 80px;
		}
		.eyes img {
		  width: 40px;
		  margin: 0;
		  float: left;
		 }
		 .eyes img:first-of-type {
		  margin-top: 10px;
		  width: 30px;
		 }
		 
		.bob { position:absolute; right: 10px; bottom: 40px; height: 203px; width: 250px; }
		.bob > img { position: absolute; width: 250px; }
		#left { height: 95px; width: 85px; margin-top: 35px; }
		#right { width: 98px; height: 137px; margin-left: 165px; margin-top: -20px; }
		
		.splat {
			-webkit-animation: splat 5s steps(8) infinite;
			  background: url(assets/2/splat.png) 0 0 no-repeat; 
			  height: 190px;
			  width: 615px;
			  margin: 455px 0 0 190px;
		}

		@-webkit-keyframes splat {  
		  0% {background-position: 0 0; } 
		  100% {background-position: 0 -1520px; }
		}

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Thinking about... the structure and properties of matter"); ?></h1>
										
					<p class="grid_12"><?php echo _("You know what's really fun? Slime – that's what!! Slime is some cool stuff you can make so you can play tricks on your friends and gross out your family."); ?></p>
					<p class="grid_12"><?php echo _("Slime is easy to make out of easy to find ingredients you can get at the supermarket. There are a bunch of different recipes for how to make slime. Search on Google for \"slime images\" and \"slime on youtube\" and you'll get all kinds of great ideas on how to make slime and play pranks on your friends."); ?></p>
					<p class="grid_12"><?php echo _("The reason why slime is so much fun to play tricks with is because it's stuff with certain properties.  It's runny, icky, gooey and green, and of course, slimy. But it's also safe and easily washable – just the kind of properties that make it fun to \"slime\" your friends without hurting them or ruining their clothes. \"Stuff\" is called matter by scientists. So let's look at more kinds of matter and their properties."); ?></p>
										
					<div class='bob'>
						<img id="left" src="assets/2/left.png" />
						<img id="right" src="assets/2/right.png" />
						<img id="bot" src="assets/2/bottom.png" />
						<img id="mid" src="assets/2/mid.png" />
						<img id="top" src="assets/2/top.png" />
						<div class='eyes'>
							<img src="assets/2/eye.png" />
							<img src="assets/2/eye.png" />
						</div>
					</div>
					
					<div class='splat'></div>
					
				</div>

			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>
	<script>
		$(document).on('mousemove', function(e){
		    $('#blob').css({
		       left:  e.pageX-320,
		       top:   e.pageY-50
		    });
		});
	</script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
