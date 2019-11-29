<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['num']) and isset($_POST['categorie']) and isset($_POST['type']) and isset($_POST['sexe']))
{
$commande1=new Commande($_POST['num'],$_POST['categorie'],$_POST['type'],$_POST['sexe']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commande1C=new CommandeC();
$commande1C->ajouterCommande($commande1);
header('Location: affichercommande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

