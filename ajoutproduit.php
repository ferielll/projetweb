<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['idP']) and isset($_POST['age']) and isset($_POST['type']) and isset($_POST['sexe']) and isset($_POST['pets']) 
	and isset($_POST['petsrace']) and isset($_POST['prix']) and isset($_POST['image']))
{
$produit1=new Produit($_POST['idP'],$_POST['age'],$_POST['type'],$_POST['sexe'],$_POST['pets'],$_POST['petsrace'],$_POST['prix'],$_POST['image']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
header('Location: affproduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

