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

	<title><?php echo _("How Light Behaves"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #FAFFAB; z-index: 10; }
		p {  z-index: 10; }
		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		
		.content{ color: #ffffff; }
		.wrap { border-color: #807A6A; }
		.bg { background: url(assets/2/bg.jpg); }

		.lamp { background: url(assets/2/lamp.png) no-repeat; width: 178px; position: absolute; height: 488px; top: 155px; right: 30px; }

		.afro { background: url(assets/2/afro.png);
		  background-position: 0 0; width: 225px; position: absolute; height: 336px; top: 280px; right: 300px; 
		  }

		.switch {
		  cursor: pointer;
		  position: absolute;
		  right: 73px;
		  top: 202px;
		  width: 33px;
		  height: 71px;
		  background: url(assets/2/switch.png);
		  background-position: 0 0;
		}
		 
		.light { position: absolute; background: black; width: 100%; height: 100%; opacity:0; margin: 0; transition:
			-webkit-transition: all  1s; /* For Safari 3.1 to 6.0 */
    		transition: all 1s; }
    		
    	.lamp img { position: absolute; right: 100px; top: 190px; width: 50%; 
			-webkit-animation: arrow 1s infinite alternate;
			animation: arrow 1s infinite alternate;
			-moz-animation: arrow 1s infinite alternate;}
			
			
		@-webkit-keyframes arrow {
			0% { right: 110px; }
			100% { right: 100px; }
		}
		@keyframes arrow {
			0% { right: 110px; }
			100% { right: 100px; }
		}
		@-moz-keyframes arrow {
			0% { right: 110px; }
			100% { right: 100px; }
		}
		
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="light"></div>
			
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Thinking about... how light behaves"); ?></h1>
										
					<p class="grid_12 content"><?php echo _("When you walk into your dark bedroom at night, you usually turn on a light. With a light on, you can see everything from your red pillow on the chair to the blue blanket on the bed. But what is light? What happens when that light is turned on? How does that light help you see? This module is all about light and how it behaves."); ?></p>
								
					<div class='afro'></div>
						
					
					<div class="lamp">
						<div class='switch'></div>
						<img src="assets/2/arrow.png" />
					</div>
					
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
	var lamp_switch = "on";
	
		$(".switch").click(function(){
			if(lamp_switch=="on"){
				$(".switch").css('background-position','0 71px');
				$(".afro").css('background-position','0 336px');
				$(".light").css('opacity','0.3');
				lamp_switch = "off";
			} else {
				$(".switch").css('background-position','0 0');
				$(".afro").css('background-position','0 0');
				$(".light").css('opacity','0');
				lamp_switch = "on";
			}
		});
	</script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
