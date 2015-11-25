<?php
	
	include_once "libraries/TeacherModuleFactory.class.php";
	
	$tmf = new TeacherModuleFactory();
	//$modules = ["food-chain","natural-hazards","life-cycle-of-plants","heating-and-cooling","how-animals-behave"];
	$modules = ["food-chain","natural-hazards"];
	
	for($i = 2565; $i < 5114; $i += 51) {
		foreach($modules as $module) {
			$tmf->addTeacherModule($i, $module);
		}
	}
	
?>