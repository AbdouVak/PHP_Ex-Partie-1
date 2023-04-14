<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<h2>Résultat</h2>

<?PHP

$phrase = strtolower("Engage le jeu que je le gagne");
$phrase_replace =str_replace(' ', '', $phrase);
$phrase_inverse =strrev($phrase_replace);


if($phrase_replace == $phrase_inverse){
    echo "La phrase « Engage le jeu que je le gagne » est un palindrome";
}


?>
