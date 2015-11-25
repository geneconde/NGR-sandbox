<?php
/**
 * User object
 * Created by: Raina Gamboa
 */
class User {
	private $userid				= null;
	private $username 			= null;
	private $password 			= null;
	private $firstname 			= null;
	private $lastname 			= null;
	private $gender 			= null;
	private $type 				= null;
	private $teacher			= null;

	public function __construct() {}
	
	public function getUserid() 						{ return $this->userid;			}	
	public function getUsername() 						{ return $this->username;		}	
	public function getPassword() 						{ return $this->password;		}
	public function getFirstname() 						{ return $this->firstname;		}
	public function getLastname() 						{ return $this->lastname;		}
	public function getGender()							{ return $this->gender;			}
	public function getType()							{ return $this->type;			}
	public function getTeacher()						{ return $this->teacher;		}
	
	public function setUserid($userid) 					{ $this->userid 			= $userid;				}
	public function setUsername($username) 				{ $this->username 			= $username;			}
	public function setPassword($password) 				{ $this->password 			= $password;			}
	public function setFirstname($firstname) 			{ $this->firstname 			= $firstname;			}
	public function setLastname($lastname) 				{ $this->lastname 			= $lastname;			}
	public function setGender($gender) 					{ $this->gender 			= $gender;				}
	public function setType($type) 						{ $this->type 				= $type;				}
	public function setTeacher($teacher) 				{ $this->teacher 			= $teacher;				}
}
?>