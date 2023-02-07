<h1> Exercice 4 </h1>

<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome. </p>

<h2> Résultat </h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$inverse = strtolower(strrev($phrase));
$inversesansespace = str_replace(" ", "", $inverse);
$phrasesansespace = strtolower(str_replace(" ", "", $phrase));

if ($inversesansespace === $phrasesansespace) {
    echo $phrase. " est palindrome";
}
else {
   echo $phrase. " n'est pas palindrome.";
}


