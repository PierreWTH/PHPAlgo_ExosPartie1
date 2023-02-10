<h1> Exercice 4 </h1>

<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome. </p>

<h2> Résultat </h2>

<?php

$phrase = "Engage le jeu que je le gagne";

//On inverse la phrase et on la met en minuscule
$inverse = strtolower(strrev($phrase));

//On enlève les espaces de la phrase inversée
$inversesansespace = str_replace(" ", "", $inverse);

//On enleve les espaces de la phrase originale et on la met en minuscule
$phrasesansespace = strtolower(str_replace(" ", "", $phrase));

// On compare les 2
if ($inversesansespace === $phrasesansespace) {
    echo $phrase. " est palindrome";
}
else {
   echo $phrase. " n'est pas palindrome.";
}


