<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Life Cycle of Plants");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>
html { background-color: #fff; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #C9A64D; border-right: 1px dashed #C9A64D; padding: 0 2px; }
.bg { background-image: url('images/1/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; overflow:hidden; }

h1 { font-size: 35px; margin-top: 50px; font-weight:bold; color: #ad1b27; width: 100%; text-align: center; }
p{text-align:center; padding-bottom: 10px;}
input[type="text"] { text-align:center;height: 70px; width: 300px;  -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; font-size: 40px; font-family:'PlaytimeRegular';}
.clear { clear:both;}
a { text-decoration:none;}
.hidden { display:none;}

#start { position: absolute; top: 45%; left: 41%; color: #4eb100; font-size: 28px; background: url(images/1/start.png) 20px top no-repeat; width: 155px; height: 73px; display: block; padding-top: 35px; padding-left: 12px; text-align: center; margin: 20px auto; }

@-ms-keyframes wiggle{0%{-ms-transform:rotate(3deg);}50%{-ms-transform:rotate(-3deg);}100%{-ms-transform:rotate(3deg);}}
@-moz-keyframes wiggle{0%{-moz-transform:rotate(3deg);}50%{-moz-transform:rotate(-3deg);}100%{-moz-transform:rotate(3deg);}}
@-webkit-keyframes wiggle{0%{-webkit-transform:rotate(3deg);}50%{-webkit-transform:rotate(-3deg);}100%{-webkit-transform:rotate(3deg);}}
@keyframes wiggle{0%{transform:rotate(3deg);}50%{transform:rotate(-3deg);}100%{transform:rotate(3deg);}}
#start:hover{-ms-animation:wiggle .3s 2;-moz-animation:wiggle .3s 2;-webkit-animation:wiggle .3s 2;animation:wiggle .3s 2;}
.welcome-title {margin:0 auto; width:60%;}
.welcome-title img {max-width:99%;}

html[dir="rtl"] h1 { text-align: right !important; padding-right: 20px; }

<?php if($language == "es_ES") { ?>
	#start { font-size: 20px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("Welcome to the Life Cycle of Plants module, ");?><?php echo $user->getFirstName(); ?>!</h1>
			<a href="2.php" id="start"><?php echo _("Start"); ?></a>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!");?></strong></section></section>	
<?php include("setlocale.php"); ?>
</body>
</html>
