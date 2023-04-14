<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.</p>

<h2>Résultat</h2>

<?PHP
$montant_a_payer = "152";
$montant_a_verse = "200";
$reste_a_payer =  $montant_a_verse - $montant_a_payer ;

$nb_billet_10 = floor($reste_a_payer / 10);

$nb_billet_5 = floor(($reste_a_payer - ($nb_billet_10*10))/5);

$nb_piece_2 = floor(($reste_a_payer - ($nb_billet_5*5) - ($nb_billet_10*10)) / 2);

$nb_piece_1 = ceil(($reste_a_payer - ($nb_billet_5*5) - ($nb_billet_10*10) - ($nb_piece_2*2)) / 2);

echo "Montant à payer : $montant_a_payer €<br>";
echo "Montant à verse : $montant_a_verse €<br>";
echo "Reste à payer : $reste_a_payer €<br>";
echo "**********************************************************<br>";
echo "rendu de monnaie :<br> $nb_billet_10 billets de 10 € - $nb_billet_5 billets de 5 € - $nb_piece_2 pièces de 2 € - $nb_piece_1 pièces de 1 € - "

?>