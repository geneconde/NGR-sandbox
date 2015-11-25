<?php require_once('session.php'); ?>	
<?php $moduleid = $_GET['m'];
	$module = $uf->loadModule($moduleid);
?>
<h1><?php echo $module->getModule_name(); ?></h1>
<p><?php echo $module->getModule_desc(); ?></p>
</br></br>
<?php if (isset($_GET['smid'])) {
		$_SESSION['smid']= $_GET['smid']; 
		$lastscreen = $_GET['s'];
		$redirect = "modules/".$moduleid."/".$lastscreen.".php";
	} else {
		$redirect = "start-module.php?m=".$moduleid;
	}
	
	header("location:".$redirect);
?>