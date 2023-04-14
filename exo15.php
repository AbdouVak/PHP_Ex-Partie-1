<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>

<h2>Résultat</h2>

<?PHP
Class personne{
    
    private $_nom;
    private $_prenom;
    private $_age;

    public function __construct($nom,$prenom,$date_naissance){

        $this->_nom = $nom;
        $this->_prenom = $prenom;

        $date_naissance_DT = new DateTime($date_naissance);
        $date_actuel = new DateTime('now');
        $difference = $date_naissance_DT->diff($date_actuel);
        $this->_age = $difference->format('%y');

    }
    
    public function afficher_age(){
        echo " $this->_prenom $this->_nom a $this->_age ans<br>";
    }

}

$p1 = new personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

echo $p1->afficher_age();
echo $p2->afficher_age();

?>