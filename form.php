<?php class Form{
	private $nom;
	private $prenom;
	public function __construct($nom, $prenom){
		$this->nom = $nom;
		$this->prenom = $prenom;
	}
	public function recupere(){
		$information = "Bonjour " .$this->nom.' , '.$this->prenom;
		return $information;
	}
}


$info = new Form($_POST['nom'], $_POST['prenom']);
echo $info->recupere();
