<?PHP
include "../core/commandeC.php";
$commande1C=new commandeC();
$listecommandes=$commande1C->affichercommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Num</td>
<td>Categorie</td>
<td>Type</td>
<td>Sexe</td>
</tr>

<?PHP
foreach($listecommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['num']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['sexe']; ?></td>
	<td><form method="POST" action="supprimercommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['num']; ?>" name="num">
	</form>
	</td>
	<td><a href="modifiercommande.php?num=<?PHP echo $row['num']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

