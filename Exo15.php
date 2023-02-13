<h1> Exercice 15 </h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
Affichage :
Michel DUPONT a … ans
Alice DUCHEMIN a … ans
</p>

<h2> Résultat </h2>

<?php

class Personne{

    // Déclaration propriétés

    private string $_nom;
    private string $_prenom;
    private string $_datenaissance;

    // Construct

    public function __construct($nom, $prenom, $datenaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_datenaissance = $datenaissance;
    }

    // Méthodes

        // Calcul de l'âge

    public function calcAge()
    {
        $ajd = date("Y-m-d");
        $diff = date_diff(date_create($this->_datenaissance), date_create($ajd));
        $age = $diff->format('%y');
        return $age;
    }

        // Affichage des infos

    public function afficherInfos(){
        $age = $this->calcAge();
        echo $this->_nom. " " .$this->_prenom. " à " .$age. " ans.<br>";
    }

    // Getters and Setters

        //Nom

    public function getNom(){
        return $this->_nom;
    }

    public function setNom(string $nom){
        return $this->_nom = $nom;
    }
        // Prenom

    public function getPrenom(){
        return $this->_prenom;
    }

    public function setPrenom(string $prenom){
        return $this->_prenom = $prenom;
    }

        // Date naissance

    public function getDatenaissance(){
        return $this->_datenaissance;
    }

    public function setDatenaissance(string $datenaissance){
        return $this->_datenaissance = $datenaissance;
    }


    // Créations instance

}

$p1 = new Personne("DUPONT", "Michel", "1985-01-17");
$p2 = new Personne("POINTAK", "Alice", "1928-09-24");

$p1->afficherInfos();
$p2->afficherInfos();


?>