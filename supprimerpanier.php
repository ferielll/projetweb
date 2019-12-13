<?PHP
include "../core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["idP"])){
	$produitC->supprimerpanier($_POST["idP"]);
	header('Location: afficherpanier.php');
}

?>