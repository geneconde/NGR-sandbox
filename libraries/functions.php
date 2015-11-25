<?php
include_once 'libraries/DtQuestionFactory.class.php';
include_once 'libraries/DiagnosticTestFactory.class.php';
include_once 'libraries/StudentDtFactory.class.php';
include_once 'libraries/TeacherModuleFactory.class.php';

function getQuestionIDs($moduleid, $userid, $mode) {
	$dtf 		= new DiagnosticTestFactory();
	$dt_set 	= $dtf->getDiagnosticTest($moduleid, $userid, $mode);
	$questions 	= explode(',',$dt_set->getQid());
	return $questions;
}

function getTestID($moduleid, $userid, $mode) {
	$dtf 		= new DiagnosticTestFactory();
	$test_set 	= $dtf->getDiagnosticTest($moduleid, $userid, $mode);
	$test_id 	= $test_set->getDTID();
	return $test_id;
}

function getStudentAnswers($sdtid) {
	$sdt			= new StudentDtFactory();
	$answer_set 	= $sdt->getStudentAnswer($sdtid);
	$answers		= [];
	
	foreach($answer_set as $row) {
		array_push($answers, $row['answer']);
	}
	return $answers;
}

function addDate($startdate, $timelimit) {
	$cd = strtotime($startdate);
	$newdate = date('Y-m-d h:i:s', mktime(date('h',$cd)  + (int)$timelimit[0], 
										  date('i',$cd)  + (int)$timelimit[1], 
										  date('s',$cd)  + (int)$timelimit[2], 
										  date('m',$cd), 
										  date('d',$cd),
										  date('Y',$cd)));
	return $newdate;
}

function utf8_urldecode($str) {
	$str = preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode($str));
	return html_entity_decode($str,null,'UTF-8');;
}

function showPreTest($moduleid) {
	echo	"<br><br>
			<p>"._("A pre diagnostic test is available for this review. You have to take this test first before you start with the review.")."</p>
				</div>
				<a class=\"take-box fright m-top30\" href=\"take-dt.php?mode=pre&module_id={$moduleid}\">
				<p class=\"dbl\">"._("Take Pre")."</p>
				<p class=\"dbl\">"._("Diagnostic")."</p>
				<p class=\"dbl\">"._("Test")."</p>
			</a>";
}

function showReview($moduleid) {
	echo 	"<br><br>
			<p>"._("You have not taken this review yet. Click the button at the right to take this module.")."</p>
			</div>
			<a class=\"take-box fright m-top30\" href=\"take-test.php?m={$moduleid}\">"._("START")."<br/>"._("REVIEW")."</a>";
}

function checkModule($userid, $moduleid, $studentmodules, $studenttests, $tests) {
	$lastscreen = null;
	$continueid = null;
	if($studentmodules) {
		foreach($studentmodules as $sm){
			if($sm['module_ID'] == $moduleid) {
				if($sm['date_finished'] == "0000-00-00 00:00:00" || $sm['date_finished'] == null) {
					if($sm['last_screen'] != 0) {
						$lastscreen = $sm['last_screen'];
						$continueid = $sm['student_module_ID'];
					}
				}  else {
					checkPostTest($moduleid, $tests, $studenttests, $userid, $sm['student_module_ID']);
					return false;
				}
			}
		}
	}

	if($lastscreen != null && $lastscreen != 0) {
		echo	"<br><br>
				<p>"._("You have started this review but did not finish it. Click the button to continue where you left off.")."</p>
				</div>
				<a  class=\"take-box  dbl2 fright m-top30\" 
					href=\"take-dt-test.php?m={$moduleid}&smid={$continueid}&s={$lastscreen}\">
					<p class=\"dbl\">"._("Go To")."</p>
					<p class=\"dbl\">"._("Page")."</p>
					<p class=\"dbl\">{$lastscreen}</p>
				</a>";
	} else {
		showReview($moduleid);
	}
}

function checkPostTest($moduleid, $tests, $student_tests, $userid, $smid) {
	$ctr = 0;
	
	if($tests) {
		foreach($tests as $test) {
			if($moduleid == $test['module_id']) {
				if($test['mode'] == 2 && $test['isactive'] == 1) {
					if($student_tests) {
						$found = false;
						$finished = true;
						
						foreach($student_tests as $stest) {
							if($stest['dt_id'] == $test['dt_id']) {
								$found = true;
								if($stest['date_ended'] == "0000-00-00 00:00:00" || $stest['date_ended'] == "null") {
									$finished = false;
								}
							}
						}
							
						if($found && $finished) {
							echo	"<a class=\"button1\" href=\"results.php?smid={$smid}\">"._("Review Results")."</a>
									<a class=\"button1\" href=\"dt-results.php?module_id={$moduleid}&mode=post&user_id={$userid}\">"._("Post-Test")."</a>
									
									<br><br>
									<p>"._("You are done with this review.")."</p>
									</div>
									<a class=\"take-box fright m-top30\" href=\"take-test.php?m={$moduleid}\">"._("CHECK")."<br/>"._("REVIEW")."</a>";
						} else if($found && !$finished) {
							echo	"<a class=\"button1\" href=\"results.php?smid={$smid}\">"._("Review Results")."</a>
									<a class=\"button1\" href=\"take-test.php?m={$moduleid}\">"._("Review")."</a>
									<br><br>
									<p>"._("You have started the post diagnostic test but did not finish it. You must finish the test first.")."</p>
									</div>
									<a class=\"take-box fright m-top30\" href=\"take-dt.php?mode=post&module_id={$moduleid}\">
										<p class=\"dbl\">"._("Continue")."</p>
										<p class=\"dbl\">"._("Diagnostic")."</p>
										<p class=\"dbl\">"._("Test")."</p>
									</a>";
						
						} else {
							echo	"<a class=\"button1\" href=\"results.php?smid={$smid}\">"._("Review Results")."</a>
									<a class=\"button1\" href=\"take-test.php?m={$moduleid}\">"._("Review")."</a>
									<br><br>
									<p>"._("A post diagnostic diagnostic test is available for this review. You have to take this test since you are finished with the review.")."</p>
									</div>
									<a class=\"take-box fright m-top30\" href=\"take-dt.php?mode=post&module_id={$moduleid}\">
										<p class=\"dbl\">"._("Take Post")."</p>
										<p class=\"dbl\">"._("Diagnostic")."</p>
										<p class=\"dbl\">"._("Test")."</p>
									</a>";
						}
					}
				} else {
					$ctr++;
				}
			} else {
				$ctr++;
			}
				
			if($ctr >= count($tests)) {
				echo	"<a class=\"button1\" href=\"results.php?smid={$smid}\">"._("Review")."</a>
						<br><br><p>"._("You are done with this review.")."</p>
						</div>
						<a class=\"take-box fright m-top30\" href=\"take-test.php?m={$moduleid}\">"._("CHECK")."<br/>"._("REVIEW")."</a>";
				break;
			}
		}
	} else {
		echo	"<a class=\"button1\" href=\"results.php?smid={$smid}\">"._("Review Results")."</a>
				
				<br><br>
				<p>"._("You are done with this review.")."</p>
				</div>
				<a class=\"take-box fright m-top30\" href=\"take-test.php?m={$moduleid}\">"._("CHECK")."<br/>"._("REVIEW")."</a>";
	}
}
?>