<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?PHP

$prix_article = "9.99";
$quantite = "5";
$Taux_TVA = "0.2";

$cout_hors_tax = $prix_article * $quantite;
$cout_taxe =  $cout_hors_tax + ($cout_hors_tax* $Taux_TVA);

echo "Prix unitaire de l’article : $prix_article €<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $Taux_TVA <br>";
echo "Le montant de la facture à régler est de : $cout_taxe  €<br>";

?>
