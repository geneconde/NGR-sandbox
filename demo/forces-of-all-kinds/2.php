<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Forces of all Kinds"); ?></title>

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
		h1 { color: #34003D; }

		body{font: }
		.wrap { border-color: #c9ffa7; }
		.bg { background-image:  url(assets/2/bg.jpg); }
		
		#animation { width: 100%; height: 450px; position: absolute; bottom: -400px; left: -10px; }
		#animation p { position: absolute; }
		#skateGirl { width: 300px; height: 250px; left: 66px; top: 180px; background: url(assets/2/skateGirl2.png) no-repeat; z-index: 2; }

    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		#animation {
		    margin-bottom: 1%;
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					
				
					<h1 class="grid_12"><?php echo _("Thinking about... forces"); ?></h1>
					<p class="grid_12"><?php echo _("If you take a look around you, chances are you can find many examples of objects interacting with each other. All of these interactions can be classified into just a few different types of forces. Most of the interactions you can see are based on either electric or gravitational forces. A few of the interactions might be based on magnetic force. Most objects are experiencing one or more of these different types of forces at the same time. The way these forces combine together will influence the motion of the object."); ?></p>

			<div id="animation">

				<p id="skateGirl"></p>

			</div>
					
			
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
