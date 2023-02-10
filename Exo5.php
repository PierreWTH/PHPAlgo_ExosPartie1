<h1> Exercice 5 </h1>

<p> Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales. </p>

<h2> Résultat </h2>

<?php

$montantfranc = 100;
$tauxconversion = 6.55;
$montanteuro = $montantfranc / $tauxconversion;

// Fonction number_format() pour définir le nombre de décimale du résultat

$resultat = number_format($montanteuro,2);
echo "Montant en franc : $montantfranc <br/>";
echo "$montantfranc francs = $resultat euros";
