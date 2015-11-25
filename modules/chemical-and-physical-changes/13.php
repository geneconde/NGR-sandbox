<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'chemical-and-physical-changes';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #EB6966; font-size: 30px; }

		.wrap { border-color: #F9ECE3; }
		.bg { background-image: url(assets/13/bg.jpg); overflow: hidden; background-size: 100% 100% !important;}

		<?php if ($language == 'es_ES') : ?>
		p { margin: 0; font-size: 20px; line-height: 24px; }
		<?php else : ?>
		p { margin: 0; font-size: 21px; line-height: 24px; }
		<?php endif; ?>

		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			p{ font-size: 19px; }
			h1 {font-size: 28px;}
		}
		@media screen and (max-width: 1000px){
			p{ font-size: 19px;line-height: 20px}
	
			h1{ font-size:  26px;}

		}
		@media screen and (max-width: 750px){
			p{ font-size: 18px; line-height: 18px}
			h1{ font-size:  24px;}

		}
		@media screen and (max-width: 695px){
			p{ font-size: 16px; line-height: 14px}
			h1{ font-size:  22px;}

		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... chemical and physical changes"); ?></h1>

					<p class="grid_12"><?php echo _("All matter – the stuff or substances that everything is made of – has properties that you can see, feel, touch, taste, or hear. These properties might be: how hard the substance is; what color it is; whether it's a solid, liquid or gas; how it tastes; or anything else you can observe with your senses. These are all called <span class='key'>\"properties of matter\"</span>.<br/>"); ?>
					<?php echo _("Sometimes, things you do to matter can change these properties. Like you can heat or cool substances that change them from a solid to a liquid or a gas. This kind of change is called a <span class='key'>change of state</span>. The word \"state\" means: Is it in a solid, liquid, or gaseous, \"state\"? Or you can mix substances together. Mixing water and sugar together changes the properties of both the sugar and the water to make a new substance – a <span class='key'>mixture</span> - called sugar water that is wet and sweet.<br/>"); ?>
					<?php echo _("Both mixtures and changes of state are examples of <span class='key'>physical changes</span> to matter because each of these changes is easily reversible. Heating may change solid water – ice - into liquid water but freezing the liquid water easily reverses the change back to solid water. And adding sugar to water might create sugar water but you can reverse the change and get both the plain water and the sugar back by letting the water evaporate.<br/>"); ?>
					<?php echo _("Another kind of change to matter is called <span class='key'>chemical change</span>. This is a little bit different and more complicated than physical change. In chemical change when two or more different substances are mixed together, and sometimes when you also heat them too, they change into totally different substances with new and different properties. This process is called a <span class='key'>chemical reaction</span>. Usually, after a chemical reaction, the new substances produced cannot easily be changed back to the original substances.<br/>"); ?>
					<?php echo _("Whenever physical changes or chemical changes happen, no matter what they are, there is one thing that is very important. The weight (mass) of the all the original substances (matter) together is the same as the weight (mass) of all substances (matter)  you end up with. No matter is either created or destroyed. This principle is called the <span class='key'>Conservation of Matter</span> and is one of the most important ideas in all of science.<br/>"); ?></p>
				
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
