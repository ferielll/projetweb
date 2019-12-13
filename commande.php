<?PHP
class Commande{
	private $num;
	private $categorie;
	private $type;
	private $sexe;
	function __construct($num,$categorie,$type,$sexe){
		$this->num=$num;
		$this->categorie=$categorie;
		$this->type=$type;
		$this->sexe=$sexe;
	}
	
	function getNum(){
		return $this->num;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getType(){
		return $this->type;
	}
	function getSexe(){
		return $this->sexe;
	}

	function setNum($num){
		$this->num=$num;
	}

	function setCategorie($categorie){
		$this->categorie=$categorie;
	}
	function setType($type){
		$this->type=$type;
	}
	function setSexe($sexe){
		$this->sexe=$sexe;
	}
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>