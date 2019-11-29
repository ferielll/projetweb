<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['num'])){
	$commandeC=new CommandeC();
    $result=$commandeC->recuperercommande($_GET['num']);
	foreach($result as $row){
		$num=$row['num'];
		$categorie=$row['categorie'];
		$type=$row['type'];
		$sexe=$row['sexe'];
?>
<form method="POST">
<table>
<caption>Modifier commande</caption>
<tr>
<td>Numero</td>
<td><input type="number" name="num" value="<?PHP echo $num ?>"></td>
</tr>
<tr>
<td>Categorie</td>
<td><input type="text" name="categorie" value="<?PHP echo $categorie ?>"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>Sexe</td>
<td><input type="text" name="sexe" value="<?PHP echo $sexe ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="num_ini" value="<?PHP echo $_GET['num'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new Commande($_POST['num'],$_POST['categorie'],$_POST['type'],$_POST['sexe']);
	$commandeC->modifiercommande($commande,$_POST['num']);
	echo $_POST['num'];
	header('Location: commande.php');
}
?>
</body>
</HTMl>

