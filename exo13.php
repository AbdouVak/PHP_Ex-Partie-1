<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?PHP
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nb_notes = count($notes);
$imp_notes = implode(" ",$notes);

$moyenne = round(array_sum($notes)/$nb_notes,2);
echo "Les notes obtenues par l’élève sont : $imp_notes <br>";
echo "Sa moyenne générale est donc de : $moyenne ";

?>