<?php
/**
 * Update object
 * Created by: Raina Gamboa
 */
class Update {
	private $update_id			= null;
	private $module_id			= null;
	private $description		= null;
	private $update_date		= null;

	public function __construct() {}
	
	public function getUpdateID() 						{ return $this->update_id;		}	
	public function getModuleID() 						{ return $this->module_id;		}	
	public function getDescription() 					{ return $this->description;	}
	public function getUpdateDate() 					{ return $this->update_date;	}
	
	public function setUpdateID($update_id) 			{ $this->update_id 			= $update_id;		}
	public function setModuleID($module_id) 			{ $this->module_id 		= $module_id;			}
	public function setDescription($description) 		{ $this->description 		= $description;		}	
	public function setUpdateDate($update_date) 		{ $this->update_date 		= $update_date;		}	
}
?>