<h1> Exercice 8 </h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :
Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 … </p>

<h2> Résultat </h2>


<?php

/* Boucle for */

$numerotable = 8;
$resultat = 1;

echo "Table de $numerotable <br/>";
for($i = 1; $i <= 10; $i++) {
    $resultat = $numerotable * $i;
    
    echo "$i x $numerotable = $resultat<br/>";
}


/* Boucle while */

$numerotable = 8;
$resultat = 1;
$i = 1;

echo "Table de $numerotable <br/>";
while($i <= 10) {
    $resultat = $numerotable * $i;

    echo "$i x $numerotable = $resultat<br/>";
    $i++;
}