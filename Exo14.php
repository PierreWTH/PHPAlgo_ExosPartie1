<h1> Exercice 14 </h1>

<p> Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
Affichage (si la date courante est le 21/05/2018 et la date de naissance le 
17/01/1985 :
Age de la personne : 33 ans 4 mois 4 jours

</p>

<h2> Résultat </h2>

<?php

// Module Datetime pour gerer les dates

$datedujour = new DateTime("2018-05-21");
$datenaissance = new DateTime('1985-01-17');
$interval = $datedujour->diff($datenaissance);

// Différence entre les dates

echo "Age de la personne : " . $interval->y . " ans, " . $interval->m." mois, ".$interval->d." jours.";





