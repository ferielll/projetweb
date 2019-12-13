<?PHP
include "../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["num"])){
	$commandeC->supprimercommande($_POST["num"]);
	header('Location: affichercommande.php');
}

?>