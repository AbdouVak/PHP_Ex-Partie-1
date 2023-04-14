<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?PHP

$date_naissance = new DateTime('1985-01-17');
$now = new DateTime('now');

$difference = $date_naissance->diff($now);

$years_difference = $difference->format('%y');
$month_difference = $difference->format('%m');
$days_difference = $difference->format('%d');

echo "Age de la personne : $years_difference ans $month_difference mois $days_difference jour";
?>