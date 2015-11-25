<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
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

	<title><?php echo _("Human Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #9E61BB; }
		p { font-size: 20px; }

		.wrap { border-color: #ded4f6; }
		.bg { background: url(assets/2/bg.jpg); }

		#animation { position: absolute; bottom: 20px; background: url(assets/2/bg1.png) no-repeat; width: 716px; height: 374px; left: 60px; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Thinking about... human impact"); ?></h1>

					<p class="grid_12"><?php echo _("Everybody loves super heroes who save the world. There's Superman, Wonder Woman, Batman, Robin, Wolverine, and lots of other super heroes everybody reads about in comic books and sees in the movies. Do you want to be a super hero and save the world? YOU CAN!! You can become an Eco-Kid Super Ranger!! What are an Eco-Kid Super Rangers you ask? Well they’re super heroes that disguise themselves as ordinary kids just like you. But they’re not ordinary!! They're really smart kids that know that what everybody does every day is affecting the earth and in some places destroying the environment. But Eco-Kid Super Rangers know what those things are and what we can all do to help lessen the impact of everyday living in modern society on the environment."); ?></p>
				</div>
			</div>

			<div id="animation">
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
