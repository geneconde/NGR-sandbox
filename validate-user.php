<?php
	include_once('libraries/UserFactory.class.php');
	$uf = new UserFactory();

	if(isset($_POST['userid'])) {
		$user = $uf->loadUser($_POST['userid']);
		if($user) echo 0;
		else echo 1;
	} else echo 0;
?>