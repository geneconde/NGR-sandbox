<?php
	include_once 'libraries/UpdateFactory.class.php';

	$upf = new UpdateFactory();

	$values = array(
			'module_id' 	=> $_POST['module'],
			'description'	=> $_POST['description']
		);

	$upf->addUpdate($values);

	header('Location: update-log.php?s=1');
?>