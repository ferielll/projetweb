<?PHP
include "../entities/commandes.php";
include "../core/commandesC.php";

if (isset($_POST['idP']) and isset($_POST['type']) and isset($_POST['sexe']) and isset($_POST['prix']) and isset($_POST['qte']))
{
$commande1=new Commande($_POST['idP'],$_POST['type'],$_POST['sexe'],$_POST['prix'],$_POST['qte']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commande1C=new CommandeC();
$commande1C->ajouterCommandes($commande1);
header('Location: afficherpanier.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

