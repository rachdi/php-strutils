<?php  
class StrUtils{
	private $str="";



	public function __construct($newString){
		$this->str=$newString;
	}

	public function bold(){
		$bold= "<strong>$this->str</strong>";
		$this->str= $bold;
	}
	public function italic(){
		$italic="<em>$this->str</em>";
		$this->str= $italic;
	}
	public function  tostring(){
		return $this->str;
	}
	public function uglify(){
		$this->$bold;
		$this->$italic;
	}

	

}

$mastring = new StrUtils("hello");
echo $mastring->tostring() ;  
echo  $mastring->italic();
?>
