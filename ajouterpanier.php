<?PHP
include "../core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["idP"])){
	$produitC->supprimerproduit($_POST["idP"]);
	header('Location: gallery.php');
}

?>