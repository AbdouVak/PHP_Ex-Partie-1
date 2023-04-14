<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?PHP

$argent_en_franc = "100";
$convertisseur_en_euro = "6.56";

$argent_en_euro =  round($argent_en_franc / $convertisseur_en_euro,2);
echo "montant en franc : $argent_en_franc<br>";

echo "$argent_en_franc francs = $argent_en_euro"
?>
