<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Human Impact"); ?></title>

	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #8f3d00; }
		
		.wrap { border-color: #C9BD8C; }
		.bg { background-image: url(assets/4/bg.jpg); }
		.rslides { float: right; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing core ideas... about human impact"); ?></h1>
						<p class="grid_12">
							
							<ul class="rslides grid_5">
								<li><img src="assets/4/a.jpg"></li>
								<li><img src="assets/4/b.jpg"></li>
							</ul>
							
							<?php echo _("People in modern society like to live comfortably. We like to eat well; have a car to drive to wherever we need to go; have a comfortable house or apartment that's warm and dry; and have nice clothes to wear that keep us cool in the summer and warm in the winter. And we like electricity that allows us to power our lights and our TV's. But where does all of that stuff come from to keep us comfortable. It comes from the earth's environment – that's where. The food we eat comes from farms and ranches that used to be natural fields and woods. The electricity comes from burning coal or from damming rivers. The gasoline that powers our cars comes from oil wells we drill deep into the earth. And most of our houses are made from wood that comes from cutting trees in the forest. All of these things that make us comfortable come from human activity that impacts the natural environment. The environment is just another name for the earth's systems all working together – the air, water, land, and all the living things. When we change or take something from the environment we have an environmental impact – which means we change something about all or part of the earth's systems. Usually this change is bad. But sometimes the impact human activity has on the environment is not good – for the environment or for us."); ?>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="3.php" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>

    <script type="text/javascript">
		$(".rslides").responsiveSlides({
		    auto: true,
		    pager: false,
		    nav: false, /* Set to true if the next/previous controls are needed */
		    speed: 400
		});

    </script>
    
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
