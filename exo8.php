<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme :</p>

<h2>Résultat</h2>

<?PHP
$table = "4";

echo "Table de $table  :<br>";
foreach(range(1,9) as $chiffres_table){
    $resulta =  $chiffres_table * $table ;
    echo "$chiffres_table x $table = $resulta <br>";
}

?>