<h1> Exercice 11 </h1>

<p> Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
Affichage (attention à utiliser une liste à puces)

Il y a 4 marques de voitures dans le tableau :
Peugeot
Renault
BMW
Mercedes
</p>

<h2> Résultat </h2>

<?php

$tableau = array(
    1 => "Peugeot",
    2 => "Renault",
    3 => "BMW",
    4 => "Mercedes",
);

$nombre = count($tableau);

echo "Il y a $nombre marques de voitures dans le tableau : ";
foreach ($tableau as $v) {
    echo " <li> $v";
}
