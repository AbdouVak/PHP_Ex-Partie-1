<h1>Exercice 12</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?PHP

$lang_salutation =[
    "FRA" => "Salut",
    "ENG" => "Hello",
    "ESP" => "Hola"   
];

$prenom_lang =[
    "Mickaël" => "FRA",
    "Virgil" => "ENG",
    "Maries-Claire" => "ESP"
];


function Associer_Lang_Nom($p_l,$l_s){
    foreach($p_l as $prenom => $langue){
        echo "$l_s[$langue] $prenom <br>";
    }
}

Associer_Lang_Nom($prenom_lang,$lang_salutation);
ksort($prenom_lang);
echo "<br>";
echo "Variante avec ordre alphabétique :<br>";
Associer_Lang_Nom($prenom_lang,$lang_salutation);
?>