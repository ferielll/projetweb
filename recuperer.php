<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/commandes.php";
include "../core/commandesC.php";
if (isset($_GET['idP'])){
	$commandeC=new CommandeC();
    $result=$commandeC->recuperercommande($_GET['idP']);
	foreach($result as $row){
		$idP=$row['idP'];
		$type=$row['type'];
		$sexe=$row['sexe'];
		$prix=$row['prix'];
?>
 <form method="POST" action="ajoutercommande.php">
<table>
<caption>Modifier commande</caption>
<tr>
<td>ID</td>
<td><input type="number" name="idP" value="<?PHP echo $idP ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>sexe</td>
<td><input type="text" name="sexe" value="<?PHP echo $sexe ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
	<td>quentite</td>
<td><input type="text" name="qte" ></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
<tr>
<td></td>

</tr>
</table>
</form>
<?PHP
}
}
?>
</body>
</HTMl>

