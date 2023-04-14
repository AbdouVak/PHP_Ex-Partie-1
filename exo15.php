<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>

<h2>Résultat</h2>

<?PHP
Class Personne{
    
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;

    public function __construct(string $nom, string $prenom, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom() : string{
        return $this->_nom;
    }
    public function setNom(string $nom){
        $this->_nom =$nom;
    }

    public function getPrenom() : string{
        return $this->_prenom;
    }
    public function setPrenom(string $prenom){
        $this->_prenom =$prenom;
    }

    public function getDateNaisssance() : DateTime{
        return $this->_dateNaissance;
    }
    public function setDateNaisssance(DateTime $dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }

    public function calculerAge(){
        $dateActuel = new DateTime('now');
        $difference = $this->_dateNaissance->diff($dateActuel);
        return $difference->format('%y');
    }

    public function __toString(){
        return "$this->_prenom $this->_nom a ".$this->calculerAge()." ans <br>";
    }

}

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

echo $p1;
echo $p2;

?>