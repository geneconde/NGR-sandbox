<?php
/**
 * Module object
 * Created by: Raina Gamboa
 */
class DiagnosticTest {
	private $dtid				= null;
	private $moduleid			= null;
	private $qid				= null;
	private $userid				= null;
	private $mode				= null;
	private $datecreated		= null;
	private $datemodified 		= null;
	private $isactive			= null;
	private $timelimit			= null;

	public function __construct() {}
	
	public function getDTID() 								{ return $this->dtid;							}
	public function getModuleid() 							{ return $this->moduleid;						}
	public function getQid() 								{ return $this->qid;							}	
	public function getUserid() 							{ return $this->userid;							}	
	public function getMode() 								{ return $this->mode;							}	
	public function getCreatedDate() 						{ return $this->datecreated;					}
	public function getModifiedDate() 						{ return $this->datemodified;					}
	public function getActive() 							{ return $this->isactive;						}
	public function getTimeLimit() 							{ return $this->timelimit;						}
	
	public function setDTID($dtid)							{ $this->dtid				= $dtid;			}
	public function setModuleid($moduleid) 					{ $this->moduleid 			= $moduleid;		}
	public function setQid($qid)							{ $this->qid				= $qid;				}
	public function setUserID($userid)						{ $this->userid				= $userid;			}
	public function setMode($mode)							{ $this->mode				= $mode;			}
	public function setCreatedDate($datecreated)			{ $this->datecreated		= $datecreated;		}
	public function setModifiedDate($datemodified)			{ $this->datemodified		= $datemodified;	}
	public function setActive($isactive)					{ $this->isactive			= $isactive;		}
	public function setTimeLimit($timelimit)				{ $this->timelimit			= $timelimit;		}
}
?>
