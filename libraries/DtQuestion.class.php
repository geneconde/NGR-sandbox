<?php
/**
 * Module object
 * Created by: Raina Gamboa
 */
class DtQuestion {
	private $qid			= null;
	private $moduleid		= null;
	private $question		= null;
	private $choices 		= null;
	private $answer			= null;
	private $answerorder	= null;
	private $image			= null;

	public function __construct() {}
	
	public function getQid() 							{ return $this->qid;			}	
	public function getModuleid() 						{ return $this->moduleid;		}	
	public function getQuestion() 						{ return $this->question;		}	
	public function getChoices() 						{ return $this->choices;		}
	public function getAnswer() 						{ return $this->answer;			}
	public function getAnswerOrder() 					{ return $this->answerorder;	}
	public function getImage() 							{ return $this->image;	}
	
	public function setQid($qid)						{ $this->qid				= $qid;					}
	public function setModuleid($moduleid) 				{ $this->moduleid 			= $moduleid;			}
	public function setQuestion($question)				{ $this->question			= $question;			}
	public function setChoices($choices)				{ $this->choices			= $choices;				}
	public function setAnswer($answer)					{ $this->answer				= $answer;				}
	public function setAnswerOrder($answerorder)		{ $this->answerorder		= $answerorder;			}
	public function setImage($image)					{ $this->image				= $image;				}
}
?>